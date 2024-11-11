<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Les Laureats</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css','resources/css/laureats.css', 'resources/js/laureats.js', 'resources/js/carousel.js', 'resources/js/app.js'])

    </head>
    <body class="text-white bg-[#231F20] overflow-x-hidden">
        <header class="w-full h-[20vh]">
            <nav class="w-full h-[20vh] fixed top-0 left-0 z-10 bg-[#231F20] flex justify-between">
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
                    <li><a href="{{ route('laureats') }}" class="text-decoration-none border-b-4 border-orange-600">Laureats</a></li>
                    <li><a href="{{ route('contact') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Contactez-nous</a></li>
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
        <section class="w-full min-h-screen my-5">
            <div class="flex h-[20vh] relative z-[-2] items-center my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center">Les Laureats 2024</h2>
            </div>
            <div class="laureats w-4/6 min-h-screen mb-5 m-auto grid grid-cols-2 grid-rows-1 gap-x-10 gap-y-20">
                <div class="left">
                    <p class="text-[26px] font-bold text-[#bc8c2d] mb-5">Initiation:</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">1-</span> prix Mention très bien: El Bouanani Lina</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">2-</span> prix Mention très bien: Bouzoubaa Sara</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">3-</span> prix Mention très bien: Bennis Meryem</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">4-</span> prix Mention très bien: El Mouhtadi Jad</p>
                </div>
                <div class="right">
                    <p class="text-[26px] font-bold text-[#bc8c2d] mb-5">Débutant 1:</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">1-</span> prix Mention très bien: Saher Lylia</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">2-</span> prix Mention très bien: Tazi Amine</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">3-</span> prix Mention très bien : Boutaleb Ali</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">4-</span> prix Mention très bien : Mikou Leyla</p>
                </div>
                <div class="left">
                    <p class="text-[26px] font-bold text-[#bc8c2d] mb-5">Debutant2:</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">1-</span> prix Mention très bien : Mseffer Sophia</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">2-</span> prix Mention très bien:Zine Filali Chama</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">3-</span> prix Mention très bien: Hassoune Selman</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">4-</span> prix Mention très bien: Smires Lyna</p>
                </div>
                <div class="right">
                    <p class="text-[26px] font-bold text-[#bc8c2d] mb-5">Préparatoire 1:</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">1-</span> prix Mention très bien: Hilal Chadi</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">2-</span> prix Mention très bien: Bennis-Belozerskaya Sofia</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">3-</span> prix Mention très bien: Jellali Ziyad</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">4-</span> prix Mention très bien: Kadiri Ghita</p>
                </div>
                <div class="left">
                    <p class="text-[26px] font-bold text-[#bc8c2d] mb-5">Préparatoire 2 :</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">1-</span> prix Mention très bien: Tahiri Joutei Hassani Sophia</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">2-</span> prix Mention très bien: Dahab Kamil</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">3-</span> prix Mention très bien: Rhafiri Mayssane</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">4-</span> prix Mention très bien : Lahrichi Radia</p>
                </div>
                <div class="right">
                    <p class="text-[26px] font-bold text-[#bc8c2d] mb-5">Élémentaire 1:</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">1-</span> prix Mention très bien: Guessous Mehdi</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">2-</span> prix Mention très bien: El Rhazi Kenza</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">3-</span> prix Mention très bien: Moumile Kenza</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">4-</span> prix Mention très bien ex aequo: sanhadji Sofia</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">4-</span> prix Mention très bien ex aequo: Abouzaid Lyn</p>
                </div>
                <div class="left">
                    <p class="text-[26px] font-bold text-[#bc8c2d] mb-5">Élémentaire 2:</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">1-</span> prix Mention très bien: Hadni Layla</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">2-</span> prix Mention très bien: El Waradi Mohamed Sadik</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">3-</span> prix Mention bien: Lahlou Sofia</p>
                </div>
                <div class="right">
                    <p class="text-[26px] font-bold text-[#bc8c2d] mb-5">Moyen1:</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">1-</span> prix Mention très bien: Tazi Zineb</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">2-</span> prix Mention très bien: El Waradi Mohamed Yazid</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">3-</span> prix Mention très bien: Houmy Ines</p>
                </div>
                <div class="left">
                    <p class="text-[26px] font-bold text-[#bc8c2d] mb-5">Moyen2 :</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">1-</span> prix Mention très bien: Chami Dina</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">2-</span> prix Mention très bien: Nejjar Abdallah</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">3-</span> prix Mention très bien: Savoir Yassine</p>
                </div>
                <div class="right">
                    <p class="text-[26px] font-bold text-[#bc8c2d] mb-5">Supérieur 1:</p>
                    <p class="text-[20px] text-gray-400">Aucun prix</p>
                </div>
                <div class="left">
                    <p class="text-[26px] font-bold text-[#bc8c2d] mb-5">Supérieur 2:</p>
                    <p class="text-[20px] text-gray-400">Aucun prix</p>
                </div>
                <div class="right">
                    <p class="text-[26px] font-bold text-[#bc8c2d] mb-5">Excellence 1:</p>
                    <p class="text-[20px] text-gray-400"><span class="text-white">1-</span> prix Mention très bien: Antoine Tomasi</p>
                </div>
                <div class="left">
                    <p class="text-[26px] font-bold text-[#bc8c2d] mb-5">Virtuosité 2:</p>
                    <p class="text-[20px] text-gray-400">Aucun prix</p>
                </div>
                <div class="right">
                    <p class="text-[26px] font-bold text-[#bc8c2d] mb-5">Diplôme de Concert:</p>
                    <p class="text-[20px] text-gray-400">Mention très bien: Sebti Ralia</p>
                </div>
            </div>
        </section>
        <section id="map" class="w-full min-h-screen mt-5 m-auto grid grid-cols-2 grid-rows-1 gap-x-10">
            <div class="flex h-[20vh] relative z-[-2] items-center col-span-2 my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center text-[#bc8c2d]">Contactez-nous</h2>
            </div>
            <form class="w-full py-5 mb-5" action="{{ route('contact.store') }}" method="post">
                @csrf
                <div class="w-3/5 mx-auto">
                    <div class="grid grid-cols-1 grid-rows-1 gap-10">
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[22px] text-[#a3a3a3]" for="nom_complet">Nom Complet: <span class=" text-red-600">*</span></label>
                            <input class="text-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 rounded-md" placeholder="Entrer votre nom" id="nom_complet" name="nom_complet" type="text" value="{{ old('nom_complet') }}">
                            @error('nom_complet')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[22px] text-[#a3a3a3]" for="email">Email: <span class=" text-red-600">*</span></label>
                            <input class="text-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 rounded-md" placeholder="Entrer votre email" id="email" name="email" type="email" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-1">
                            <label class="text-[22px] text-[#a3a3a3] mb-4" for="message">Message: <span class=" text-red-600">*</span></label>
                            <textarea class="text-black focus:outline-0 px-4 py-1 rounded-md resize-none" name="message" id="message" cols="30" rows="10" placeholder="Entrer votre message">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <input class="cursor-pointer bg-blue-400 py-3 px-10 rounded-md my-10 text-white text-[22px]" type="submit" value="Envoyer">
                </div>
            </form>
            <div  class="flex items-center justify-center">
                <div class="w-4/5 mx-auto my-auto">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9539.909954918676!2d-9.236782905252008!3d32.2885398619593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sma!4v1730801757056!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <footer class="w-full min-h-80 bg-[#231F20] py-5">
            <img class="w-full" src="{{ asset('Images/footer-bg-piano.png') }}" alt="Footer Bg Piano">
            <div class="w-4/5 mx-auto grid grid-rows-1 grid-cols-2 py-4">
                <div>
                    <a href="{{ route('home') }}">
                      <img class="block w-1/2 my-10" src="{{ asset('Images/logo.png') }}" alt="logo">
                    </a>
                </div>
                <div>
                    <p class="text-[26px] text-[#bc8c2d] font-bold mb-5">Media</p>
                    <div class="grid grid-cols-4 gap-5 w-5/6">
                        <a href="#" target="_blank"><img class="hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/Fb.png') }}" alt="FB"></a>
                        <a href="#" target="_blank"><img class="hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/Insta.png') }}" alt="Insta"></a>
                        <a href="#" target="_blank"><img class="hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/X.png') }}" alt="X"></a>
                        <a href="#" target="_blank"><img class="hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/Gmail.png') }}" alt="Gmail"></a>
                    </div>
                </div>
                <div>
                    <p class="text-[26px] text-[#bc8c2d] font-bold my-4">Contacts</p>
                    <a href="mailto:competpianosafi@gmail.com"><p class="text-[22px] text-white hover:text-[#bc8c2d] mb-3">competpianosafi@gmail.com</p></a>
                    <a href="tel:+212612345789"><p class="text-[22px] text-white hover:text-[#bc8c2d] mb-3">+212 612345789</p></a>
                    <p class="text-[26px] text-[#bc8c2d] font-bold my-4">Lieus</p>
                    <a href="#map"><p class="text-[22px] text-white hover:text-[#bc8c2d] mb-3">Rue Ibnou Badis, Safi, Morocco</p></a>
                    <p class="text-[26px] text-[#bc8c2d] font-bold my-4">Horaires</p>
                    <p class="text-[22px] text-white hover:text-[#bc8c2d] mb-3">Lundi – Samedi: 8h – 20h</p>
                    <p class="text-[22px] text-white hover:text-[#bc8c2d] mb-3">Dimanche: Fermé</p>
                </div>
                <div>
                    <p class="text-[26px] text-[#bc8c2d] font-bold mt-4 my-6">Les Pages</p>
                    <div class="grid grid-cols-2 grid-rows-1 gap-y-10">
                        <p><a href="{{ route('presentation_marrakech') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Presentation</a></p>
                        <p><a href="{{ route('galerie') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Galerie</a></p>
                        <p><a href="{{ route('edition_2025_marrakech') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Edition 2025</a></p>
                        <p><a href="{{ route('inscription_marrakech') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Inscription</a></p>
                        <p><a href="{{ route('jury') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Jury</a></p>
                        <p><a href="{{ route('comite_honneur') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Comite d’Honneur</a></p>
                        <p><a href="{{ route('laureats') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Laureats</a></p>
                        <p><a href="{{ route('contact') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Contactez-nous</a></p>
                        <p><a href="{{ route('presentation_paris') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Paris</a></p>
                        <p><a href="{{ route('presentation_marrakech') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Marrakesh</a></p>
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
