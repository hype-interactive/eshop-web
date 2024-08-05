<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index()
    {
        //caluclate the total
        $total_amount = 00;
        if(session()->get('user')){


        $customer_id = session()->get('user')->id;

        $cart_items = Cart::where('customer_id', $customer_id)->get();
        foreach ($cart_items as $data) {
            $product = Product::where('id', $data->product_id)->first();
            $data['name'] = $product->name;
            $data['price'] = $product->final_price;
            $data['image'] = $product->image_url;
            $data['unit'] = $product->unit;

            //   $total_amount=(double)($total_amount + ($product->final_price * $data->quantity));
            $total_amount = (float)($total_amount + ($product->final_price * $data->quantity));
        }

        return view('pages.my-cart', [
            'carts' => $cart_items,
            'total_amount' => $total_amount,
        ]);
    }else{

        return redirect()->route('customer-login');
    }



    }


    function removeItem(Request $request)
    {

        //validate
        $cart = Cart::where('id', $request->id)->first();

        if ($cart->customer_id == session('user')->id) {
            Cart::where('id', $request->id)->delete();
        } else {
        }
        return back();
    }

    function changeQunantity(Request $request)
    {



        if(session('user')){


        // $request->quantity= (int)$request->quantity;

        $cart = Cart::where('id', $request->id)->where('customer_id', session('user')->id)
            ->first();
        // if ($cart && $request->quantity >= 0) {

        //     Cart::where('id', $request->id)->where('customer_id', session('user')->id)
        //         ->update(['quantity' => $request->quantity]);
        // }

        // return back();

        if ($cart ) {
            // Determine the new quantity based on the action
            if ($request->value == 'increases') {
                $newQuantity = $cart->quantity + 1;
            } elseif ($request->value == 'decreases') {
                // Ensure quantity doesn't go below 0
                $newQuantity = max(0, $cart->quantity - 1);
            } else {
                // Handle invalid action
                return response()->json(['error' => 'Invalid action'], 400);
            }

            // Update the cart with the new quantity
            Cart::where('id', $request->id)
                ->where('customer_id', session('user')->id)
                ->update(['quantity' => $newQuantity]);

            // Optionally return a success response
            return back();
        } else {
            // Handle case where cart item is not found
            return response()->json(['error' => 'Cart item not found'], 404);
        }



    }else{
        return redirect()->route('customer-login');
    }
    }
}
