<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Glow and Shine</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            .hidden {
                display: none;
            }

            .bg-pink-500 {
                background-color: #BE6C97;
                height: 9vh; /* Altura completa de la pantalla */
                display: flex;
                justify-content: space-between; /* Centrar horizontalmente */
                padding-top: 20px;
                align-items: flex-start; /* Centrar verticalmente */
            }

            .titulo {
                font-family: 'Arima Madurai', cursive;
            }
            /* Estilos generales */
                .navbar {
                    position:absolute;
                    padding: 10px;
                    background-color: #333;
                }

                /* Estilos del botón de hamburguesa */

                
                /* Estilos del menú desplegable */
                .menu {
                    position: absolute;
                    right: 0;
                    top: 50px;
                    /*width: 200px;*/
                    list-style-type: none;
                    padding: 10px;
                    margin: 0;
                    display: none; /* Escondido por defecto */
                }

            .menu-lista {
                top: 100%;
                
                height:100%;
                flex-direction: column;
                color:white;
               /* O 'fixed' si deseas que permanezca en la pantalla */
                z-index: 1000;
            }
            .menu-boton-desplegar {  
                    box-sizing: border-box; 
                    border:none;
                    display:flex;
                    align-items: flex-start;
                    justify-content: flex-start;
                    margin:0px;
                    padding:0px;
                    
                }

            .menu-boton-desplegar:active {
                transform: scale(0.95); 
                transition: transform 0.1s; /* Transición suave */
            }

                .menu-lista li {
                    list-style: none; /* Elimina los puntos de la lista */
                    
                    border-bottom: 2px solid rgba(255, 255, 255, 255);
                    
                }

                .menu-lista li a {
                    text-decoration: none;
                    color: white; /* Cambia el color del texto a blanco */
                    font-family: 'Poppins', sans-serif; /* Cambia la fuente */ /* Añade un poco de padding para hacer más grande el área clickeable */
                    display: block; /* Asegura que el área clickeable ocupe todo el ancho */
                    font-size:1.2rem;
                    margin-bottom: 8px;
                    margin-top:5px;
                    
                }

                .menu-lista li a:hover {
                    background-color: rgba(255, 255, 255, 0.4); /* Efecto al pasar el mouse */
                }
                /* Estilos para pantallas más grandes (desktop) */
                
            .relative {
                position: relative; /* Para crear un contexto de apilamiento */
            }
            .text-white {

                color: #ffffff;
                font-size: 2rem; /* Ajusta el tamaño del texto */
            }
            .footer {
                background-color: #FEE9FF; /* Color de fondo */
                 /* Espaciado interno */
                text-align: left; /* Alineación del texto */
            }
            .footer .container {
                display: flex;
                justify-content: space-between;
                align-items: flex-start; /* Alineación vertical */
                padding: 20px;
            }

            .footer h3 {
                color: #BE6C97; /* Color del título */
                font-weight: bold;
            }

            .footer ul {
                list-style-type: none; /* Sin viñetas */
                padding: 0;
            }

            .footer ul li a {
                color: #764C73; /* Color de los enlaces */
                text-decoration: none;
            }

            .footer ul li a:hover {
                text-decoration: underline;
            }
            .contact {
                text-align: center;
                background-color: #FEE9FF; /* Rosa claro de fondo */
                padding: 13px;
                font-family: Arial, sans-serif;
            }

            .social-icon {
                display: inline-block;
                margin: 7px;
                text-decoration: none;
                color: #764C73; /* Color rosa */
            }

            .social-icon i {
                transition: transform 0.3s ease;
            }

            .social-icon i:hover {
                transform: scale(1.2); /* Efecto hover de agrandar */
                color: #ff1493; /* Color rosa más fuerte al hacer hover */
            }


            @media (max-width: 640px) {
                .text-white {
                    font-size: 1.2rem; /* Texto más pequeño en pantallas móviles */
                }

                .menu-lista li a{
                    font-size:0.8rem;
                }
                
            }
            @media (min-width: 768px) {
                .footer .container{
                    display: flex;
                    justify-content: space-around;
                    align-items: flex-start; /* Alineación vertical */
                    padding: 20px;
                }
                .footer h3 {
                    font-size: 2rem; /* Ajusta este valor según lo que necesites */
                }
                .footer li{
                    font-size: 1.2rem;
                }
                .social-icon i {
                    font-size: 3rem;
                }
            }
            @media screen and (min-width: 768px) {
                    .menu {
                        position: static;
                        display: flex;
                        background-color: transparent;
                        width: auto;
                        border: none;
                    }

                    .menu li {
                        border: none;
                    }

                    .menu li a {
                        color: white;
                    }

                    .menu-button {
                        display: none; /* Ocultar el botón de hamburguesa en pantallas grandes */
                    }
                }
        </style>

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <x-header />
                
                
                

                <x-footer />

            </div>
        </div>
        @stack('scripts')
    </body>
</html>

<!--

<div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <<div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                    </div>
                </div>

            -->