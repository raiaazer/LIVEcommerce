<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CartController;


//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return \Inertia\Inertia::render('Home');
//});
//
//Route::get('/Categories', function () {
//    return \Inertia\Inertia::render('Categories');
//});


Route::get('/', [DashboardController::class, 'Home'])->name('Home');
Route::get('/Categories', [DashboardController::class, 'Categories'])->name('Categories');
Route::get('/Products', [DashboardController::class, 'Products'])->name('Products');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addItem'])->name('cart.add');
Route::post('/cart/update/{productId}', [CartController::class, 'updateItem'])->name('cart.update');
Route::delete('/cart/remove/{productId}', [CartController::class, 'removeItem'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
