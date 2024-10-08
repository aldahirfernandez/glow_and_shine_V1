<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Banner.css') }}">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="header_banner">
        <img src="https://admin.hungermag.com/app/uploads/2022/05/dior-banner-1560x878.jpg" alt="Banner Image"> 
        {{--<img src="{{ asset('imagenes/chiaPortada.png') }}" alt="">--}}
        <div class="header_content">
            <h1>Welcome to our Website!</h1>
            <p>Your one-stop solution for [what your website offers].</p>
            <x-Aldahir.Button>
                Sign-In
            </x-Aldahir.Button>
        </div>
    </div>
    
</body>
</html>