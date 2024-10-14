<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class perfilEmpleadoController extends Controller
{
    //
    
    public function recuperar_info_empleado($id) // Recibir el ID del usuario
    {
        // Recuperar el usuario específico
        $user = DB::table('users')->where('id', $id)->first();

        // Verificar si el usuario existe
        if (!$user) {
            return redirect('/users')->with('error', 'Usuario no encontrado');
        }
        $saludo = 'Perfil de Empleado';
        $mensajeB = 'Nos alegra que formes parte de nuestro 
        equipo. Este es tu espacio personal, donde podrás gestionar 
        tu información, acceder a recursos que te ayudaran a cumplir 
        con tus tareas. ¡Estamos emocionados de tenerte con nosotros 
        y esperamos que disfrutes de tu experiencia aquí!';

        // Pasar los datos a la vista
        return view('perfilEmpleado', compact('user','saludo','mensajeB'));
    }
    
}
