<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contactez-nous</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/carousel.js', 'resources/js/app.js'])

    </head>
    <body class="text-white bg-[#231F20]">
        <header class="w-full h-[20vh]">
            <nav class="w-full h-[20vh] fixed top-0 left-0 z-10 bg-HeaderBg bg-no-repeat bg-cover flex justify-between">
                <div class="w-1/6 flex justify-center items-center">
                    <a href="{{ route('home') }}"><img class="w-[90%] ms-auto" src="{{ asset('Images/Logo.png')  }}" alt="Logo"></a>
                </div>
                <div class="w-4/6 grid grid-cols-1 grid-rows-2 mr-12">
                    <ul class="w-1/6 ml-auto mt-5 flex items-center justify-between text-white font-bold text-xl">
                    <li><a href="{{ route('presentation_paris') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Paris</a></li>
                    <li><a href="{{ route('presentation_marrakech') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Marrakesh</a></li>
                </ul>
                    <ul class="w-full ml-auto mb-5 flex items-center justify-between text-white font-bold text-xl">
                    <li><a href="{{ route('home') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Accueil</a></li>
                    <li><a href="{{ route('presentation_marrakech') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Presentation</a></li>
                    <li><a href="{{ route('galerie') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Galerie</a></li>
                    <li><a href="{{ route('edition_2025_marrakech') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Edition 2025</a></li>
                    <li><a href="{{ route('inscription_marrakech') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Inscription</a></li>
                    <li><a href="{{ route('jury') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Jury</a></li>
                    <li><a href="{{ route('comite_honneur') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Comite d’Honneur</a></li>
                    <li><a href="{{ route('laureats') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Laureats</a></li>
                    <li><a href="{{ route('contact') }}" class="text-decoration-none border-b-4 border-orange-600">Contactez-nous</a></li>
                </ul>
            </nav>
        </header>
        <main id="carousel" class="w-full h-[80vh] relative overflow-x-hidden">
            <div id="carousel-track" class="w-full h-full flex ">
                <img class="w-full h-full flex-shrink-0" src="{{ asset('Images/home-header-img.png') }}">
                <img class="w-full h-full flex-shrink-0" src="{{ asset('Images/Re-Belle-Communication.png') }}">
            </div>
        </main>
        <aside class=" fixed left-0 top-[25vh] w-1/12 z-[-1]">
            <img class="w-full" src="{{ asset('Images/SideImg.png')  }}" alt="SideImg">
        </aside>
        <section class="w-full min-h-screen mt-5 mb-20">
            <div class="flex h-[20vh] relative z-[-2] items-center my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center">Contactez-nous</h2>
            </div>
            <div class="w-4/5 min-h-[80vh] m-auto">
                <div class="w-full h-[35vh] my-10">
                    <img class="w-full h-full" src="{{ asset('Images/ConditionDeParticipation.png') }}" alt="EventBanner">
                </div>
                <p class="text-[#a3a3a3] text-[22px] my-10">
                    Le concours est ouvert à tous les pianistes ayant atteint l’âge de 18 ans au 23 Octobre 2023, date de début du concours.
                    Avoir 6 ans révolus et
                </p>
                <form class="w-full py-5 my-5" action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="w-3/5 mx-auto border border-white py-16 px-10 rounded-3xl">
                        <div class="grid grid-cols-1 grid-rows-1 gap-10">
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[22px] text-[#a3a3a3]" for="nom">Nom:</label>
                                <input class="focus:outline-0 px-4 py-1 rounded-md" id="nom" name="nom" type="text">
                            </div>
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[22px] text-[#a3a3a3]" for="email">Email:</label>
                                <input class="focus:outline-0 px-4 py-1 rounded-md" id="email" name="email" type="email">
                            </div>
                            <div class="grid grid-cols-1 grid-rows-1">
                                <label class="text-[22px] text-[#a3a3a3] mb-4" for="message">Message</label>
                                <textarea class="focus:outline-0 px-4 py-1 rounded-md resize-none" name="message" id="message" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <input class=" bg-blue-400 py-3 px-10 rounded-md my-5 text-white text-[22px]" type="submit" value="Envoyer">
                    </div>
                </form>
            </div>

        </section>
        <footer class="w-full min-h-80 bg-[#231F20] py-5">
            <img class="w-full" src="{{ asset('Images/footer-bg-piano.png') }}" alt="Footer Bg Piano">
            <div class="w-3/4 mx-auto grid grid-rows-1 grid-cols-2 py-4">
                <div>
                    <a href="{{ route('home') }}">
                      <img class="block w-1/2 my-10" src="{{ asset('Images/logo.png') }}" alt="logo">
                    </a>
                </div>
                <div>
                    <p class="text-[26px] text-orange-600 font-bold mb-5">Media</p>
                    <div class="grid grid-cols-4 gap-5 w-5/6">
                        <img src="{{ asset('Images/Fb.png') }}" alt="FB">
                        <img src="{{ asset('Images/Insta.png') }}" alt="Insta">
                        <img src="{{ asset('Images/X.png') }}" alt="X">
                        <img src="{{ asset('Images/Gmail.png') }}" alt="Gmail">
                    </div>
                </div>
                <div>
                    <p class="text-[26px] text-orange-600 font-bold my-4">Infos</p>
                    <p class="text-[22px] text-white">competpianosafi@gmail.com</p>
                    <p class="text-[22px] text-white">+212 612345789</p>
                    <p class="text-[22px] text-white">Rue Ibnou Badis, Safi, Morocco</p>
                    <p class="text-[26px] text-orange-600 font-bold my-4">Horaires</p>
                    <p class="text-[22px] text-white">Lundi – Samedi: 8h – 20h</p>
                    <p class="text-[22px] text-white">Dimanche: Fermé</p>
                </div>
                <div>
                    <p class="text-[26px] text-orange-600 font-bold my-4">Links</p>
                    <div class="grid grid-cols-2 grid-rows-1 gap-y-8">
                        <p><a href="{{ route('presentation_marrakech') }}" class="text-decoration-none text-[22px] text-white">Presentation</a></p>
                        <p><a href="{{ route('galerie') }}" class="text-decoration-none text-[22px] text-white">Galerie</a></p>
                        <p><a href="{{ route('edition_2025_marrakech') }}" class="text-decoration-none text-[22px] text-white">Edition 2025</a></p>
                        <p><a href="{{ route('inscription_marrakech') }}" class="text-decoration-none text-[22px] text-white">Inscription</a></p>
                        <p><a href="{{ route('jury') }}" class="text-decoration-none text-[22px] text-white">Jury</a></p>
                        <p><a href="{{ route('comite_honneur') }}" class="text-decoration-none text-[22px] text-white">Comite d’Honneur</a></p>
                        <p><a href="{{ route('laureats') }}" class="text-decoration-none text-[22px] text-white">Laureats</a></p>
                        <p><a href="{{ route('contact') }}" class="text-decoration-none text-[22px] text-white">Contactez-nous</a></p>
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