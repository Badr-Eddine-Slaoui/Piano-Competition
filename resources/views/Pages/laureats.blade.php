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
        @vite(['resources/css/app.css','resources/css/laureats.css', 'resources/js/laureats.js', 'resources/js/app.js'])

    </head>
    <body class="text-white bg-[#231F20] overflow-x-hidden">
        <header class="w-full min-h-screen">
            <nav class="w-full h-[20vh] fixed top-0 left-0 z-10 bg-HeaderBg grid bg-no-repeat bg-cover grid-cols-1 grid-rows-2">
                <ul class="w-1/6 mr-12 ml-auto mt-5 flex items-center justify-between text-white font-bold text-xl">
                    <li><a href="{{ route('presentation_paris') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Paris</a></li>
                    <li><a href="{{ route('presentation_marrakech') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Marrakesh</a></li>
                </ul>
                <ul class="w-4/6 mr-12 ml-auto mb-5 flex items-center justify-between text-white font-bold text-xl">
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
            <img class="w-full mt-[20vh] h-[80vh]" src="{{ asset('Images/home-header-img.png') }}">
        </header>
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
        <section class="w-full min-h-screen mt-5 m-auto grid grid-cols-2 grid-rows-1 ">
            <div class="flex h-[20vh] relative z-[-2] items-center col-span-2 my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center">Contactez-nous</h2>
            </div>
            <form class="w-full py-5 mb-5" action="{{ route('contact.store') }}" method="post">
                @csrf
                <div class="w-3/5 mx-auto">
                    <div class="grid grid-cols-1 grid-rows-1 gap-10">
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[22px] text-[#a3a3a3]" for="nom">Nom:</label>
                            <input class="text-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 rounded-md" placeholder="Entrer votre nom" id="nom" name="nom" type="text" value="{{ old('nom') }}">
                            @error('nom')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[22px] text-[#a3a3a3]" for="email">Email:</label>
                            <input class="text-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 rounded-md" placeholder="Entrer votre email" id="email" name="email" type="email" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-1">
                            <label class="text-[22px] text-[#a3a3a3] mb-4" for="message">Message</label>
                            <textarea class="text-black focus:outline-0 px-4 py-1 rounded-md resize-none" name="message" id="message" cols="30" rows="10" placeholder="Entrer votre message">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <input class="cursor-pointer bg-blue-400 py-3 px-10 rounded-md my-10 text-white text-[22px]" type="submit" value="Envoyer">
                </div>
            </form>
            <div class="flex items-center justify-center">
                <div class="w-4/5 mx-auto my-auto">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9539.909954918676!2d-9.236782905252008!3d32.2885398619593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sma!4v1730801757056!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <footer class="w-full min-h-80 bg-[#231F20]">
            <img class="w-full" src="{{ asset('Images/footer-bg-piano.png') }}" alt="Footer Bg Piano">
            <div class="w-3/4 mx-auto grid grid-rows-1 grid-cols-2 py-4">
                <div>
                    <img src="{{ asset('Images/logo.png') }}" alt="logo">
                </div>
                <div>
                    <p class="text-[26px] text-orange-600 font-bold mb-5 mt-3">Media</p>
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
                </div>
                <div>
                    <p class="text-[26px] text-orange-600 font-bold my-4">Horaires</p>
                    <p class="text-[22px] text-white">Lundi – Samedi: 8h – 20h</p>
                    <p class="text-[22px] text-white">Dimanche: Fermé</p>
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
