<div class="relative flex items-center">
    <!-- Botón de menú (icono de hamburguesa) -->
    <button class="menu-boton-desplegar bg-pink-500">
        <!-- Icono de hamburguesa con Font Awesome -->
        <i class="fas fa-bars text-white text-2xl"></i>
    </button>

    <!-- Menú desplegable -->
    <ul class="menu-lista absolute hidden bg-white text-white z-10">
        <li><a class="text-white" href="/"><i class="fa-solid fa-house"></i>Inicio</a></li>
        <li><a class="text-white" href="/"><i class="fa-solid fa-users"></i>Nosotros</a></li>
        <li><a class="text-white" href="/"><i class="fa-solid fa-th-list"></i>Categorías</a></li>
        <li><a class="text-white" href="/"><i class="fa-solid fa-phone"></i>Contáctanos</a></li>
        <li><a class="text-white" href="/"><i class="fa-solid fa-sign-in-alt"></i>Iniciar sesión</a></li>
        <li><a class="text-white" href="/"><i class="fa-solid fa-user-plus"></i>Registros</a></li>
    </ul>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuButton = document.querySelector('.menu-boton-desplegar');
        const menuList = document.querySelector('.menu-lista');

        menuButton.addEventListener('click', function() {
            menuList.classList.toggle('hidden'); 
            menuList.classList.toggle('bg-pink-500'); 
        });
    });
</script>
@endpush
