<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
session_start();


class CartController extends Controller
{
    //afficher panier
    public function showCart()
    {
        return view('cart.index');
    }

    //ajouter des articles
    public function addToCart(Request $request ,Product $product, $quantity)
    {
        $cart = session()->get('cart');
        $product_list=[
            'id' => $product->id,
            'name' => $product->name,
            'quantity' => $quantity,
            'price' => $product->price
        ];
        $cart[$product->id] = $product_list;
        return view('cart.add');
    }

    //modifier des quantités
    public function updateCart(Request $request, Product $product)
    {
        $cart=session()->get('cart');
        return view('cart.update');
    }

    //retirer un produit
    public function removeFromCart(Request $request, Product $product)
    {
        $cart = session()->get('cart');
        unset($cart[$product->id]);
        session()->put('cart', $cart);
        return view('cart.remove');
    }

    //vider le panier
    public function clearCart()
    {
        Session::forget('cart');
    }

}
