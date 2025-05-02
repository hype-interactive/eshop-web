<?php

namespace App\Http\Controllers;

use App\Http\Integration\Beem\BeemSMSController;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use App\Models\Payment;

class PaymentController extends Controller
{


    function createOrder(Request $request)
    {
        $rules=
        [
           'full_name'=>'required',
           'email'=>'required',
           'phone_number'=>'required',
           'payment_number'=>'required',
           'location'=>'required',
           'payment_method'=>'required'
        ];

        //validation of order
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            // Redirect back with input and validation errors
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $array=[
            'full_name'=>$request->full_name,
             'email'=>$request->email,
             'location'=>$request->location,
        ];

        try{


        //create order form the cart
        $order_id = 'ES' . time();
        $customer_id = session('user')->id;
        $payment_method=$request->payment_method;
        $payment_number=$request->payment_number;
//message
        $message="Dear $request->full_name , Your order has been created successfully with order id : $order_id, Please make payment to complete your order  Thanks For choosing us ";


        DB::transaction(function () use ($order_id, $customer_id,$payment_method, $array ,$payment_number,$message) {
       //clear of cart
           Customer::where('id',session('user')->id)->update($array);
         session()->put('user',Customer::where('id',session('user')->id)->first());

            $total_amount = 00;
            foreach (Cart::where('customer_id', $customer_id)->get() as $cart) {
                OrderProduct::create([
                    'order_id' => $order_id,
                    'product_id' => $cart->product_id,
                    'quantity' => $cart->quantity

                ]);
                $price = Product::where('id', $cart->product_id)->value('final_price');
                $total_amount = (float)($total_amount + ($price * $cart->quantity));
            }

            Order::create([
                'customer_id' => $customer_id,
                'total' => $total_amount,
                'order_id' => $order_id,
                'date' => now(),
                'payment_status' => 'pending',
                'status' => 'pending',
                'payment_method'=>$payment_method,
                'payment_number'=>$payment_number,

            ]);

              //send sms to customer
            try {
             $return_data=   BeemSMSController::send($payment_number,$message,$payment_number,'');
             Log::info($return_data);
            } catch (\Throwable $th) {
                Log::error( 'payment controller:97 '. $th);
            }




            //clear cart
            Cart::where('customer_id', $customer_id)->delete();
        });

        session()->put('paymentOrder',false);
        session()->forget('paymentOrder');
        return redirect()->route('customer-order');

    }
    catch(\Exception $e){
        return $e->getMessage();

    }
    }

    function index()
    {
        $customer_id = session('user')->id;
        session()->put('paymentOrder',true);

        $total_amount = 00;
        foreach (Cart::where('customer_id', $customer_id)->get() as $cart) {


            $price = Product::where('id', $cart->product_id)->value('final_price');
            $total = (float)($total_amount + ($price * $cart->quantity));
        }

        return view('pages.payment', [
            'total' => $total,
        ]);
    }




