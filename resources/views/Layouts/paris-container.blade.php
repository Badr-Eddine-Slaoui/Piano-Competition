<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Concours International Du Piano Paris">
        <meta name="robots" content="index, follow">
        <meta name="language" content="fr">
        <meta name="revisit-after" content="1 days">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('Images/PosterParis.webp') }}">
        <meta property="og:site_name" content="Concours International Du Piano Paris">
        <meta property="og:locale" content="ar_MA">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:image" content="{{ asset('Images/PosterParis.webp') }}">
        @yield('meta')

        <title>Paris - @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('Images/ParisIcon.webp') }}" type="image/x-icon">
        <link rel="apple-touch-icon" href="{{ asset('Images/ParisIcon.webp') }}">
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- Styles / Scripts -->
        @yield('resources')

    </head>
    <body class="text-white bg-body">
      <header class="w-full cmd:h-[15vh] lg:h-[17vh] xl:h-[25vh]">
        <nav class="w-full fixed top-0 left-0 z-50 bg-black flex justify-between xs:h-[10vh] xs:p-[1vh] sm:h-[12vh] sm:p-[2vh] md:h-[15vh] lg:h-[17vh] xl:h-[25vh] xl:p-[3vh]">
                <div class="flex justify-center items-center xs:w-5/12 sm:w-3/12">
                    <a href="{{ route('home') }}"><img loading="lazy" class="h-full py-[2vh]" src="{{ asset('Images/LOGO PIANO SITE WEB/LOGO OFF CONCOURS BLANC.png') }}" alt=""></a>
                    <img loading="lazy" class="h-full py-[2vh] xs:ms-5 sm:py-0 md:py-[2vh] lg:ms-10 lg:py-[1vh]" src="{{ asset('Images/LOGO PIANO SITE WEB/PIANIST blanc.png') }}" alt="">
                </div>
                <div class="w-1/12 flex justify-center items-center sm:hidden">
                    <i id="menuBar" class="fa-solid fa-bars text-white"></i>
                </div>
                <div id="menu" class="xs:w-3/5 xs:transition-all xs:opacity-0 xs:duration-500 xs:translate-x-[100%] xs:fixed xs:right-0 xs:top-[10vh] xs:z-20 xs:bg-black xs:h-screen xs:py-10 xs:px-10 sm:transition-none sm:translate-x-0 sm:opacity-100 sm:relative sm:p-0 sm:right-[unset] sm:top-[unset] sm:z-[unset] sm:bg-[unset] sm:h-[unset] sm:flex sm:flex-col sm:items-center sm:w-8/12 md:mr-5 lg:w-7/12">
                    <div class="w-full text-white xs:text-[10px] xs:hidden sm:ml-auto sm:flex sm:items-center sm:justify-end sm:font-semibold sm:gap-y-4 sm:text-[8px] sm:mb-[1vh] sm:gap-x-6 md:text-[10px] md:gap-x-8 lg:text-[12px] lg:mb-[1.5vh] lg:gap-y-6 xl:text-[16px] xl:mb-[3.5vh] xl:gap-y-8 xl:gap-x-12">
                      <div class="me-auto grid grid-rows-1 w-4/12 grid-cols-2 gap-x-2 sm:me-5 lg:me-10">
                        <a href="{{ route('paris.home') }}" title="Concours International de Piano Paris">
                            <div class="flex h-full items-center justify-around cursor-pointer">
                                <div class="xs:w-3/4 sm:w-2/3 lg:w-11/12 xl:w-4/6">
                                    <img loading="lazy" class="w-full" src="{{ asset('Images/LOGO PIANO SITE WEB/Paris doré 1.png') }}" alt="Concours International de Piano Paris Logo" title="Concours International de Piano Paris Logo">
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('marrakech.home') }}" title="Concours International de Piano Marrakech">
                            <div class="flex flex-col h-full items-center justify-around cursor-pointer">
                                <div class="xs:w-3/4 sm:w-2/3 lg:w-11/12 xl:w-4/6">
                                    <img loading="lazy" class="w-full" src="{{ asset('Images/LOGO PIANO SITE WEB/Marrakech doré.png') }}" alt="Concours International de Piano Marrakech Logo" title="Concours International de Piano Marrakech Logo">
                                </div>
                            </div>
                        </a>
                      </div>
                      <div class="flex items-center justify-end sm:my-2 md:my-4 xl:my-5">
                        <button class="bg-gold rounded-full py-1 sm:px-3 sm:me-5 md:px-4 lg:px-5 lg:me-10"><a href="{{ route('marrakech.inscription') }}" class="text-decoration-none xs:block xs:mb-2 sm:mb-0">Inscription</a></button>
                        <button class="border border-gold rounded-full py-1 sm:px-3 sm:me-5 md:px-4 lg:px-5 lg:me-10"><a href="{{ route('marrakech.reservation') }}" class="text-decoration-none xs:block xs:mb-2 sm:mb-0">Reservation</a></button>
                      </div>
                      <div class="grid grid-rows-1 grid-cols-4 sm:gap-x-5 lg:gap-x-8 xl:gap-x-5">
                        <a href="#" target="_blank"><i class="fa-brands fa-facebook xs:w-full xs:text-[16px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"></i></a>
                        <a href="https://www.instagram.com/concoursmouvementcontraire/profilecard/?igsh=dmQxZjc4dGowMzBh" target="_blank"><i class="fa-brands fa-instagram xs:w-full xs:text-[16px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-tiktok xs:w-full xs:text-[16px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"></i></a>
                        <a href="https://www.youtube.com/@InternationalDuPianoOfficiel" target="_blank"><i class="fa-brands fa-youtube xs:w-full xs:text-[16px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"></i></a>
                      </div>
                    </div>
                    <ul class="w-full mx-5 text-white xs:text-[10px] sm:ml-auto sm:flex sm:items-center sm:justify-between sm:font-semibold sm:gap-y-4 sm:text-[9px] md:text-[12px] lg:text-[14px] lg:gap-y-6 xl:text-[17px] xl:gap-y-8">
                        <li><a href="{{ route('paris.home') }}" class="text-decoration-none xs:block xs:mb-5 sm:mb-0 hover:text-gold">Accueil</a></li>
                        <li class="dropdown-container text-decoration-none relative xs:block xs:mb-5 sm:mb-0">
                          <span class="me-2">Concours 2025</span>
                          <i class="fa-solid fa-angle-down"></i>
                          <ul class="dropdown hidden bg-black ps-2 -ms-2 hover:grid grid-cols-1 grid-rows-1 xs:pt-5 sm:absolute sm:w-[200%] sm:py-3 sm:gap-y-5 md:gap-y-4 lg:gap-y-3 xl:gap-y-2 xl:py-2">
                            <li><a href="{{ route('paris.edition_2025') }}#programme" class="text-decoration-none xs:block xs:mb-5 sm:mb-2 hover:text-gold">Le programme du concours</a></li>
                            <li><a href="{{ route('paris.edition_2025') }}#classe-categories" class="text-decoration-none xs:block xs:mb-5 sm:mb-2 hover:text-gold">Classe - catégories</a></li>
                            <li><a href="{{ route('paris.edition_2025') }}#partitions" class="text-decoration-none xs:block xs:mb-5 sm:mb-2 hover:text-gold">Partitions</a></li>
                            <li><a href="{{ route('paris.reglement') }}" class="text-decoration-none xs:block xs:mb-5 sm:mb-2 hover:text-gold">Règlement</a></li>
                            <li><a href="{{ route('paris.edition_2025') }}#recompenses" class="text-decoration-none xs:block xs:mb-5 sm:mb-2 hover:text-gold">Récompenses</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-container text-decoration-none relative xs:block xs:mb-5 sm:mb-0">
                          <span class="me-2">Organisation</span>
                          <i class="fa-solid fa-angle-down"></i>
                          <ul class="dropdown hidden bg-black ps-2 -ms-2 hover:grid grid-cols-1 grid-rows-1 xs:pt-5 xs:w-full sm:absolute sm:w-[200%] sm:py-3 sm:gap-y-5 md:gap-y-4 lg:gap-y-3 xl:gap-y-2 xl:py-2">
                            <li><a href="{{ route('paris.home') }}#mot-de-le-president" class="text-decoration-none xs:block xs:mb-5 sm:mb-2 hover:text-gold">Mot de le président</a></li>
                            <li><a href="{{ route('paris.edition_2025') }}#composantes" class="text-decoration-none xs:block xs:mb-5 sm:mb-2 hover:text-gold">Organisation du concours</a></li>
                            <li><a href="{{ route('paris.presentation') }}#association-culturers-sans-frontieres" class="text-decoration-none xs:block xs:mb-5 sm:mb-2 hover:text-gold">Association Culturers sans frontières</a></li>
                            <li><a href="{{ route('paris.comite_honneur') }}" class="text-decoration-none xs:block xs:mb-5 sm:mb-2 hover:text-gold">Comité d’Honneur</a></li>
                            <li><a href="{{ route('paris.jury') }}" class="text-decoration-none xs:block xs:mb-5 sm:mb-2 hover:text-gold">Jury</a></li>
                            <li><a href="{{ route('paris.home') }}#partenaires" class="text-decoration-none xs:block xs:mb-5 sm:mb-2 hover:text-gold">Partenaires</a></li>
                            <li><a href="{{ route('paris.galerie') }}" class="text-decoration-none xs:block xs:mb-5 sm:mb-2 hover:text-gold">Galerie</a></li>
                          </ul>
                        </li>
                        <li><a href="{{ route('paris.laureats') }}" class="text-decoration-none xs:block xs:mb-5 sm:mb-0 hover:text-gold">Lauréats 2024</a></li>
                        <li><a href="{{ route('paris.contact') }}" class="text-decoration-none xs:block xs:mb-5 sm:mb-0 hover:text-gold">Contact</a></li>
                        <li class="xs:block sm:hidden"><a href="{{ route('paris.inscription') }}" class="text-decoration-none xs:block xs:mb-5 sm:mb-0 hover:text-gold">Inscription</a></li>
                        <li class="xs:block sm:hidden"><a href="{{ route('paris.reservation') }}" class="text-decoration-none xs:block xs:mb-5 sm:mb-0 hover:text-gold">Reservation</a></li>
                        <li class="sm:hidden">
                          <div class="me-auto grid grid-rows-1 w-7/12 grid-cols-2 gap-x-5">
                            <a href="{{ route('marrakech.home') }}" title="Concours International de Piano Marrakech">
                                <div class="flex flex-col h-full items-center justify-around cursor-pointer">
                                    <div class="">
                                        <img loading="lazy" class="w-full" src="{{ asset('Images/LOGO PIANO SITE WEB/Marrakech doré.png') }}" alt="Concours International de Piano Marrakech Logo" title="Concours International de Piano Marrakech Logo">
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('paris.home') }}" title="Concours International de Piano Paris">
                                <div class="flex h-full items-center justify-around cursor-pointer">
                                    <div class="">
                                        <img loading="lazy" class="w-full" src="{{ asset('Images/LOGO PIANO SITE WEB/Paris doré 1.png') }}" alt="Concours International de Piano Paris Logo" title="Concours International de Piano Paris Logo">
                                    </div>
                                </div>
                            </a>
                          </div>
                        </li>
                      </ul>
                </div>
            </nav>
        </header>
        @yield('hero')
        <aside class="fixed left-0 top-[25vh] w-1/12 z-20 xs:hidden sm:block">
            <img loading="lazy" class="w-full" src="{{ asset('Images/LOGO PIANO SITE WEB/MC dorté 1.png')  }}" alt="SideImg">
        </aside>
        @yield('content')
        {{-- @if($title !== "Contact")
            <section id="map" class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] sm:w-11/12 sm:ms-auto sm:me-8 md:grid md:grid-cols-2 md:grid-rows-1 md:mt-5 md:m-auto md:gap-x-10 md:min-h-[40vh] lg:min-h-[50vh] lg:ms-auto lg:me-14">
                <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh] md:col-span-2">
                    <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
                    <h2 class="font-[400] text-center text-gold capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Contactez-nous</h2>
                </div>
                <form class="w-full py-5 mb-5" action="{{ route('paris.contact.store') }}" method="post">
                    @csrf
                    <div class="xs:w-4/5 xs:mx-auto md:w-4/5 md:ms-auto md:me-0">
                        <div class="grid grid-cols-1 grid-rows-1 gap-10">
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="nom_complet">Nom Complet: <span class=" text-red-600">*</span></label>
                                <input class=" bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre nom" id="nom_complet" name="nom_complet" type="text" value="{{ old('nom_complet') }}">
                                @error('nom_complet')
                                    <p class="text-red-600 mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="email">Email: <span class=" text-red-600">*</span></label>
                                <input class=" bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre email" id="email" name="email" type="email" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-red-600 mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="grid grid-cols-1 grid-rows-1">
                                <label class="text-[#a3a3a3] mb-4 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="message">Message: <span class=" text-red-600">*</span></label>
                                <textarea class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md resize-none xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" name="message" id="message" cols="30" rows="10" placeholder="Entrer votre message">{{ old('message') }}</textarea>
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
        @endif --}}
        <footer class="w-full min-h-80 pt-5 z-40 relative">
            <img loading="lazy" class="w-full" src="{{ asset('Images/footer-bg-piano.webp') }}" alt="Footer Bg Piano">
            <div class="bg-black">
              <div class="mx-auto grid grid-rows-1 grid-cols-2 py-4 xs:w-11/12 sm:w-4/5">
                <div>
                    <a href="{{ route('home') }}">
                      <img loading="lazy" class="block my-10 xs:w-3/4 sm:w-1/2" src="{{ asset('Images/LOGO PIANO SITE WEB/MC dorté 1 flipe.png')  }}" alt="logo">
                    </a>
                </div>
                <div>
                    <p class="text-gold font-bold mb-8 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Media</p>
                    <div class="grid grid-cols-4 gap-5 xs:w-5/6 sm:w-4/6">
                        <a href="#" target="_blank"><i class="fa-brands fa-facebook hover:scale-110 hover:-translate-y-2 transition-all xs:w-full xs:text-[18px] sm:text-[24px] md:text-[26px] lg:text-[34px] xl:text-[36px]"></i></a>
                        <a href="https://www.instagram.com/concoursmouvementcontraire/profilecard/?igsh=dmQxZjc4dGowMzBh" target="_blank"><i class="fa-brands fa-instagram hover:scale-110 hover:-translate-y-2 transition-all xs:w-full xs:text-[18px] sm:text-[24px] md:text-[26px] lg:text-[34px] xl:text-[36px]"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-tiktok hover:scale-110 hover:-translate-y-2 transition-all xs:w-full xs:text-[18px] sm:text-[24px] md:text-[26px] lg:text-[34px] xl:text-[36px]"></i></a>
                        <a href="https://www.youtube.com/@InternationalDuPianoOfficiel" target="_blank"><i class="fa-brands fa-youtube hover:scale-110 hover:-translate-y-2 transition-all xs:w-full xs:text-[18px] sm:text-[24px] md:text-[26px] lg:text-[34px] xl:text-[36px]"></i></a>
                    </div>
                </div>
                <div>
                    <p class="text-gold font-bold my-4 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Contacts</p>
                    <a href="mailto:competpianosafi@gmail.com"><p class="text-white hover:text-gold mb-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">competpianosafi@gmail.com</p></a>
                    <a href="tel:+212612345789"><p class="text-white hover:text-gold mb-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">+212 612345789</p></a>
                    <p class="text-gold font-bold my-4 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Lieus</p>
                    <p class="text-white hover:text-gold mb-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Rue Ibnou Badis, Safi, Morocco</p>
                    <p class="text-gold font-bold my-4 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Horaires</p>
                    <p class="text-white hover:text-gold mb-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Lundi – Samedi: 8h – 20h</p>
                    <p class="text-white hover:text-gold mb-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Dimanche: Fermé</p>
                </div>
                <div>
                    <p class="text-gold font-bold mt-4 my-6 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Les Pages</p>
                    <div class="grid grid-cols-2 grid-rows-1 xs:gap-y-4 sm:gap-y-10">
                        <p><a href="{{ route('paris.presentation') }}" class="text-decoration-nonetext-white hover:text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Presentation</a></p>
                        <p><a href="{{ route('paris.edition_2025') }}" class="text-decoration-nonetext-white hover:text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Edition 2025</a></p>
                        <p><a href="{{ route('paris.jury') }}" class="text-decoration-nonetext-white hover:text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Jury</a></p>
                        <p><a href="{{ route('paris.comite_honneur') }}" class="text-decoration-nonetext-white hover:text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Comite d’Honneur</a></p>
                        <p><a href="{{ route('paris.inscription') }}" class="text-decoration-nonetext-white hover:text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Inscription</a></p>
                        <p><a href="{{ route('paris.galerie') }}" class="text-decoration-nonetext-white hover:text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Galerie</a></p>
                        <p><a href="{{ route('paris.laureats') }}" class="text-decoration-nonetext-white hover:text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Laureats</a></p>
                        <p><a href="{{ route('paris.reglement') }}" class="text-decoration-nonetext-white hover:text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Reglement</a></p>
                        <p><a href="{{ route('paris.reservation') }}" class="text-decoration-nonetext-white hover:text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Reservation</a></p>
                        <p><a href="{{ route('paris.contact') }}" class="text-decoration-nonetext-white hover:text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Contact</a></p>
                    </div>
                </div>
              </div>
            </div>
        </footer>
        @if (session()->has('success'))
            <div id="alert" class="w-1/4 h-[8vh] items-center z-20 fixed right-10 bottom-8 bg-green-600 text-white font-bold rounded-md xs:w-1/2 xs:right-3 xs:h-[7vh] sm:w-2/5 sm:right-5 md:w-2/5 md:right-8 lg:w-1/4">
                <p class="ms-5">{{ session('success') }}</p>
                <div class="alert-time-bar w-full bg-white opacity-50 h-2 absolute bottom-0 rounded-bl-3xl xs:h-1"></div>
            </div>
        @endif
        @yield('json')
    </body>
</html>