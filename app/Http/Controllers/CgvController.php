<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CgvController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site/cgv');
    }
}