    public function processSelcomPayment(Request $request)
    {
        // Validate request
        $validated = $request->validate([
            'package_id' => 'required|exists:packages,id',
            'phone' => 'required|string',
            'network' => 'required|in:vodacom,tigo'
        ]);
        
        // Get package details
        $package = Package::findOrFail($validated['package_id']);
        
        // Format phone number (remove leading zero and add country code if needed)
        $phone = $this->formatPhoneNumber($validated['phone']);
        
        // Generate unique reference
        $reference = 'PAY-' . Str::random(10);
        
        try {
            // Initialize payment record in database
            $payment = Payment::create([
                'reference' => $reference,
                'package_id' => $package->id,
                'amount' => $package->price,
                'phone' => $phone,
                'network' => $validated['network'],
                'status' => 'pending'
            ]);
            
            // Initialize Selcom API request
            $response = $this->initializeSelcomPayment($payment, $package);
            
            // If successful, return reference for status checking
            if ($response && isset($response['result']) && $response['result'] == 'SUCCESS') {
                return response()->json([
                    'success' => true,
                    'reference' => $reference,
                    'message' => 'Payment initiated. Please check your phone.'
                ]);
            }
            
            // Handle API error
            Log::error('Selcom payment error', ['response' => $response]);
            return response()->json([
                'success' => false,
                'message' => 'Error initiating payment. Please try again.'
            ], 500);
            
        } catch (\Exception $e) {
            Log::error('Payment process exception', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'System error. Please try again later.'
            ], 500);
        }
    }
    
    /**
     * Check payment status
     */
    public function checkPaymentStatus(Request $request)
    {
        $validated = $request->validate([
            'reference' => 'required|string|exists:payments,reference'
        ]);
        
        $payment = Payment::where('reference', $validated['reference'])->first();
        
        if (!$payment) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Payment reference not found'
            ]);
        }
        
        // If already completed or failed in our database
        if ($payment->status === 'completed') {
            return response()->json([
                'status' => 'completed',
                'message' => 'Payment was successful'
            ]);
        }
        
        if ($payment->status === 'failed') {
            return response()->json([
                'status' => 'failed',
                'message' => 'Payment was declined'
            ]);
        }
        
        // Check status with Selcom API
        try {
            $response = $this->checkSelcomPaymentStatus($payment->reference);
            
            if ($response && isset($response['result'])) {
                if ($response['result'] == 'SUCCESS' && isset($response['payment_status'])) {
                    
                    // Update our database based on Selcom status
                    if ($response['payment_status'] == 'COMPLETED') {
                        $payment->status = 'completed';
                        $payment->transaction_id = $response['transaction_id'] ?? null;
                        $payment->save();
                        
                        // Here you would activate the subscription
                        $this->activateSubscription($payment);
                        
                        return response()->json([
                            'status' => 'completed',
                            'message' => 'Payment successful'
                        ]);
                    } else if ($response['payment_status'] == 'FAILED') {
                        $payment->status = 'failed';
                        $payment->save();
                        
                        return response()->json([
                            'status' => 'failed',
                            'message' => 'Payment failed'
                        ]);
                    }
                }
            }
            
            // Still pending
            return response()->json([
                'status' => 'pending',
                'message' => 'Payment is still processing'
            ]);
            
        } catch (\Exception $e) {
            Log::error('Payment status check error', ['error' => $e->getMessage()]);
            return response()->json([
                'status' => 'pending',
                'message' => 'Error checking payment status'
            ]);
        }
    }
    
    /**
     * Format phone number for Selcom
     */
    private function formatPhoneNumber($phone)
    {
        // Remove any non-digit characters
        $phone = preg_replace('/\D/', '', $phone);
        
        // Remove leading zero if present
        if (substr($phone, 0, 1) === '0') {
            $phone = substr($phone, 1);
        }
        
        // Add Tanzania country code if not present
        if (substr($phone, 0, 3) !== '255') {
            $phone = '255' . $phone;
        }
        
        return $phone;
    }
    
    /**
     * Initialize payment with Selcom API
     */
    private function initializeSelcomPayment($payment, $package)
    {
        // Replace with your actual Selcom API credentials
        $selcomVendor = config('services.selcom.vendor');
        $selcomApiKey = config('services.selcom.api_key');
        $selcomApiSecret = config('services.selcom.api_secret');
        
        // Determine payment channel based on network
        $channel = ($payment->network == 'vodacom') ? 'MPESA' : 'TIGO';
        
        // API endpoint
        $endpoint = config('services.selcom.base_url') . '/checkout/create-order-minimal';
        
        // Prepare request payload
        $payload = [
            'vendor' => $selcomVendor,
            'order_id' => $payment->reference,
            'buyer_email' => auth()->user()->email ?? 'customer@example.com',
            'buyer_name' => auth()->user()->name ?? 'Customer',
            'buyer_phone' => $payment->phone,
            'amount' => $payment->amount,
            'currency' => 'TZS',
            'no_of_items' => 1,
            'payment_method' => $channel,
            'payment_channel' => $channel,
            'callback_url' => route('selcom.webhook'),
            'redirect_url' => route('vendor.dashboard')
        ];
        
        // Make API request
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Basic ' . base64_encode($selcomApiKey . ':' . $selcomApiSecret),
                'Content-Type' => 'application/json'
            ])->post($endpoint, $payload);
            
            return $response->json();
        } catch (\Exception $e) {
            Log::error('Selcom API error', ['error' => $e->getMessage()]);
            return null;
        }
    }
    
    /**
     * Check payment status with Selcom API
     */
    private function checkSelcomPaymentStatus($reference)
    {
        // Replace with your actual Selcom API credentials
        $selcomVendor = config('services.selcom.vendor');
        $selcomApiKey = config('services.selcom.api_key');
        $selcomApiSecret = config('services.selcom.api_secret');
        
        // API endpoint
        $endpoint = config('services.selcom.base_url') . '/checkout/order-status';
        
        // Prepare request payload
        $payload = [
            'vendor' => $selcomVendor,
            'order_id' => $reference
        ];
        
        // Make API request
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Basic ' . base64_encode($selcomApiKey . ':' . $selcomApiSecret),
                'Content-Type' => 'application/json'
            ])->post($endpoint, $payload);
            
            return $response->json();
        } catch (\Exception $e) {
            Log::error('Selcom status check API error', ['error' => $e->getMessage()]);
            return null;
        }
    }
    
    /**
     * Activate subscription after successful payment
     */
    private function activateSubscription($payment)
    {
        // Get the user (assuming we're using auth)
        $user = auth()->user();
        
        if (!$user) {
            Log::error('Cannot activate subscription: No authenticated user');
            return;
        }
        
        // Get the package
        $package = Package::find($payment->package_id);
        
        if (!$package) {
            Log::error('Cannot activate subscription: Package not found', ['package_id' => $payment->package_id]);
            return;
        }
        
        // Here you would implement your subscription activation logic
        // For example:
        $user->subscription()->create([
            'package_id' => $package->id,
            'starts_at' => now(),
            'expires_at' => now()->addMonth(),
            'status' => 'active',
            'payment_id' => $payment->id
        ]);
        
        // Update user role to vendor if needed
        $user->role = 'vendor'; 
        $user->save();
        
        // Send confirmation email
        // Mail::to($user->email)->send(new SubscriptionActivated($user, $package));
    }



}
