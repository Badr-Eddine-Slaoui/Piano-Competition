<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Paris - Contactez-nous</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="{{ asset('Images/Paris.png') }}" type="image/x-icon">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/carousel.js', 'resources/js/app.js'])

    </head>
    <body class="text-white bg-[#231F20]">
        <header class="w-full h-[20vh]">
            <nav class="w-full h-[20vh] px-[3vh] py-[3vh] fixed top-0 left-0 z-10 bg-[#231F20] flex justify-between">
                <div class="w-1/6 flex justify-center items-center">
                    <a href="{{ route('home') }}"><img class="w-[90%] ms-auto" src="{{ asset('Images/Logo.png')  }}" alt="Logo"></a>
                </div>
                <div class="w-3/6 grid grid-cols-1 grid-rows-2 mr-12">
                    <ul class="w-full ml-auto flex items-center justify-between text-white font-semibold text-[18px]">
                        <li><a href="{{ route('paris.home') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Accueil</a></li>
                        <li><a href="{{ route('paris.presentation') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Presentation</a></li>
                        <li><a href="{{ route('paris.galerie') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Galerie</a></li>
                        <li><a href="{{ route('paris.edition_2025') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Edition 2025</a></li>
                        <li><a href="{{ route('paris.inscription') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Inscription</a></li>
                    </ul>
                    <ul class="w-full ml-auto flex items-center justify-between text-white font-semibold text-xl">
                        <li><a href="{{ route('paris.jury') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Jury</a></li>
                        <li><a href="{{ route('paris.comite_honneur') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Comite d’Honneur</a></li>
                        <li><a href="{{ route('paris.laureats') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Laureats</a></li>
                        <li><a href="{{ route('paris.contact') }}" class="text-decoration-none border-b-4 border-[#bc8c2d]">Contactez-nous</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="w-full h-[80vh]">
            <video class="w-[100vw] h-[80vh] object-cover" poster="{{ asset('Images/home-header-img.png') }}" src="{{ asset('Videos/HomeHeaderVideo.mp4') }}" muted autoplay loop></video>
        </main>
        <aside class=" fixed left-0 top-[25vh] w-1/12 z-[-1]">
            <img class="w-full" src="{{ asset('Images/SideImg.png')  }}" alt="SideImg">
        </aside>
        <section class="w-full min-h-screen mt-5 mb-20">
            <div class="flex h-[20vh] relative z-[-2] items-center my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center text-[#bc8c2d]">Contactez-nous</h2>
            </div>
            <div class="w-4/5 min-h-[80vh] m-auto">
                <p class="text-[#a3a3a3] text-[18px] my-10">
                    Le concours est ouvert à tous les pianistes ayant atteint l’âge de 18 ans au 23 Octobre 2023, date de début du concours.
                    Avoir 6 ans révolus et
                </p>
                <form class="w-full py-5 my-5" action="{{ route('paris.contact.store') }}" method="post">
                    @csrf
                    <div class="w-3/5 mx-auto border border-white py-16 px-10 rounded-3xl">
                        <div class="grid grid-cols-1 grid-rows-1 gap-10">
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[18px] text-[#a3a3a3]" for="nom_complet">Nom Complet: <span class=" text-red-600">*</span></label>
                                <input class="text-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 rounded-md" placeholder="Entrer votre nom" id="nom_complet" name="nom_complet" type="text" value="{{ old('nom_complet') }}">
                                @error('nom_complet')
                                    <p class="text-red-600 mt-5">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[18px] text-[#a3a3a3]" for="email">Email: <span class=" text-red-600">*</span></label>
                                <input class="text-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 rounded-md" placeholder="Entrer votre email" id="email" name="email" type="email" value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-red-600 mt-5">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="grid grid-cols-1 grid-rows-1">
                                <label class="text-[18px] text-[#a3a3a3] mb-4" for="message">Message: <span class=" text-red-600">*</span></label>
                                <textarea class="text-black focus:outline-0 px-4 py-1 rounded-md resize-none" name="message" id="message" cols="30" rows="10" placeholder="Entrer votre message">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-red-600 mt-5">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <input class="cursor-pointer bg-blue-400 py-3 px-10 rounded-md my-5 text-white text-[18px]" type="submit" value="Envoyer">
                    </div>
                </form>
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
                    <p class="text-[18px] text-[#bc8c2d] font-bold mb-5">Media</p>
                    <div class="grid grid-cols-4 gap-5 w-4/6">
                        <a href="#" target="_blank"><img class="w-2/3 hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/Fb.png') }}" alt="FB"></a>
                        <a href="#" target="_blank"><img class="w-2/3 hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/Insta.png') }}" alt="Insta"></a>
                        <a href="#" target="_blank"><img class="w-2/3 hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/X.png') }}" alt="X"></a>
                        <a href="#" target="_blank"><img class="w-2/3 hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/Gmail.png') }}" alt="Gmail"></a>
                    </div>
                </div>
                <div>
                    <p class="text-[18px] text-[#bc8c2d] font-bold my-4">Contacts</p>
                    <a href="mailto:competpianosafi@gmail.com"><p class="text-[18px] text-white hover:text-[#bc8c2d] mb-3">competpianosafi@gmail.com</p></a>
                    <a href="tel:+212612345789"><p class="text-[18px] text-white hover:text-[#bc8c2d] mb-3">+212 612345789</p></a>
                    <p class="text-[18px] text-[#bc8c2d] font-bold my-4">Lieus</p>
                    <a href="#map"><p class="text-[18px] text-white hover:text-[#bc8c2d] mb-3">Rue Ibnou Badis, Safi, Morocco</p></a>
                    <p class="text-[18px] text-[#bc8c2d] font-bold my-4">Horaires</p>
                    <p class="text-[18px] text-white hover:text-[#bc8c2d] mb-3">Lundi – Samedi: 8h – 20h</p>
                    <p class="text-[18px] text-white hover:text-[#bc8c2d] mb-3">Dimanche: Fermé</p>
                </div>
                <div>
                    <p class="text-[18px] text-[#bc8c2d] font-bold mt-4 my-6">Les Pages</p>
                    <div class="grid grid-cols-2 grid-rows-1 gap-y-10">
                        <p><a href="{{ route('paris.presentation') }}" class="text-decoration-none text-[18px] text-white hover:text-[#bc8c2d]">Presentation</a></p>
                        <p><a href="{{ route('paris.galerie') }}" class="text-decoration-none text-[18px] text-white hover:text-[#bc8c2d]">Galerie</a></p>
                        <p><a href="{{ route('paris.edition_2025') }}" class="text-decoration-none text-[18px] text-white hover:text-[#bc8c2d]">Edition 2025</a></p>
                        <p><a href="{{ route('paris.inscription') }}" class="text-decoration-none text-[18px] text-white hover:text-[#bc8c2d]">Inscription</a></p>
                        <p><a href="{{ route('paris.jury') }}" class="text-decoration-none text-[18px] text-white hover:text-[#bc8c2d]">Jury</a></p>
                        <p><a href="{{ route('paris.comite_honneur') }}" class="text-decoration-none text-[18px] text-white hover:text-[#bc8c2d]">Comite d’Honneur</a></p>
                        <p><a href="{{ route('paris.laureats') }}" class="text-decoration-none text-[18px] text-white hover:text-[#bc8c2d]">Laureats</a></p>
                        <p><a href="{{ route('paris.contact') }}" class="text-decoration-none text-[18px] text-white hover:text-[#bc8c2d]">Contactez-nous</a></p>
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
