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
}
