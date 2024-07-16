<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    function index(){
        return view('frontEnd.login');
    }


    public function login(Request $request)
    {
    $credentials = $request->only('phone_number', 'password');

    $customer = Customer::where('phone', $credentials['phone_number'])->first();

    if ($customer && Hash::check($credentials['password'], $customer->password)) {
        // Login successful
        Auth::login($customer);

        // Regenerate session
        $request->session()->regenerate();

        // Set session timeout (e.g., 30 minutes)
        $timeout = 30 * 60; // 30 minutes in seconds
        $request->session()->put('last_activity_time', time());
        $request->session()->put('session_timeout', $timeout);

        return redirect()->intended('customer-dashboard'); // Redirect to intended route or dashboard
    }

    return back()->withErrors([
        'phone_number' => 'The provided credentials do not match our records.',
    ]);
}

public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}

}
