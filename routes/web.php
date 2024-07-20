
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('customer-welcome-page');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('customer-login',[\App\Http\Controllers\Customer\LoginController::class,'index'])->name('customer-login'); //done
Route::post('customer-login-action',[\App\Http\Controllers\Customer\LoginController::class,'login'])->name('customer-login-action'); //done

//customer register
Route::get('customer-register',[\App\Http\Controllers\Customer\Register::class,'index'])->name('customer-register'); //done
Route::post('customer-registration',[\App\Http\Controllers\Customer\Register::class,'register'])->name('customer-registration'); //done

//customer logout
Route::get('customer-welcome',[\App\Livewire\Welcome::class,'render'])->name('customer-welcome-page'); //done
Route::get('customer-product',[\App\Livewire\Products::class,'render'])->name('customer-product-page'); //done

//customer cart
Route::get('view-product',[App\Livewire\ViewProduct::class,'render'])->name('view-product'); //done
Route::get('view-cart',[App\Livewire\MyCart::class,'render'])->name('view-cart');//done
Route::get('payment-info',[App\Livewire\Payment::class,'render'])->name('view-payment'); //done

//customer profile
Route::get('customer-profile',[App\Livewire\Profile::class,'render'])->name('customer-profile'); //done
Route::get('customer-subscription',[App\Livewire\Subscription::class,'render'])->name('subscription'); //done



Route::fallback(function () {
    return response()->view('page-not-found', [], 404);
});



// Route::get('test-page', function (){
//     return view('product_list');
// });
