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

Route::get('test-page', function (){
    return view('product_list');
});

Route::get('customer-welcome',[\App\Livewire\FrontEnd\Welcome::class,'render'])->name('customer-welcome-page');
Route::get('customer-product',[\App\Livewire\FrontEnd\Products::class,'render'])->name('customer-product-page');

Route::get('view-product',[App\Livewire\FrontEnd\ViewProduct::class,'render'])->name('view-product');
Route::get('view-cart',[App\Livewire\FrontEnd\MyCart::class,'render'])->name('view-cart');
Route::get('payment-info',[App\Livewire\FrontEnd\Payment::class,'render'])->name('view-cart');

Route::get('customer-profile',[App\Livewire\FrontEnd\Profile::class,'render'])->name('customer-profile');
Route::get('customer-subscription',[App\Livewire\FrontEnd\Subscription::class,'render'])->name('subscription');







Route::fallback(function () {
    return response()->view('page-not-found', [], 404);
});
