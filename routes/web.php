<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catalogoController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'principal']);

Route::get('/catalogo', [catalogoController::class, 'mostrarCatalogoMaquillaje']);
Route::get('/producto/{id}', [catalogoController::class, 'mostrarDetalleProducto']);