<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/' , [AgendaController::class, 'index']);
Route::resource('/listaApi', AgendaController::class);

Route::get('/home', [AgendaController::class, 'PaginaHome'])->name('paginaHome');

Route::get('/formulario' , [AgendaController::class, 'agendaCadastrar'])->name('formularioCadastro');

Route::post('/cadastrar' , [AgendaController::class, 'store'])->name('cadastrarAgenda');

Route::get('/listaContato' , [AgendaController::class, 'PaginaLista'])->name('listaContato');

Route::get('/listaContato/{id}' , [AgendaController::class, 'destroy'])->name('deletarContato');

Route::put('/atualizar/{id} ' , [AgendaController::class, 'update']);


