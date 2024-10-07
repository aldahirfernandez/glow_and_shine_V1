<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/catalogo.css') }}">
    <title>Catalogo</title>
</head>

<body>
    <h2 class="texto_categoria">Maquillaje</h2>
    <div class="contenedor_catalogo">
        @foreach($productos as $producto)
        <x-Mikaela.tarjetaProducto :producto="$producto" />
        @endforeach
    </div>
</body>

</html>