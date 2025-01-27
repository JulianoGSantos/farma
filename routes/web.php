<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
});

//cliente
Route::get('cliente', [ClientController::class, 'index'])->name('index.client');