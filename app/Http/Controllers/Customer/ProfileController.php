<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;
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

function update(Request $request){

    $id=session('user');

    $rules = [
        'full_name' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:customers,email,' . $id,
    ];


    // Perform validation
    $validator = Validator::make($request->all(), $rules);

    // Check if validation fails
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Find the customer by ID
    $customer = Customer::findOrFail($id);

    // Update customer information
    $customer->update([
        'full_name' => $request->input('full_name'),
        'location' => $request->input('location'),
        'email' => $request->input('email'),
    ]);


    return back();

}
}
