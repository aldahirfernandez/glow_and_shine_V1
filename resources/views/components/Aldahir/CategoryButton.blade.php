<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/CategoryButton.css">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<body>

    <div class="container_button_round">
        <a href="{{ $url ?? '/catalogo'}}">
            <img src="{{ $image ?? '/images/categoria.png' }}" alt="">

            {{-- <img src="https://i.pinimg.com/736x/e1/a7/b1/e1a7b1e54d7ab4527d9f52f70b14b753.jpg" alt=""> --}}
            <h1>{{$slot}}</h1>
        </a>
    </div>


</body>

</html>
