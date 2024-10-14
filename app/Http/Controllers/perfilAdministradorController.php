<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class perfilAdministradorController extends Controller
{
    //
    public function recuperar_info_administrador($id) // Recibir el ID del usuario
    {
        // Recuperar el usuario específico
        $user = DB::table('users')->where('id', $id)->first();

        // Verificar si el usuario existe
        if (!$user) {
            return redirect('/users')->with('error', 'Usuario no encontrado');
        }
        $saludo = 'Perfil del Administrador';
        $mensajeB = 'Nos complace tenerte en nuestra comunidad como administradora. 
        Este es tu espacio personal, donde podrás gestionar la información de los usuarios,
         supervisar operaciones y acceder a herramientas clave para optimizar nuestro sistema. 
         ¡Aprovecha al máximo esta experiencia y gracias por tu valiosa contribución!';

        // Pasar los datos a la vista
        return view('perfilAdministrador', compact('user','saludo','mensajeB'));
    }
}
