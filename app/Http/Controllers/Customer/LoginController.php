<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    function index(){
        return view('sections.login');
    }


    public function login(Request $request)
    {
    $credentials = $request->only('phone_number', 'password');

    $customer = Customer::where('phone', $credentials['phone_number'])->first();

    if ($customer && Hash::check($credentials['password'], $customer->password)) {
        // Login successful
        Auth::login($customer);



        // increment

        Customer::where('phone', $credentials['phone_number'])
        ->update([
            'vendor_notification_day' => DB::raw('vendor_notification_day + 1')
        ]);

        if(Customer::where('phone', $credentials['phone_number'])->value('vendor_notification_day') <= 7){

            session()->put('show-banner','true');

            Customer::where('phone', $credentials['phone_number'])
            ->update([
                'vendor_notification_day' => 0
            ]);

        }
        // Regenerate session
        $request->session()->regenerate();
        // dd(auth()->user());
        session()->put('user', $customer );
        // Set session timeout (e.g., 30 minutes)
        $timeout = 30 * 60; // 30 minutes in seconds
        $request->session()->put('last_activity_time', time());
        $request->session()->put('session_timeout', $timeout);



        return redirect()->intended('customer-welcome'); // Redirect to intended route or dashboard

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
