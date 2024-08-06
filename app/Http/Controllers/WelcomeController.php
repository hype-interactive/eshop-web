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
        $products= Product::where('final_price', '>=', 1)
                    ->orderBy('created_at', 'desc')
                    ->take(20)
                    ->get();
        $product_category=ProductCategory::where('status', 'active')
                            ->orderBy('created_at', 'desc')
                            ->take(20)
                            ->get();

        $featured_product=Product::where('featured',true)->where('final_price','>=',1)->paginate(20);
        return view('pages.welcome',[

            'billboard'=>$billboard,
            'products'=>$products,
            'product_category'=>$product_category,
            'featured_products'=>$featured_product,

        ]);
    }
}
