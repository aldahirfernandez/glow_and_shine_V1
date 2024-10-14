<?php

use App\Http\Controllers\editarUsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\perfilUsuarioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/perfilUsuario',[perfilUsuarioController::class, 'perfilUsuario']);

Route::get('/perfilUsuario/editarPerfil/{id}',[editarUsuarioController::class, 'editar_perfil_usuario']);

Route::get('/perfilUsuario/{id}', [perfilUsuarioController::class, 'recuperar_info']);



Route::get('/p',[perfilUsuarioController::class, 'p']);

/* Route::get('/', function () {
    return view('welcome');
}); */
