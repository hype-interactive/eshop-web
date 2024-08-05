<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Log;




class Register extends Controller
{

    function index(){
        return view('sections.register');
    }
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15|unique:customers,phone',
            'password' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        try {
            Customer::create([
                'full_name' => $request->full_name,
                'phone' => $request->phone_number,
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('customer-login')
                             ->with('success', 'Customer registered successfully.');
        } catch (Exception $e) {
            dd( $e->getMessage());
            // Log the error message for debugging
            Log::error('Customer registration failed: ' . $e->getMessage());
            return redirect()->back()
                             ->withInput()
                             ->with('error', 'An error occurred while registering the customer. Please try again.');
        }
    }

}
