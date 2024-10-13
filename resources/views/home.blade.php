    <link rel="stylesheet" href="/css/Home.css">
    <link rel="stylesheet" href="/css/app.css">
    <div class="container_general">
        <x-Aldahir.Banner/>
        <a href="/catalogo">
            <div class="category_scroll">
                <!-- Repetir el componente 5 veces -->
                @for ($i = 0; $i < 7; $i++)
                    <x-Aldahir.CategoryButton>
                        Category {{ $i + 1 }}
                    </x-Aldahir.CategoryButton>
                @endfor
            </div>
        </a>

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
        <x-Footer/>
</body>
</html>
