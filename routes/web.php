<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catalogoController;

Route::get('/', [catalogoController::class, 'mostrarCatalogoMaquillaje']);
Route::get('/producto/{id}', [catalogoController::class, 'mostrarDetalleProducto']);