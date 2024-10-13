<?php

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

Route::get('/',[perfilUsuarioController::class, 'perfilUsuario']);



Route::get('/editarPerfil',[perfilUsuarioController::class, 'editar_perfil_usuario']);

Route::get('/p',[perfilUsuarioController::class, 'p']);

/* Route::get('/', function () {
    return view('welcome');
}); */
