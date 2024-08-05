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


        $query= Product::query()->where('final_price','>=',1);

        if($request->id){
            $query->where('product_category_id',$request->id);
        }

        if($request->sortBy=="date"){
            $query->orderBy('created_at', 'asc');
        }
        if($request->sortBy=="price"){
            $query->orderBy('final_price', 'asc');

        }
        if ($request->has('min_price') && !is_null($request->min_price)) {
            $query->where('final_price', '>=', $request->min_price);
        }

        if ($request->has('max_price') && !is_null($request->max_price)) {
            $query->where('final_price', '<=', $request->max_price);
        }


       $products=  $query->paginate(20);

        return view('pages.products',[
            'products'=>$products,
            'categories'=>$categories
        ]);
    }
}
