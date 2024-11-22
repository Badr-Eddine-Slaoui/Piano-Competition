<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Marrakech - Comite d’Honneur</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('Images/MarrakechIcon.webp') }}" type="image/x-icon">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css','resources/css/comite.css', 'resources/js/comite.js', 'resources/js/carousel.js', 'resources/js/app.js'])

    </head>
    <body class="text-white bg-[#231F20] ">
        <header class="w-full xs:h-[10vh] md:h-[15vh] xl:h-[20vh]">
            <nav class="w-full fixed top-0 left-0 z-10 bg-[#231F20] flex justify-between xs:h-[10vh] xs:p-[1vh] sm:p-[2vh] md:h-[15vh] xl:h-[20vh] xl:p-[3vh]">
                <div class="flex justify-center items-center xs:w-5/12 sm:w-3/12">
                    <a href="{{ route('home') }}"><img loading="lazy" class="w-[90%] ms-auto" src="{{ asset('Images/Logo.webp')  }}" alt="Logo"></a>
                </div>
                <div class="w-1/12 flex justify-center items-center sm:hidden">
                    <i id="menuBar" class="fa-solid fa-bars text-[#bc8c2d]"></i>
                </div>
                <div id="menu" class="xs:transition-all xs:opacity-0 xs:duration-500 xs:translate-x-[100%] xs:fixed xs:right-0 xs:top-[10vh] xs:z-20 xs:bg-[#231F20] xs:h-screen xs:py-10 xs:px-10 sm:transition-none sm:translate-x-0 sm:opacity-100 sm:relative sm:p-0 sm:right-[unset] sm:top-[unset] sm:z-[unset] sm:bg-[unset] sm:h-[unset] sm:grid sm:gap-y-2 sm:w-7/12 sm:grid-cols-1 sm:grid-rows-2 sm:mr-5">
                    <ul class="w-full text-white sm:ml-auto sm:flex sm:items-center sm:justify-between sm:font-semibold sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
                        <li><a href="{{ route('marrakech.home') }}" class="text-decoration-none xs:block xs:mb-5  sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Accueil</a></li>
                        <li><a href="{{ route('marrakech.presentation') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Presentation</a></li>
                        <li><a href="{{ route('marrakech.edition_2025') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Edition 2025</a></li>
                        <li><a href="{{ route('marrakech.jury') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Jury</a></li>
                        <li><a href="{{ route('marrakech.comite_honneur') }}" class="text-decoration-none xs:text-[#bc8c2d] xs:block xs:mb-5 sm:border-b-4 sm:border-[#bc8c2d] sm:mb-0 md:border-b-[3px] lg:border-b-4">Comite d’Honneur</a></li>
                    </ul>
                    <ul class="w-full text-white sm:ml-auto sm:flex sm:items-center sm:justify-between sm:font-semibold sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
                        <li><a href="{{ route('marrakech.inscription') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Inscription</a></li>
                        <li><a href="{{ route('marrakech.galerie') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Galerie</a></li>
                        <li><a href="{{ route('marrakech.laureats') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Laureats</a></li>
                        <li><a href="{{ route('marrakech.contact') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Contactez-nous</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main id="carousel" class="w-full xs:h-[30vh] sm:h-[50vh] md:h-[60vh] lg:h-[80vh] relative overflow-x-hidden">
            <div id="carousel-track" class="w-full h-full flex ">
                <img loading="lazy" class="w-full h-full flex-shrink-0" src="{{ asset('Images/home-header-img.webp') }}">
                <img loading="lazy" class="w-full h-full flex-shrink-0" src="{{ asset('Images/Re-Belle-Communication.webp') }}">
            </div>
        </main>
        <aside class="fixed left-0 top-[25vh] w-1/12 z-[-1] xs:hidden sm:block">
            <img loading="lazy" class="w-full" src="{{ asset('Images/SideImg.webp')  }}" alt="SideImg">
        </aside>
        <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
            <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Comite d’Honneur</h2>
            </div>
            <div class="w-4/5 min-h-screen mb-5 m-auto sm:flex sm:flex-wrap sm:justify-between">
                <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Mohamed-Mehdi-Bensaid.webp') }}" alt="Mohamed Mehdi Bensaid">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mohamed Mehdi Bensaid</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mot de la directrice du Concours</p>
                        </div>
                    </div>
                </div>
                <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Samir-Goudar.webp') }}" alt="Samir Goudar">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Samir Goudar</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Président du conseil Régional de la région Marrakech- Safi. Maroc</p>
                        </div>
                    </div>
                </div>
                <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Allal-Benjelloun.webp') }}" alt="Allal Benjelloun">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Allal Benjelloun</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">DG Centrale Automobile Cherifienne</p>
                        </div>
                    </div>
                </div>
                <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Racha-Arodaky.webp') }}" alt="Racha Arodaky">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Racha Arodaky</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste, concertiste</p>
                        </div>
                    </div>
                </div>
                <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Mounia-Dadi.webp') }}" alt="Mounia Dadi">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mounia Dadi</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Fondatrice de Art Academy, artiste</p>
                        </div>
                    </div>
                </div>
                <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Laurence-Dale.webp') }}" alt="Laurence Dale">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Laurence Dale</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Chef d'orchestre, directeur artistique</p>
                        </div>
                    </div>
                </div>
                <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Ricardo-Araujo.webp') }}" alt="Ricardo Araujo">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Ricardo Araujo</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Chef d'orchestre, compositeur, pianiste</p>
                        </div>
                    </div>
                </div>
                <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Eric-Ferrer.webp') }}" alt="Eric Ferrer">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Eric Ferrer</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste, professeur au Conservatoire de Courbevoie</p>
                        </div>
                    </div>
                </div>
                <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Yun-Yang-Lee.webp') }}" alt="Yun-Yang Lee">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Yun-Yang Lee</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste, premier prix du concours international Frédéric Chopin</p>
                        </div>
                    </div>
                </div>
                <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Aimo-Pagin.webp') }}" alt="Aimo Pagin">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Aimo Pagin</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste, concertiste international</p>
                        </div>
                    </div>
                </div>
                <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Eric-Artz.webp') }}" alt="Eric Artz">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Eric Artz</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste</p>
                        </div>
                    </div>
                </div>
                <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/François-Meimoun.webp') }}" alt="François Meimoun">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">François Meimoun</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Compositeur</p>
                        </div>
                    </div>
                </div>
                <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Olivier-Sandberg.webp') }}" alt="Olivier Sandberg">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Olivier Sandberg</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste</p>
                        </div>
                    </div>
                </div>
                <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Jean-Frédéric-Neuburger.webp') }}" alt="Jean-Frédéric Neuburger">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Jean-Frédéric Neuburger</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste, professeur au CNSM de Paris</p>
                        </div>
                    </div>
                </div>
                <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Michael-Nguyen.webp') }}" alt="Michael Nguyenr">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Michael Nguyenr</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste</p>
                        </div>
                    </div>
                </div>
                <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Stéphanie-Elbaz.webp') }}" alt="Stéphanie Elbaz">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Stéphanie Elbaz</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste</p>
                        </div>
                    </div>
                </div>
                <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/Jeremie-Honnore.webp') }}" alt="Jérémie Honnoré">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Jérémie Honnoré</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste chambriste, directeur artistique</p>
                        </div>
                    </div>
                </div>
                <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/home-header-img.webp') }}" alt="Céline Eymard-Bianchi-Ferrari">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Céline Eymard-Bianchi-Ferrari</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Présidente de Poly Plumes</p>
                        </div>
                    </div>
                </div>
                <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/home-header-img.webp') }}" alt="Cécile Wang">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Cécile Wang</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste, concertiste au Royal College of Music of London</p>
                        </div>
                    </div>
                </div>
                <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
                    <div class="info-container flex">
                        <img loading="lazy" class="w-[40%] xs:h-[15vh] sm:h-[30vh]" src="{{ asset('Images/home-header-img.webp') }}" alt="Pierrette Angelin">
                        <div class="infos w-[55%] ms-5">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pierrette Angelin</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Professeur au Conservatoire de Toulouseo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="map" class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:grid md:grid-cols-2 md:grid-rows-1 md:mt-5 md:m-auto md:gap-x-10 md:min-h-[40vh] lg:min-h-[50vh]">
            <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh] md:col-span-2">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Contactez-nous</h2>
            </div>
            <form class="w-full py-5 mb-5" action="{{ route('marrakech.contact.store') }}" method="post">
                @csrf
                <div class="xs:w-4/5 xs:mx-auto md:w-4/5 md:ms-auto md:me-0">
                    <div class="grid grid-cols-1 grid-rows-1 gap-10">
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="nom_complet">Nom Complet: <span class=" text-red-600">*</span></label>
                            <input class="text-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre nom" id="nom_complet" name="nom_complet" type="text" value="{{ old('nom_complet') }}">
                            @error('nom_complet')
                                <p class="text-red-600 mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="email">Email: <span class=" text-red-600">*</span></label>
                            <input class="text-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre email" id="email" name="email" type="email" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-600 mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-1">
                            <label class="text-[#a3a3a3] mb-4 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="message">Message: <span class=" text-red-600">*</span></label>
                            <textarea class="text-black focus:outline-0 px-4 py-1 rounded-md resize-none xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" name="message" id="message" cols="30" rows="10" placeholder="Entrer votre message">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-600 mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <input class="cursor-pointer bg-blue-400 rounded-md my-10 text-white xs:text-[10px] xs:py-2 xs:px-5 sm:py-3 sm:px-10 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" type="submit" value="Envoyer">
                </div>
            </form>
            <div class="flex items-center justify-center">
                <div class="mx-auto my-auto xs:w-full md:w-[unset]">
                    <iframe class="xs:w-10/12 xs:h-[220px] xs:mx-auto sm:h-[300px] md:w-[250px] md:h-[350px] lg:w-[300px] lg:h-[400px] xl:w-[600px] xl:h-[450px]" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9539.909954918676!2d-9.236782905252008!3d32.2885398619593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sma!4v1730801757056!5m2!1sen!2sma" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <footer class="w-full min-h-80 bg-[#231F20] py-5">
            <img loading="lazy" class="w-full" src="{{ asset('Images/footer-bg-piano.webp') }}" alt="Footer Bg Piano">
            <div class="mx-auto grid grid-rows-1 grid-cols-2 py-4 xs:w-11/12 sm:w-4/5">
                <div>
                    <a href="{{ route('home') }}">
                      <img loading="lazy" class="block my-10 xs:w-3/4 sm:w-1/2" src="{{ asset('Images/logo.webp') }}" alt="logo">
                    </a>
                </div>
                <div>
                    <p class="text-[#bc8c2d] font-bold mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Media</p>
                    <div class="grid grid-cols-4 gap-5 xs:w-5/6 sm:w-4/6">
                        <a href="#" target="_blank"><img loading="lazy" class="hover:scale-110 hover:-translate-y-2 transition-all xs:w-full sm:w-2/3 " src="{{ asset('Images/Fb.webp') }}" alt="FB"></a>
                        <a href="#" target="_blank"><img loading="lazy" class="hover:scale-110 hover:-translate-y-2 transition-all xs:w-full sm:w-2/3 " src="{{ asset('Images/Insta.webp') }}" alt="Insta"></a>
                        <a href="#" target="_blank"><img loading="lazy" class="hover:scale-110 hover:-translate-y-2 transition-all xs:w-full sm:w-2/3 " src="{{ asset('Images/X.webp') }}" alt="X"></a>
                        <a href="#" target="_blank"><img loading="lazy" class="hover:scale-110 hover:-translate-y-2 transition-all xs:w-full sm:w-2/3 " src="{{ asset('Images/Gmail.webp') }}" alt="Gmail"></a>
                    </div>
                </div>
                <div>
                    <p class="text-[#bc8c2d] font-bold my-4 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Contacts</p>
                    <a href="mailto:competpianosafi@gmail.com"><p class="text-white hover:text-[#bc8c2d] mb-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">competpianosafi@gmail.com</p></a>
                    <a href="tel:+212612345789"><p class="text-white hover:text-[#bc8c2d] mb-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">+212 612345789</p></a>
                    <p class="text-[#bc8c2d] font-bold my-4 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Lieus</p>
                    <a href="#map"><p class="text-white hover:text-[#bc8c2d] mb-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Rue Ibnou Badis, Safi, Morocco</p></a>
                    <p class="text-[#bc8c2d] font-bold my-4 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Horaires</p>
                    <p class="text-white hover:text-[#bc8c2d] mb-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Lundi – Samedi: 8h – 20h</p>
                    <p class="text-white hover:text-[#bc8c2d] mb-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Dimanche: Fermé</p>
                </div>
                <div>
                    <p class="text-[#bc8c2d] font-bold mt-4 my-6 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Les Pages</p>
                    <div class="grid grid-cols-2 grid-rows-1 xs:gap-y-4 sm:gap-y-10">
                        <p><a href="{{ route('marrakech.presentation') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Presentation</a></p>
                        <p><a href="{{ route('marrakech.edition_2025') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Edition 2025</a></p>
                        <p><a href="{{ route('marrakech.jury') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Jury</a></p>
                        <p><a href="{{ route('marrakech.comite_honneur') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Comite d’Honneur</a></p>
                        <p><a href="{{ route('marrakech.inscription') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Inscription</a></p>
                        <p><a href="{{ route('marrakech.galerie') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Galerie</a></p>
                        <p><a href="{{ route('marrakech.laureats') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Laureats</a></p>
                        <p><a href="{{ route('marrakech.contact') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Contactez-nous</a></p>
                    </div>
                </div>
            </div>
        </footer>
        @if (session()->has('success'))
            <div id="alert" class="w-1/4 h-[8vh] items-center z-20 fixed right-10 bottom-8 bg-green-600 text-white font-bold rounded-md">
                <p class="ms-5">{{ session('success') }}</p>
                <div class="alert-time-bar w-full bg-white opacity-50 h-2 absolute bottom-0 rounded-bl-3xl"></div>
            </div>
        @endif
    </body>
</html>
