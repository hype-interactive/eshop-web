<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Subscriptions extends Controller
{
    function index(){

        $packages=DB::table('packages')->where('status','active')->get();

        return view('pages.subscription',['packages'=> $packages]);
    }
}
