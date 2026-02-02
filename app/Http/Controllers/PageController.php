<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('hello');
    }
    public function about()
    {
        return ('This e-shop is designed for polers who wants high quality polewear.');
    }
}
