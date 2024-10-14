<link rel="stylesheet" href="{{ asset('css/tarjetaProducto.css') }}">
<div class="contenedor_tarjeta">
    <a href="/producto/{{ $producto->id_producto }}">
        <div class="contenedor_imagen_tarjeta">
            <img src="{{ $producto->direccion_imagen }}" alt="{{ $producto->nombre }}" class="producto_catalogo">
        </div>
        <h3 class="nombre_producto_tarjeta">{{ $producto->nombre }}</h3>
        <h3 class="precio_producto_tarjeta">Bs. {{ $producto->precio }}</h3>
    </a>
</div>