<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>

    <div class="container_general">

       

        <x-Aldahir.Banner/>

        <div class="category_scroll">
            <!-- Repetir el componente 5 veces -->
            @for ($i = 0; $i < 7; $i++)
                <x-Aldahir.CategoryButton>
                    Category {{ $i + 1 }}
                </x-Aldahir.CategoryButton>
            @endfor
        </div>

        <div class="container_section_general">
            <x-Aldahir.TSubtitle>
                <span>★</span> MAS VENDIDOS <span>★</span>
            </x-Aldahir.TSubtitle>
    
            <div class="section_scroll">
                @for ($i = 0; $i < 5; $i++)
                    <x-Aldahir.CardSection>
                        Section {{ $i + 1 }}
                    </x-Aldahir.CardSection>
                @endfor
            </div>
        </div>

        <div class="container_section_general">
            <x-Aldahir.TSubtitle>
                <span>★</span> RECIEN LLEGADO <span>★</span>
            </x-Aldahir.TSubtitle>
    
            <div class="section_scroll">
                @for ($i = 0; $i < 5; $i++)
                    <x-Aldahir.CardSection>
                        Section {{ $i + 1 }}
                    </x-Aldahir.CardSection>
                @endfor
            </div>
        </div>

        <div class="container_section_general">
            <x-Aldahir.TSubtitle>
                <span>★</span> MARCAS <span>★</span>
            </x-Aldahir.TSubtitle>
    
            <div class="brand_scrolly">
                @for ($i = 0; $i < 7; $i++)
                    <x-Aldahir.CardBrand>
                        Brand {{ $i + 1 }}
                    </x-Aldahir.CardBrand>
                @endfor
            </div>
        </div>

        <div class="container_section_general">
            <x-Aldahir.TSubtitle>
                <span>★</span> RESEÑAS <span>★</span>
            </x-Aldahir.TSubtitle>
    
            <div class="brand_scrolly">
                @for ($i = 0; $i < 7; $i++)
                    <x-Aldahir.Cardreviews>
                        Reviews {{ $i + 1 }}
                    </x-Aldahir.CardReviews>
                @endfor
            </div>
        </div>

        
    </div>
</body>
</html>
