<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Customer\LoginController;
use App\Http\Controllers\Customer\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewProductController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('customer-welcome-page');
})->name('home');



Route::get('login',function(){
    return redirect()->route('customer-login');

});


Route::get('register',function(){
    return redirect()->route('customer-register');
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
Route::get('customer-login', [\App\Http\Controllers\Customer\LoginController::class, 'index'])->name('customer-login'); //done
Route::post('customer-login-action', [\App\Http\Controllers\Customer\LoginController::class, 'login'])->name('customer-login-action');


//customer register
Route::get('customer-register', [\App\Http\Controllers\Customer\Register::class, 'index'])->name('customer-register');//done
Route::post('customer-registration', [\App\Http\Controllers\Customer\Register::class, 'register'])->name('customer-registration');

// new changes
Route::get('customer-welcome', [WelcomeController::class, 'index'])->name('customer-welcome-page');//done


Route::get('customer-product/{id?}', [ProductController::class, 'index'])->name('customer-product-page');//done

Route::get('view-product/{id}', [ViewProductController::class, 'index'])->name('view-product'); //done
Route::post('add-to-cart',[ViewProductController::class, 'addToCart'])->name('add-toCart');

Route::get('view-cart', [CartController::class, 'index'])->name('view-cart'); //done
Route::post('remove-cart-item',[CartController::class,'removeItem'])->name('remove-cart-item');
Route::post('change-product-quantity',[CartController::class,'changeQunantity'])->name('change-product-quantity');

Route::get('payment-info', [PaymentController::class, 'index'])->name('payments'); //done
Route::post('payment-order', [PaymentController::class, 'createOrder'])->name('makeOrder'); //donemakeOrder



Route::get('customer-profile', [ProfileController::class, 'index'])->name('customer-profile'); //done
Route::get('customer-order',[OrderController::class,'index'])->name('customer-order');
Route::get('customer-logout',[LoginController::class,'logout'])->name('customer-logout');
Route::post('update-customer-info',[ProfileController::class,'update'])->name('update-customer-info');
Route::get('customer-subscription', [App\Livewire\FrontEnd\Subscription::class, 'render'])->name('subscription');



Route::fallback(function () {
    return response()->view('page-not-found', [], 404);
});



// Route::get('test-page', function (){
//     return view('product_list');
// });

// Route::get('customer-dashboard',function (){
//     return view('login');
// });
