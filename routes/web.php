<?php

use App\Http\Controllers\editarUsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\perfilUsuarioController;
use App\Http\Controllers\perfilEmpleadoController;
use App\Http\Controllers\perfilAdministradorController;


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
/* Route::get('/', function () {
    return view('welcome');
}); */

/* SECCION DE USUARIO - CLIENTE */

Route::get('/perfilUsuario',[perfilUsuarioController::class, 'perfilUsuario']);

Route::get('/perfilUsuario/editarPerfil/{id}',[editarUsuarioController::class, 'editar_perfil_usuario']);

Route::get('/perfilUsuario/{id}', [perfilUsuarioController::class, 'recuperar_info']);

Route::get('/p',[perfilUsuarioController::class, 'p']);


/* SECCION DE EMPLEADO */


/* Route::get('/perfilEmpleado/editarPerfil/{id}',[editarUsuarioController::class, 'editar_perfil_usuario']); */

Route::get('/perfilEmpleado/{id}', [perfilEmpleadoController::class, 'recuperar_info_empleado']);

/* SECCION DE ADMINISTRADOR*/

Route::get('/perfilAdministrador/{id}', [perfilAdministradorController::class, 'recuperar_info_administrador']);

