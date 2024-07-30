<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
      //list of the system categoris
      $categories= ProductCategory::get();


        $query= Product::query();

        if($request->id){
            $query->where('product_category_id',$request->id);
        }
       $products=  $query->paginate(20);

        return view('pages.products',[
            'products'=>$products,
            'categories'=>$categories
        ]);
    }
}
