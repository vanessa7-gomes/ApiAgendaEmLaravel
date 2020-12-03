<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});



Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/agenda', [App\Http\Controllers\HomeController::class, 'teste']);
Route::get('/cadastrarPessoa', [App\Http\Controllers\HomeController::class, 'cadastrarPessoa'])->name('cadastrarPessoa');


