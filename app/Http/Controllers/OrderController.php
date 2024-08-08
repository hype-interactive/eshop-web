<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index(){
        if(session('user')){


        $orders=Order::where('customer_id',session('user')->id)->paginate(10);

        return view('pages.profile',[
            'orders'=>$orders
        ]);
    }
    else{
        return redirect()->route('customer-login');
    }
    }


    function orderList(Request $request){
        // check if user has that order id
        $order_id=$request->order_id;
      $order=Order::where('order_id',$order_id)->first();

        if($order->customer_id== session('user')->id ){
            // yes simple test passed
            $order_products=OrderProduct::where('order_id',$order_id)->get();
            foreach($order_products as $product){

                $data=Product::where('id',$product->product_id)->first();
                $product['name']=  $data->name;
                $product['unit']=$data->unit;
                $product['price']=$data->final_price;
            }

            session()->put('order_list',$order_products);
            session()->put('order_id',$order_id);
            return back();
            
        }
        return back();
    }

    function disableList(){
        session()->forget('order_list');
        return back();
    }
}
