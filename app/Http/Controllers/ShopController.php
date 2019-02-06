<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function index(){
        
        $products = Product::all();
        dd($products);
        return view('site/shop');
    }
}