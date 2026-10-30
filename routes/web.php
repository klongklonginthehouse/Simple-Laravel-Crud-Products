<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
Route::post('/product', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
Route::get('/product/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
Route::put('/product/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
Route::delete('/product/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');