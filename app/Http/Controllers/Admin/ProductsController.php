<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index()
    {
        return view('site/admin/products');
    }
}