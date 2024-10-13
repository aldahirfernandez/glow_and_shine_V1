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
    

    public function editar_perfil_usuario()
    {
        return view('editarPerfilUsuario');

    }

    
    
    public function p()
    {
        return view('components.app-layout');

    }

}
