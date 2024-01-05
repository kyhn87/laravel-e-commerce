<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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
Route::get('/', [MainController::class,'index'])->name('main');
Route::get('/category/{slugCategoryName}', [CategoryController::class,'index'])->name('category');
Route::get('/product/{slugProductName}', [ProductController::class,'index'])->name('product');
Route::get('/cart', [CartController::class,'index'])->name('cart');
Route::get('/payment', [PaymentController::class,'index'])->name('payment');
Route::get('/orders', [OrdersController::class,'index'])->name('orders');
Route::get('/orders/{id}', [OrdersController::class,'detail'])->name('order');

Route::get('/login', [UserController::class,'login'])->name('user.login');
Route::get('/register', [UserController::class,'register'])->name('user.register');
