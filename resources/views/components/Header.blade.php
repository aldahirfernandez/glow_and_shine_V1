<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/Header.css">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<body>

    <header>
        <div class="navbar">
            <div class="logo"><a href="#">Glow and Shine</a></div>
            <ul class="links">
                <li><a href="hero">Inicio</a></li>
                <li><a href="/about">Nosotros</a></li>
                <li><a href="category">Categoria</a></li>
                <li><a href="contact">Contactanos</a></li>
            </ul>
            <div>
                <a href="#" class="action_btn">Iniciar Sesion</a>
                <a href="#" class="action_btn">Registrarse</a>
            </div>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="hero">Inicio</a></li>
            <li><a href="about">Nosotros</a></li>
            <li><a href="category">Categoria</a></li>
            <li><a href="contact">Contactanos</a></li>
            <li><a href="#" class="action_btn">Iniciar Sesion</a></li>
            <li><a href="#" class="action_btn">Registrarse</a></li>
        </div>
    </header>

    <script>
        const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function() {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen ?
                'fa-solid fa-xmark' :
                'fa-solid fa-bars'
        }
    </script>

</body>

</html>
