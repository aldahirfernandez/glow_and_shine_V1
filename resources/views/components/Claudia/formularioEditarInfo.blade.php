<link rel="stylesheet" href="{{ asset('css/formularioE.css') }}">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<div class="form_registro"  >
    <form action="/posts" method="POST" class="form_editar_info">
            @csrf
            <input class="edit_info" type="text" placeholder="Nombres" required>
            <input class="edit_info" type="text" placeholder="Apellido paterno" required>
            <input class="edit_info" type="text" placeholder="Apellido materno">
            <input class="edit_info" type="email" placeholder="Correo Electrónico" required>
            <input class="edit_info" type="text" placeholder="CI" required>
            <input class="edit_info" type="date" placeholder="Fecha de nacimiento" required>
            <input class="edit_info" type="password" placeholder="Contraseña" required>
            
    </form>

    <button type="submit" class="boton_guardar_cambios">Guardar cambios</button>
    
</div>