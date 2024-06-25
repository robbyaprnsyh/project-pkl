<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function() {
    Route::resource('user', UserController::class);
});

Route::get('/', function() {
    return view('welcome');
});

Route::get('data', function() {
    return view('data');
});

Auth::routes(
    // ['register' => false]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Crud Brand
use App\Http\Controllers\BrandController;
Route::resource('brand', BrandController::class);

// Crud Product
use App\Http\Controllers\ProductController;
Route::resource('product', ProductController::class);

