<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(){

        if(session('user')){


        $orders=Order::where('customer_id',session('user')->id)->paginate(10);

        return view('pages.profile',[
            'orders'=>$orders
        ]);
    }else{
        return redirect()->route('customer-login');
    }
}
}
