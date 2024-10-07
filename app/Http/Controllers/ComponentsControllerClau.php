<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsControllerClau extends Controller
{
    public function Registro() {
        /* return view ('components.Claudia.registro'); */
        return view('registro');
    }

    public function PerfilCuenta() {
        /* return view ('components.Claudia.registro'); */
        return view('perfilCuenta');
    }
}
