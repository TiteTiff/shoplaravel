<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $boutique = [
            'name' => 'PoleWear',
            'quantity' => 10,
            'shopstate' => 'open'
        ];
        return view('hello', $boutique);
    }

    public function about()
    {
        return ('This e-shop is designed for polers who wants high quality polewear.');
    }
}
