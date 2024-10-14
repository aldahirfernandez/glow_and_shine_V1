<link rel="stylesheet" href="{{ asset('css/perfilEmpleado.css') }}">

<x-app-layout>
    <section class="container_perfil_empleado">
        <x-Claudia.encabezadoPerfil :saludo="$saludo"/>
        <x-Claudia.mensajeBienvenida :mensajeB="$mensajeB" />
        <x-Claudia.informacionPerfilU />
        <x-Claudia.editarPerfil />
        <x-Claudia.opcionesEmpleado/>
        
        
    </section>
</x-app-layout>