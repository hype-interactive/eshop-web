<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index(){
        $orders=Order::where('customer_id',session('user')->id)->paginate(10);

        return view('pages.profile',[
            'orders'=>$orders
        ]);
    }
}
