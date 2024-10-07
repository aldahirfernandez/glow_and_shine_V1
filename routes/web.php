<?php

use App\Http\Controllers\ComponentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\inicioSesionController;

Route::get('/', [HomeController::class, 'principal']);

Route::view('/contactanos', 'contactanos');
Route::get('/inicio_sesion', inicioSesionController::class);


