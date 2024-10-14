
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOWYS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf2f8;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        .section {
            display: flex;
            align-items: center; /* Centra verticalmente los elementos */
            justify-content: space-between; /* Espacio entre imagen y texto */
            margin: 20px 0;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .section img {
            max-width: 40%; /* El tamaño de la imagen ocupará el 40% del contenedor */
            height: auto;
            border-radius: 8px;
        }
        .section-content {
            max-width: 55%; /* El texto ocupará el 55% del contenedor */
        }
        
        h2 {
            color: #d63384;
        }
        p {
            color: #6c757d;
        }
        .icon {
            font-size: 24px;
            margin-right: 8px;
            color: #d63384;
        }
        @media (max-width: 768px) {
            /* Para pantallas pequeñas o móviles, la imagen y el texto se colocan uno debajo del otro */
            .section {
                flex-direction: column;
                text-align: center;
            }
            .section img {
                max-width: 80%;
                margin-bottom: 15px;
            }
            .section-content {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Misión -->
    <div class="section">
        <div class="section-content">
            <h2><span class="icon">💄</span>Nuestra Misión</h2>
            <p>Brindar a nuestros clientes de La Paz productos de cosmética de alta calidad, innovadores y accesibles, que resalten la belleza natural y fomenten el cuidado personal, ofreciendo un servicio personalizado que inspire confianza y bienestar.</p>
            
        </div> 
        <img src="{{ asset('images/imageB3.webp') }}" alt="Misión">
    </div>

    <!-- Visión -->
    <div class="section">
        <div class="section-content">
            <h2><span class="icon">✨</span>Nuestra Visión</h2>
            <p>Ser la tienda de cosméticos líder en La Paz, reconocida por ofrecer una experiencia única en belleza y cuidado personal, con productos que promuevan la sostenibilidad, diversidad y el bienestar integral, contribuyendo a mejorar la calidad de vida de nuestros clientes.</p>
        </div>
        <img src="{{ asset('images/imageB1.png') }}" alt="Visión">
    </div>

    <!-- Descripción -->
    <div class="section">
        <div class="section-content">
            <h2><span class="icon">🌟</span>¿De qué se trata?</h2>
            <p>Seguiremos redefiniendo la industria de la belleza, un producto a la vez, a través de la inspiración, la creatividad y la pasión. Queremos que nuestras usuarias GLOWYS se sientan inspiradas y tengan la libertad de expresar su actitud de chica líder interior.</p>
        </div>
        <img src="{{ asset('images/imageB2.jpg') }}" alt="Descripción">
    </div>
</div>

</body>
</html>

