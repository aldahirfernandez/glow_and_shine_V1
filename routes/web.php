<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ComponentsControllerClau;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\catalogoController;


Route::get('/', [HomeController::class, 'principal']);

Route::view('/contactanos', 'contactanos');
Route::get('/catalogo', [catalogoController::class, 'mostrarCatalogoMaquillaje']);
Route::get('/producto/{id}', [catalogoController::class, 'mostrarDetalleProducto']);


Route::group(['prefix' => 'account'], function(){

    Route::group(['middleware' => 'guest'], function(){
        Route::get('login', [LoginController::class,'index'])->name('account.login');
        Route::get('register', [LoginController::class,'register'])->name('account.register');
        Route::post('process-register', [LoginController::class,'processRegistration'])->name('account.processRegistration');
        Route::post('authenticate', [LoginController::class,'authenticate'])->name('account.authenticate');


    });
    Route::group(['middleware' => 'auth'], function(){

        Route::get('logout', [LoginController::class,'logout'])->name('account.logout');
        Route::get('dashboard', [DashboardController::class,'index'])->name('account.dashboard');
        Route::get('dashboardAdmin',[DashboardController::class,'indexx'])->name('account.dashboardAdmin');
        Route::get('dashboardEmpleado',[DashboardController::class,'indexxx'])->name('account.dashboardEmpleado');
    });

});



