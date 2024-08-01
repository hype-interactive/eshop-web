<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class MyCartController extends Controller
{
    function index(){
        $customer_id=session('user')->id;
        if($customer_id){
            $carts=Cart::where('customer_id',$customer_id)->get();
            return view('pages.my-cart',[
                'carts'=>$carts
            ]);
        }else{
            return redirect()->route('customer-login');
        }
    }
}
