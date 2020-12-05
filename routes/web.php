<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/agenda', [App\Http\Controllers\HomeController::class, 'teste']);
Route::get('/cadastrarPessoa', [App\Http\Controllers\HomeController::class, 'cadastrarPessoa'])->name('cadastrarPessoa');