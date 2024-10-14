<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class perfilUsuarioController extends Controller
{
    //
    public function perfilUsuario()
    {
        $saludo = 'Perfil de usuario';
        $mensajeB = 'Nos alegra que formes parte de nuestra 
        comunidad. Este es tu espacio personal, 
        donde podrás añadir tu información, 
        explorar nuestros productos y más. 
        ¡Disfruta de la experiencia!';
        return view('perfilUsuario',compact('saludo','mensajeB'));

    }
    public function perfilEmpleado()
    {
        $saludo = 'Perfil de Empleado';
        $mensajeB = 'Nos alegra que formes parte de nuestro 
        equipo. Este es tu espacio personal, donde podrás gestionar 
        tu información, acceder a recursos que te ayudaran a cumplir 
        con tus tareas. ¡Estamos emocionados de tenerte con nosotros 
        y esperamos que disfrutes de tu experiencia aquí!';
        return view('perfilEmpleado',compact('saludo','mensajeB'));

    }
    public function perfilAdministrador()
    {
        $saludo = 'Perfil del Administrador';
        $mensajeB = 'Nos complace tenerte en nuestra comunidad como administradora. 
        Este es tu espacio personal, donde podrás gestionar la información de los usuarios,
         supervisar operaciones y acceder a herramientas clave para optimizar nuestro sistema. 
         ¡Aprovecha al máximo esta experiencia y gracias por tu valiosa contribución!';
        return view('perfilAdministrador',compact('saludo','mensajeB'));

    }
    

    public function editar_perfil_usuario()
    {
        $saludo = 'Edita tu información';
        return view('editarPerfilUsuario',compact('saludo'));

    }

    
    
    public function p()
    {
        return view('components.app-layout');

    }

}
