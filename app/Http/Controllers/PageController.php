<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function sales()
    {
        return view('sales');
    }

    public function company()
    {
        return view('company');
    }

    public function contact()
    {
        return view('contact');
    }
}
