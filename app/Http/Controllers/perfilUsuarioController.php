<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class perfilUsuarioController extends Controller
{
    //
    

    public function recuperar_info($id) // Recibir el ID del usuario
    {
        // Recuperar el usuario específico
        $user = DB::table('users')->where('id', $id)->first();

        // Verificar si el usuario existe
        if (!$user) {
            return redirect('/users')->with('error', 'Usuario no encontrado');
        }
        $saludo = 'Perfil de';
        $mensajeB = 'Nos alegra que formes parte de nuestra 
        comunidad. Este es tu espacio personal, 
        donde podrás añadir tu información, 
        explorar nuestros productos y más. 
        ¡Disfruta de la experiencia!';

        // Pasar los datos a la vista
        return view('perfilUsuario', compact('user','saludo','mensajeB'));
    }
    

    

}
