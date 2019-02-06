<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CguController extends Controller
{
    public function index()
    {
        return view('site/cgu');
    }
}