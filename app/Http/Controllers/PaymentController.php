<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{


    function createOrder(Request $request)
    {

        //validation of order

        //clear of cart


        //create order form the cart
        $order_id = 'ES' . time();
        $customer_id = session('user')->id;
        DB::transaction(function () use ($order_id, $customer_id) {

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

            ]);
            //clear cart
            Cart::where('customer_id', $customer_id)->delete();
        });

        session()->put('paymentOrder',false);
        session()->forget('paymentOrder');
        return redirect()->route('customer-profile');
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
