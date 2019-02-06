<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Legal_NoticeController extends Controller
{
    public function index()
    {
        return view('site/legal_notice');
    }
}