<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class ViewProductController extends Controller
{
   public function index(Request $request){

    $products=Product::where('id',$request->id)->get();

    foreach($products as $product){
       $category_id=  $product->product_category_id;
    }

    $relatedProducts=Product::where('product_category_id',$category_id)->paginate(20);


    return view('pages.view-product',
    [
        'products'=>$products,
        'relatedProducts'=>$relatedProducts
    ]);
   }

function addToCart(Request $request){
    // Validate the request

    if(session('user')){

   $customer_id=session('user')->id;
   $request->merge([ 'quantity'=>(int)$request->quantity ]);

  $validated = $request->validate([
    'quantity' => 'required|integer|min:1',
    'product_id' => 'required|exists:products,id',
]);


if($customer_id){
// Check if the product is already in the cart for the given customer
$cartItem = Cart::where('product_id', $request->product_id)
                ->where('customer_id', $customer_id)
                ->first();

if ($cartItem) {
    // If item exists, update the quantity
    $cartItem->quantity += $request->quantity;
    $cartItem->save();
    session()->flash('message', 'Product quantity updated in the cart.');
} else {
    // If item does not exist, create  new
    Cart::create([
        'quantity' => $request->quantity,
        'product_id' => $request->product_id,
        'customer_id' => $customer_id,
    ]);

    session()->flash('message', 'Product successfully added to the cart.');
}
session()->forget('paymentOrder');
     return redirect()->back();
}
else
{
  return redirect()->route('customer-login');
}


}else{
    return redirect()->route('customer-login');
}

    }


}
