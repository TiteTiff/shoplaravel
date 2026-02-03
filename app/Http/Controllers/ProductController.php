<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        return ("Détails du product $id");
    }

    public function index()
    {
        $products = [
            ['identifiant' => '1', 'name' => "pole short", 'price' => 39.99],
            ['identifiant' => '2',"name" => 'pole bra', 'price' => 35.99],
            ['identifiant' => '3', 'name' => 'pole short mesh', 'price' => 49.99],
            ['identifiant' => '4', 'name' => 'pole bra mesh', 'price' => 45.99],
            ['identifiant' => '5', 'name' => 'legging', 'price' => 49.99]
        ];
        return view('products/index', compact('products'));
        //return view('products/index', [
           // 'products' => $products,
        //]);
    }
}



