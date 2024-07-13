<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('customer-login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('customer-login',[\App\Http\Controllers\Customer\LoginController::class,'index'])->name('customer-login');
Route::post('customer-login-action',[\App\Http\Controllers\Customer\LoginController::class,'login'])->name('customer-login-action');


//customer register
Route::get('customer-register',[\App\Http\Controllers\Customer\Register::class,'index'])->name('customer-register');
Route::post('customer-registration',[\App\Http\Controllers\Customer\Register::class,'register'])->name('customer-registration');

Route::get('customer-dashboard',function (){
    return view('login');
});


Route::fallback(function () {
    return response()->view('page-not-found', [], 404);
});
