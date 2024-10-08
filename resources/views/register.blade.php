
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
   
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="{{ asset('css/registro.css') }}">

</head> 
<body>

<div class="pagina_registro">
    {{-- <x-encabezadoRegistro/> --}}
    <x-Natalia.inicioSesion.cabecera/>
    {{-- <x-Claudia.botonesRegistro/> --}}
    <x-Claudia.formularioRegistro/>
    <x-Claudia.pieDePagina/>
</div>
    
</body>
</html>