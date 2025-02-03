<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
});

//cliente
Route::get('cliente', [ClientController::class, 'index'])->name('index.client');
Route::post('cliente', [ClientController::class, 'store'])->name('store.client');
Route::get('busca', [ClientController::class, 'search'])->name('search.client');
Route::get('cliente/{id}', [ClientController::class, 'show'])->name('show.client');

Route::get('produto', [ProductController::class, 'index'])->name('index.product');
Route::post('produto', [ProductController::class, 'store'])->name('store.product');

//pedido
Route::get('pedido', [OrderController::class, 'index'])->name('index.order');
Route::post('pedido', [OrderController::class, 'store'])->name('store.order');