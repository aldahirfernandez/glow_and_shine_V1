<link rel="stylesheet" href="{{ asset('css/perfilUsuario.css') }}">

<x-app-layout>
    <section class="container_perfil_usuario">
        <x-Claudia.encabezadoPerfil :saludo="$saludo" :user="$user"/>
        <x-Claudia.mensajeBienvenida :mensajeB="$mensajeB" :user="$user"/>
        <x-Claudia.informacionPerfilU :user="$user"/>
        <x-Claudia.editarPerfil :user="$user"/>
        <x-Claudia.listaDeseos/>
        <x-Aldahir.CardSection/>
        
    </section>
</x-app-layout>