<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Mail;
use Auth;

use Auth;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function report()
    {
        $username = Auth::user()->last_name;
        Mail::send('site.report', ['username' => $username], function ($message) {
            $message->to('notifprojetbdebordeaux@gmail.com')->subject('SIGNALEMENT');
        });
        return view('home');
    }

    public function order()
    {
        $username = Auth::user()->last_name;
        $usermail = Auth::user()->email;
        Mail::send('site.order', ['username' => $username, 'usermail' => $usermail], function ($message) {
            $message->to('notifprojetbdebordeaux@gmail.com')->subject('COMMANDE');
        });
        return view('home');
    }

}