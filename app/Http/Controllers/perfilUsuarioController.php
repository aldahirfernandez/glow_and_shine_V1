<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class perfilUsuarioController extends Controller
{
    public function recuperar_info($id)
    {
        if (Auth::user()->role !== 'cliente') {
            return redirect()->route('account.dashboard')->with('error', 'Acceso denegado.');
        }

        $user = DB::table('users')->where('id', $id)->first();

        if (!$user) {
            return redirect()->route('account.dashboard')->with('error', 'Usuario no encontrado');
        }

        $saludo = 'Perfil de Empleado';
        $mensajeB = 'Nos alegra que formes parte de nuestro 
        equipo. Este es tu espacio personal, donde podrás gestionar 
        tu información, acceder a recursos que te ayudaran a cumplir 
        con tus tareas. ¡Estamos emocionados de tenerte con nosotros 
        y esperamos que disfrutes de tu experiencia aquí!';

        return view('dashboard', compact('user', 'saludo', 'mensajeB'));
        dd(compact('user', 'saludo', 'mensajeB'));
    }

    

}
