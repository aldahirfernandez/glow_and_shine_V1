<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class perfilUsuarioController extends Controller
{
    //
    public function perfilUsuario()
    {
        return view('perfilUsuario');

    }
    public function perfilEmpleado()
    {
        return view('perfilEmpleado');

    }
    public function perfilAdministrador()
    {
        return view('perfilAdministrador');

    }
    

    public function editar_perfil_usuario()
    {
        return view('editarPerfilUsuario');

    }

    
    
    public function p()
    {
        return view('components.app-layout');

    }

}
