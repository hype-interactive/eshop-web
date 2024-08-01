<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index(){
        //caluclate the total
        $total_amount=00;
        $customer_id=session()->get('user')->id;

        $cart_items=Cart::where('customer_id',$customer_id)->get();
        foreach($cart_items as $data){
          $product=Product::where('id',$data->product_id)->first();
          $data['name']=$product->name;
          $data['price']=$product->final_price;
          $data['image']=$product->image_url;
          $data['unit']=$product->unit;

        //   $total_amount=(double)($total_amount + ($product->final_price * $data->quantity));
        $total_amount=(double)($total_amount + ($product->final_price * $data->quantity));


        }


        return view('pages.my-cart',[
            'carts'=>$cart_items,
            'total_amount'=>$total_amount,
        ]);
    }


    function removeItem(Request $request){

        //validate
         $cart= Cart::where('id',$request->id)->first();

         if($cart->customer_id == session('user')->id){
            Cart::where('id',$request->id)->delete();
         }else{

         }
         return back();


    }
}
