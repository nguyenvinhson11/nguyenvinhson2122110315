<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;

// Trang nguoi dung
Route::get('/',[HomeController::class,'index'])->name('site.home');
Route::get('san-pham',[ProductController::class,'index'])->name('site.product');
Route::get('chi-tiet-san-pham/{slug}',[HomeController::class,'product_detail'])->name('site.product.detail');
Route::get('lien-he',[ContactController::class,'index'])->name('site.contact');

//Trang quan tri
