<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return ('Hello Laravel!');
});

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
