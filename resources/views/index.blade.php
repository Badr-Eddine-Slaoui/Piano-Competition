<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Concours International de Piano</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="{{ asset('Images/MainIcon.png') }}" type="image/x-icon">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/css/home.css', 'resources/js/app.js'])

    </head>
    <body class="text-white bg-[#231F20]">

        <aside class=" fixed left-0 top-[25vh] w-1/12 z-[-1]">
            <img class="w-full" src="{{ asset('Images/SideImg.png')  }}" alt="Mouvement Contraire" title="Mouvement Contraire">
        </aside>
        <section class="w-full min-h-screen">
            <div class="flex h-[20vh] relative z-[-2] items-center mb-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center text-[#bc8c2d] capitalize">Concours International de Piano</h2>
            </div>
            <div class="w-9/12 min-h-[65vh] m-auto grid grid-cols-[49%,2%,49%] grid-rows-1 gap-x-10">
                <div class="col-span-3 w-3/5 mx-auto mb-20">
                    <h1 class="text-4xl text-center font-extrabold mb-5 capitalize">Choisissez votre chemin</h1>
                </div>
                <a href="{{ route('marrakech.home') }}" title="Concours International de Piano Marrakech">
                    <div class="flex h-full py-10 items-center justify-around rounded-md border transition-transform duration-300 hover:-translate-y-4 hover:scale-[1.1] cursor-pointer">
                        <img class="w-1/3" src="{{ asset('Images/MarrakechLogo.png') }}" alt="Concours International de Piano Marrakech Logo" title="Concours International de Piano Marrakech Logo">
                        <div class="w-2/5">
                            <p class="text-[18px] text-[#a3a3a3]">La 4ème édition<br> Du 1 Mai 2025<br> au 4 Mai 2025</p>
                        </div>
                    </div>
                </a>
                <p class="flex justify-center items-center font-bold">
                    Ou
                </p>
                <a href="{{ route('paris.home') }}" title="Concours International de Piano Paris">
                    <div class="flex h-full py-10 items-center justify-around rounded-md border transition-transform duration-300 hover:-translate-y-4 hover:scale-[1.1] cursor-pointer">
                        <img class="w-1/3" src="{{ asset('Images/ParisLogo.png') }}" alt="Concours International de Piano Paris Logo" title="Concours International de Piano Paris Logo">
                        <div class="w-2/5">
                            <p class="text-[18px] text-[#a3a3a3]">La 9ème édition<br> Du 28 Juin 2025<br> au 30 Octobre 2023</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </body>
</html>
