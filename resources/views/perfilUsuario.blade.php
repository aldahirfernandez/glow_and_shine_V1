<link rel="stylesheet" href="css/perfilUsuario.css">

<x-app-layout>
    <section class="container_perfil_usuario">
        <x-Claudia.encabezadoPerfil :saludo="$saludo" />
        <x-Claudia.mensajeBienvenida :mensajeB="$mensajeB" />
        <x-Claudia.informacionPerfilU/>
        <x-Claudia.editarPerfil/>
        <x-Claudia.listaDeseos/>
        <x-Aldahir.CardSection/>
        
    </section>
</x-app-layout>