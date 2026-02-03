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
            'shopstate' => 'close'
        ];
        return view('hello', $boutique);
    }

    public function about()
    {
        return view('layouts.about');
    }

    public function app()
    {
        return view('layouts.app');
    }
}
