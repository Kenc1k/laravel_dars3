<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;

Route::get('/', [ProductsController::class, 'category']);
Route::get('/post', [ProductsController::class, 'post']);
Route::get('/comment', [ProductsController::class, 'comment']);
Route::get('/order', [ProductsController::class, 'order']);
Route::get('/product', [ProductsController::class, 'product']);
