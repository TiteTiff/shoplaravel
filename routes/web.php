<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return ('Hello Laravel!');
});

use App\Http\Controllers\PageController;

Route::get('/home', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);

use App\Http\Controllers\ProductController;

Route::get('/products/{id}', function ($id) {
    return 'product ' .$id;
});
