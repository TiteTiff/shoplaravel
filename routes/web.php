<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return ('Hello Laravel!');
});

use App\Http\Controllers\PageController;

Route::get('/home', [PageController::class, 'home'])
->name('home');
Route::get('/about', [PageController::class, 'about'])
->name('about');
Route::get('/app', [PageController::class, 'app'])
    ->name('app');

use App\Http\Controllers\ProductController;

Route::get('/product/{id}', [ProductController::class, 'show'])
->name('product.show');

Route::get('/index', [ProductController::class, 'index'])
->name('index');

use App\Http\Controllers\CategoryController;

Route::get('/category/{id}', [CategoryController::class, 'show'])
    ->name('category.show');

use App\Http\Controllers\ProductsController;

Route::resource('products', ProductsController::class);
//URLs: products.index, .store, .create, .show, .update, .destroy, .edit


