<link rel="stylesheet" href="/css/Home.css">

<x-app-layout>
    <section class="container_general">
        <x-Aldahir.Banner />

        <x-Aldahir.ScrollContainer />

        <div class="container_section_general">
            <x-Aldahir.TSubtitle>
                <span>★</span> MAS VENDIDOS <span>★</span>
            </x-Aldahir.TSubtitle>

            <x-Aldahir.ScrollSection>
                @for ($i = 0; $i < 5; $i++)
                    <x-Aldahir.CardSection>
                        Section {{ $i + 1 }}
                    </x-Aldahir.CardSection>
                @endfor
            </x-Aldahir.ScrollSection>
        </div>

        <div class="container_section_general">
            <x-Aldahir.TSubtitle>
                <span>★</span> RECIEN LLEGADO <span>★</span>
            </x-Aldahir.TSubtitle>

            <x-Aldahir.ScrollSection>
                @for ($i = 0; $i < 5; $i++)
                    <x-Aldahir.CardSection>
                        Section {{ $i + 1 }}
                    </x-Aldahir.CardSection>
                @endfor
            </x-Aldahir.ScrollSection>
        </div>

        <img src="/images/image.png" alt="">

        <div class="container_section_general">
            <x-Aldahir.TSubtitle>
                <span>★</span> MARCAS <span>★</span>
            </x-Aldahir.TSubtitle>

            <x-Aldahir.ScrollBrand/>
        </div>

        <div class="container_section_general">
            <x-Aldahir.TSubtitle>
                <span>★</span> RESEÑAS <span>★</span>
            </x-Aldahir.TSubtitle>

            <x-Aldahir.ScrollReview/>
        </div>


    </section>
</x-app-layout>
