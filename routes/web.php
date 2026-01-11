<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

Route::get('/', [ShopController::class, 'index'])->name('home');
Route::get('/cart', [ShopController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [ShopController::class, 'addToCart'])->name('add.to.cart');
Route::get('/checkout', [ShopController::class, 'checkout'])->name('checkout');