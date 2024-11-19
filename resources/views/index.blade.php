<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Concours International de Piano - Mouvement Contraire</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="{{ asset('Images/MainIcon.webp') }}" type="image/x-icon">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/css/home.css', 'resources/js/app.js'])

    </head>
    <body class="text-white bg-[#231F20]">

        <aside class=" fixed left-0 top-[25vh] w-1/12 z-[-1]">
            <img loading="lazy" class="w-full" src="{{ asset('Images/SideImg.webp')  }}" alt="Mouvement Contraire" title="Mouvement Contraire">
        </aside>
        <section class="w-full min-h-screen">
            <div class="flex h-[20vh] relative z-[-2] items-center mb-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center text-[#bc8c2d] capitalize">Concours International de Piano</h2>
            </div>
            <div class="w-9/12 min-h-[45vh] my-[10vh] m-auto grid grid-cols-[49%,2%,49%] grid-rows-1 gap-x-10">
                <a href="{{ route('marrakech.home') }}" title="Concours International de Piano Marrakech">
                    <div class="flex flex-col h-full py-10 items-center justify-around rounded-md border transition-transform duration-300 hover:-translate-y-4 hover:scale-[1.1] cursor-pointer">
                        <div class="w-2/4">
                            <img loading="lazy" class="w-full" src="{{ asset('Images/Marrakech.webp') }}" alt="Concours International de Piano Marrakech Logo" title="Concours International de Piano Marrakech Logo">
                        </div>
                    </div>
                </a>
                <p class="flex justify-center items-center font-bold">
                    Ou
                </p>
                <a href="{{ route('paris.home') }}" title="Concours International de Piano Paris">
                    <div class="flex h-full py-10 items-center justify-around rounded-md border transition-transform duration-300 hover:-translate-y-4 hover:scale-[1.1] cursor-pointer">
                        <div class="w-5/12">
                            <img loading="lazy" class="w-full" src="{{ asset('Images/Paris.webp') }}" alt="Concours International de Piano Paris Logo" title="Concours International de Piano Paris Logo">
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </body>
</html>
