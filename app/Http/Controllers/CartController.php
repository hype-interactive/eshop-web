<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index(){
        $cart_items=Cart::get();
        foreach($cart_items as $data){
          $product=Product::where('id',$data->product_id)->first();

          $data['name']=$product->name;
          $data['price']=$product->final_price;
          $data['image']=$product->image_url;
          $data['unit']=$product->unit;
        }

        return view('pages.my-cart',[
            'carts'=>$cart_items,
        ]);
    }
}
