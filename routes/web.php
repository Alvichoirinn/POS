<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Halaman Home
Route::get('/home', [HomeController::class, 'index'])->name('index');

// Halaman Products dengan prefix category
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage'])->name('foodBeverage');
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth'])->name('beautyHealth');
    Route::get('/home-care', [ProductController::class, 'homeCare'])->name('homeCare');
    Route::get('/baby-kid', [ProductController::class, 'babyKid'])->name('babyKid');
});

// Halaman User dengan parameter id dan name
// Route::get('/user/{id}/name/{name}', [UserController::class, 'showProfile'])->name('showProfile');

Route::get('/user/{id}/name/{name}', [UserController::class, 'showProfile']);

// Halaman Penjualan (POS)
Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
