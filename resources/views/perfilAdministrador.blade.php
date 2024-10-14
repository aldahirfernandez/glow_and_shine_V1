<link rel="stylesheet" href="{{ asset('css/perfilAdministrador.css') }}">

<x-app-layout>
    <section class="container_perfil_administrador">
        <x-Claudia.encabezadoPerfil :saludo="$saludo" />
        <x-Claudia.mensajeBienvenida :mensajeB="$mensajeB" />
        <x-Claudia.informacionPerfilU />
        <x-Claudia.editarPerfil/>
        <x-Claudia.opcionesAdministrador/>
        
        
    </section>
</x-app-layout>