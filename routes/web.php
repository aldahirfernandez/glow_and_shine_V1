<?php

use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ComponentsControllerClau;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\inicioSesionController;
use App\Http\Controllers\catalogoController;


Route::get('/', [HomeController::class, 'principal']);

Route::view('/contactanos', 'contactanos');
Route::get('/inicio_sesion', inicioSesionController::class);

Route::get('/registro', [ComponentsControllerClau::class, 'Registro']);
Route::get('/perfil_cuenta', [ComponentsControllerClau::class, 'PerfilCuenta']);

Route::get('/catalogo', [catalogoController::class, 'mostrarCatalogoMaquillaje']);
Route::get('/producto/{id}', [catalogoController::class, 'mostrarDetalleProducto']);



