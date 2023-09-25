<?php

use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PageHomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageHomeController::class, 'index'])->name('index');
Route::get('/product', [PageController::class, 'product'])->name('product');
Route::get('/womenproduct', [PageController::class, 'product'])->name('womenproduct');
Route::get('/childrenproduct', [PageController::class, 'product'])->name('childrenproduct');
Route::get('/menproduct', [PageController::class, 'product'])->name('menproduct');
Route::get('/productdetail', [PageController::class, 'productdetail'])->name('productdetail');
Route::get('/aboutus', [PageController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/shoppingcart', [PageController::class, 'shoppingcart'])->name('shoppingcart');
