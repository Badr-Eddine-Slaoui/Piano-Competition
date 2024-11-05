<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Galerie</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="text-white bg-[#231F20]">
        <header class="w-full">
            <nav class="w-full h-40 bg-HeaderBg grid bg-no-repeat bg-cover grid-cols-1 grid-rows-2">
                <ul class="w-1/6 mr-20 ml-auto mt-5 flex items-center justify-between text-white font-bold text-xl">
                    <li><a href="" class="text-decoration-none hover:border-b-4 border-orange-600">Paris</a></li>
                    <li><a href="" class="text-decoration-none hover:border-b-4 border-orange-600">Marrakesh</a></li>
                </ul>
                <ul class="w-1/2 mr-20 ml-auto mb-5 flex items-center justify-between text-white font-bold text-xl">
                    <li><a href="{{ route('home') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Accueil</a></li>
                    <li><a href="{{ route('presentation') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Presentation</a></li>
                    <li><a href="{{ route('galerie') }}" class="text-decoration-none border-b-4 border-orange-600">Galerie</a></li>
                    <li><a href="" class="text-decoration-none hover:border-b-4 border-orange-600">Edition 2025</a></li>
                    <li><a href="" class="text-decoration-none hover:border-b-4 border-orange-600">Contactez-nous</a></li>
                </ul>
            </nav>
        </header>
        <section class="w-5/6 max-h-screen my-5 m-auto">
                <h2 class="text-[26px] text-orange-600 font-extrabold text-center my-10">Galerie</h2>
                <p class="text-[22px]">
                    Le concours est ouvert à tous les pianistes ayant atteint l’âge de 18 ans au 23 Octobre 2023, date de début du concours. 
                    Avoir 6 ans révolus et 
                    N’ont pas encore atteint l’âge de 19 ans. 
                </p>
        </section>
        <section class="w-5/6 min-h-screen my-5 m-auto flex flex-col items-center justify-center">
            <h2 class="text-[26px] text-orange-600 font-extrabold text-center my-10">Photos</h2>
            <div>
                <div class="flex items-center justify-center">
                    <div class="me-5 flex items-center justify-end">
                        <div class="w-7 h-7 bg-gray-400 border border-black text-white rounded-full flex items-center justify-center cursor-pointer">&lt;</div>
                    </div>
                    <div>
                        <img src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="ms-5 flex items-center justify-start">
                        <div class="w-7 h-7 bg-gray-400 border border-black text-white rounded-full flex items-center justify-center cursor-pointer">&gt;</div>
                    </div>
                </div>
                <div class="pics-scroller w-[500px] m-auto flex my-4 overflow-x-scroll pb-1">
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                </div>
            </div>
        </section>
        <section class="w-5/6 min-h-screen my-5 m-auto flex flex-col items-center justify-center">
            <h2 class="text-[26px] text-orange-600 font-extrabold text-center my-10">Videos</h2>
            <div>
                <div class="flex items-center justify-center">
                    <div class="me-5 flex items-center justify-end">
                        <div class="w-7 h-7 bg-gray-400 border border-black text-white rounded-full flex items-center justify-center cursor-pointer">&lt;</div>
                    </div>
                    <div>
                        <img src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="ms-5 flex items-center justify-start">
                        <div class="w-7 h-7 bg-gray-400 border border-black text-white rounded-full flex items-center justify-center cursor-pointer">&gt;</div>
                    </div>
                </div>
                <div class="pics-scroller w-[500px] m-auto flex my-4 overflow-x-scroll pb-1">
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                    <div class="w-1/6 flex-shrink-0">
                        <img class="w-full" src="{{ asset('Images/Edition.png') }}" alt="Edition">
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full h-screen mt-5 m-auto grid grid-cols-2 grid-rows-1 ">
            <form class="w-3/4 mx-auto py-5" action="" method="post">
                @csrf
                <p class="text-5xl mb-8">Contactez-nous</p>
                <div class="grid grid-cols-1 grid-rows-1 gap-10">
                    <div class="grid grid-cols-1 grid-rows-2 gap-4">
                        <label class="text-[22px]" for="nom">Nom:</label>
                        <input class="focus:outline-0 px-4 py-1 rounded-md" id="nom" name="nom" type="text">
                    </div>
                    <div class="grid grid-cols-1 grid-rows-2 gap-4">
                        <label class="text-[22px]" for="email">Email:</label>
                        <input class="focus:outline-0 px-4 py-1 rounded-md" id="email" name="email" type="email">
                    </div>
                    <div class="grid grid-cols-1 grid-rows-1">
                        <label class="text-[22px] mb-4" for="message">Message</label>
                        <textarea class="focus:outline-0 px-4 py-1 rounded-md resize-none" name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <input class=" bg-blue-400 py-3 px-10 rounded-md my-5 text-white text-[22px]" type="submit" value="Envoyer">
            </form>
            <div class="flex items-center justify-center">
                <div class="w-4/5 mx-auto my-auto">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9539.909954918676!2d-9.236782905252008!3d32.2885398619593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sma!4v1730801757056!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <footer class="w-full min-h-80 border-t border-white bg-[#231F20]">
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
    </body>
</html>
