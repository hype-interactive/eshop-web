<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;



class Register extends Controller
{

    function index(){
        return view('frontEnd.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15|unique:customers,phone_number',
            'password' => 'required|string|min:6',
        ]);

        Customer::create([
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('customer-login')->with('message', 'Account created successfully!');
    }

}
