<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{


    function createOrder(Request $request)
    {

        //validation of order

        $array=[
            'full_name'=>$request->full_name,
             'email'=>$request->email,
             'location'=>$request->location,
        ];

        // update user information




        //create order form the cart
        $order_id = 'ES' . time();
        $customer_id = session('user')->id;
        $payment_method=$request->payment_method;
        DB::transaction(function () use ($order_id, $customer_id,$payment_method, $array) {
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

            ]);
            //clear cart
            Cart::where('customer_id', $customer_id)->delete();
        });

        session()->put('paymentOrder',false);
        session()->forget('paymentOrder');
        return redirect()->route('customer-order');
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
