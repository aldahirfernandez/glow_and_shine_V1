<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catalogoController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'principal']);

Route::get('/Skincare', [catalogoController::class, 'mostrarCatalogoSkinCare']);
Route::get('/Maquillaje', [catalogoController::class, 'mostrarCatalogoMaquillaje']);
Route::get('/Joyeria', [catalogoController::class, 'mostrarCatalogoJoyeria']);
Route::get('/CuidadoCapilar', [catalogoController::class, 'mostrarCatalogoCuidadoCapilar']);
Route::get('/Fragancia', [catalogoController::class, 'mostrarCatalogoFragancia']);

Route::get('/producto/{id}', [catalogoController::class, 'mostrarDetalleProducto']);