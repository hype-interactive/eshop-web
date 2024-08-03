<?php

namespace App\Http\Controllers;

use App\Models\Billboard;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

        $billboard=Billboard::where('visibility',true)->get();
        $products=Product::where('final_price','>=',1)->get();
        $product_category=ProductCategory::get();
        $featured_product=Product::where('featured',true)->where('final_price','>=',1)->paginate(3);
        return view('pages.welcome',[

            'billboard'=>$billboard,
            'products'=>$products,
            'product_category'=>$product_category,
            'featured_products'=>$featured_product,

        ]);
    }
}
