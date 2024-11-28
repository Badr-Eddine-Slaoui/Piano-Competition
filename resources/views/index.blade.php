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
    <body class="text-white bg-black overflow-hidden">
        <aside class="fixed left-0 z-20 xs:w-3/12 xs:top-[30%] sm:w-[14%] lg:top-[20vh] xl:top-[18vh] xl:w-[10%]">
            <img loading="lazy" class="w-full" src="{{ asset('Images/LOGO PIANO SITE WEB/MC dorté 1.png')  }}" alt="Mouvement Contraire" title="Mouvement Contraire">
        </aside>
        <section class="w-full min-h-screen relative">
            <div class="flex items-center xs:h-[13vh] xs:ms-5 md:h-[15vh] md:ms-10 lg:ms-14 xl:ms-20">
                <img loading="lazy" class="h-full py-[2vh]" src="{{ asset('Images/LOGO PIANO SITE WEB/LOGO OFF CONCOURS BLANC.png') }}" alt="">
                <img loading="lazy" class="h-full py-[2vh] xs:ms-5 md:ms-10" src="{{ asset('Images/LOGO PIANO SITE WEB/PIANIST blanc.png') }}" alt="">
            </div>
            <div class="m-auto grid grid-rows-1 absolute z-20 right-0 w-4/12 xs:top-[30%] xs:grid-cols-1 lg:grid-cols-2 lg:gap-x-10 lg:top-[75%] xl:top-[70%]">
                <a href="{{ route('marrakech.home') }}" title="Concours International de Piano Marrakech">
                    <div class="flex flex-col h-full py-10 items-center justify-around cursor-pointer">
                        <div class="xs:w-3/4 sm:w-2/4 lg:w-3/4 xl:w-3/5">
                            <img loading="lazy" class="w-full" src="{{ asset('Images/LOGO PIANO SITE WEB/Marrakech doré.png') }}" alt="Concours International de Piano Marrakech Logo" title="Concours International de Piano Marrakech Logo">
                        </div>
                    </div>
                </a>
                <a href="{{ route('paris.home') }}" title="Concours International de Piano Paris">
                    <div class="flex h-full py-10 items-center justify-around cursor-pointer">
                        <div class="xs:w-3/4 sm:w-2/4 lg:w-3/4 xl:w-3/5">
                            <img loading="lazy" class="w-full" src="{{ asset('Images/LOGO PIANO SITE WEB/Paris doré 1.png') }}" alt="Concours International de Piano Paris Logo" title="Concours International de Piano Paris Logo">
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full xs:h-screen lg:h-[85vh]">
                <video class="w-[100vw] object-cover xs:h-full lg:h-[85vh]" poster="{{ asset('Videos/Posters/HomeHeaderVideo.png') }}" src="{{ asset('Videos/HomeHeaderVideo.mp4') }}" muted autoplay loop></video>
                <div class="w-full h-full absolute xs:top-[13vh] md:top-[15vh] z-10 bg-black bg-opacity-30"></div>
            </div>
        </section>
    </body>
</html>
