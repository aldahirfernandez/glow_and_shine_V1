
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glow_and_shine</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="{{ asset('css/header.css') }}">

</head> 


<body>
<!-- header.blade.php -->
<div class="flex justify-between items-center bg-pink-500 p-4">
    <div class="flex-1"></div>
    <!-- Logo -->
    <div class="flex items-center">
        <span class="titulo ml-3 text-white text-2xl font-bold">GLOW & SHINE</span>
    </div>
    
    <!-- Include the Navbar component -->
    @include('components.navbar')

</div>
</body>
<!--

<div class="lg:hidden flex items-center">
        <button id="menu-btn" class="text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>-->

    <!-- Nav Links -->
 <!--   <ul id="menu" class="hidden lg:flex space-x-6">
        <li><a href="#" class="text-white hover:text-gray-300">Inicio</a></li>
        <li><a href="#" class="text-white hover:text-gray-300">Servicios</a></li>
        <li><a href="#" class="text-white hover:text-gray-300">Nosotros</a></li>
        <li><a href="#" class="text-white hover:text-gray-300">Contacto</a></li>
    </ul>
</div>

<div id="mobile-menu" class="hidden lg:hidden bg-pink-500">
    <ul class="flex flex-col space-y-4 p-4">
        <li><a href="#" class="text-white">Inicio</a></li>
        <li><a href="#" class="text-white">Servicios</a></li>
        <li><a href="#" class="text-white">Nosotros</a></li>
        <li><a href="#" class="text-white">Contacto</a></li>
    </ul>-->