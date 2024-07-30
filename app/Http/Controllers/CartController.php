<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index(){
        $cart_items=Cart::get();

        return view('pages.my-cart',[
            'carts'=>$cart_items,
        ])
    }
}
