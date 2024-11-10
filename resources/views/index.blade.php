<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accueil</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/css/home.css', 'resources/js/app.js'])

    </head>
    <body class="text-white bg-[#231F20]">
        <header class="w-full h-[20vh]">
            <nav class="w-full h-[20vh] fixed top-0 left-0 z-10 bg-[#231F20] flex justify-between">
                <div class="w-1/6 flex justify-center items-center">
                    <a href="{{ route('home') }}"><img class="w-[90%] ms-auto" src="{{ asset('Images/Logo.png')  }}" alt="Logo"></a>
                </div>
                <div class="w-4/6 grid grid-cols-1 grid-rows-2 mr-12">
                    <ul class="w-1/6 ml-auto mt-5 flex items-center justify-between text-white font-bold text-xl">
                        <li><a href="{{ route('presentation_paris') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Paris</a></li>
                        <li><a href="{{ route('presentation_marrakech') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Marrakesh</a></li>
                    </ul>
                    <ul class="w-full ml-auto mb-5 flex items-center justify-between text-white font-bold text-xl">
                        <li><a href="{{ route('home') }}" class="text-decoration-none border-b-4 border-[#bc8c2d]">Accueil</a></li>
                        <li><a href="{{ route('presentation_marrakech') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Presentation</a></li>
                        <li><a href="{{ route('galerie') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Galerie</a></li>
                        <li><a href="{{ route('edition_2025_marrakech') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Edition 2025</a></li>
                        <li><a href="{{ route('inscription_marrakech') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Inscription</a></li>
                        <li><a href="{{ route('jury') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Jury</a></li>
                        <li><a href="{{ route('comite_honneur') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Comite d’Honneur</a></li>
                        <li><a href="{{ route('laureats') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Laureats</a></li>
                        <li><a href="{{ route('contact') }}" class="text-decoration-none hover:border-b-4 border-[#bc8c2d]">Contactez-nous</a></li>
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
        <section class="w-full min-h-screen my-5">
            <div class="flex h-[20vh] relative z-[-2] items-center my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center text-[#bc8c2d]">Concours</h2>
            </div>
            <div class="w-5/6 min-h-[65vh] m-auto grid grid-cols-2 grid-rows-1">
                <div class="flex h-3/4 items-center justify-center">
                    <div class="w-2/3">
                        <h1 class="text-5xl font-extrabold w-2/3 mb-5">Concours International de Piano</h1>
                        <p class="text-[22px] text-[#a3a3a3]">La 3ème édition<br> Du 23 Octobre 2023<br> au 30 Octobre 2023</p>
                    </div>
                </div>
                <div class="h-3/4">
                    <img src="{{ asset('Images/PosterGlobal.png') }}" alt="PosterGlobal">
                </div>
                <div class="col-span-2 w-3/5 mx-auto my-20">
                    <q class="text-gray-400 text-[20px]">
                        Imaginé comme une rencontre musicale, le Concours de Piano Mouvement Contraire se veut un trait d’union entre le patrimoine musical et la création contemporaine. Depuis 2012, des pianistes de tout âge sont de plus en plus nombreux à participer au concours et l’exigence du message les aide à progresser. Aujourd’hui grâce au soutien des partenaires et à l’adhésions des écoles professeurs et parents, Mouvement Contraire devient un concours international de premier plan.
                    </q>
                </div>
            </div>
        </section>
        <section class="w-full min-h-screen my-5">
            <div class="flex h-[20vh] relative z-[-2] items-center my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center text-[#bc8c2d]">Les Messages</h2>
            </div>
            <div class="w-4/5 min-h-screen mb-5 m-auto grid grid-cols-2 grid-rows-1 gap-10">
                <div class="message h-[65vh]">
                    <div class="info-container grid grid-rows-1 grid-cols-2 gap-x-5 mb-5">
                        <img class="w-[90%] h-[20vh]" src="{{ asset('Images/Rachida-Dati.jpg') }}" alt="Rachida Dati">
                        <div class="infos">
                            <p class="text-[26px] font-bold text-[#bc8c2d]">Rachida Dati</p>
                            <p class="text-[22px] text-gray-400 italic">Marraine du concours</p>
                        </div>
                    </div>
                    <q class="description text-justify text-gray-400">Je suis très honorée d’être la marraine cette année du Concours international de piano « Mouvement contraire ». Je souhaite bonne chance à toute la jeunesse marocaine et à toute la jeunesse française dans le cadre de ce concours. Je suis également très honorée de vous annoncer que la prochaine édition de ce concours international se tiendra à la mairie du 7 ème arrondissement, à Paris l’année prochaine , et je vous accueillerais personnellement.
                        Bon courage à tous.</q>
                </div>
                <div class="message h-[65vh]">
                    <div class="info-container grid grid-rows-1 grid-cols-2 gap-5  mb-5">
                        <img class="w-[90%] h-[20vh]" src="{{ asset('Images/Lamia-BOUKAA.png') }}" alt="Lamia BOUKAA">
                        <div class="infos">
                            <p class="text-[26px] font-bold text-[#bc8c2d]">Lamia BOUKAA</p>
                            <p class="text-[22px] text-gray-400 italic">Mot de la directrice du Concours</p>
                            <p class="text-[22px] my-3">Mouvement Contraire - MAROC</p>
                        </div>
                    </div>
                    <p class="text-[22px] font-bold my-3">La musique nous réunira</p>
                    <q class="description text-justify text-gray-400">Stimuler l’apprentissage autour d’un programme thématique, permettra à tous les pianistes d’exprimer leurs talents et leurs sensibilités ! De Bach à Schumann, de Liszt à Thomas Adès, les candidats nous feront vivre différentes émotions et leurs notes continueront de vibrer après leur passage. De Paris à Marrakech, la musique nous réunira et fera battre nos cœurs sur des notes et rythme . Êtes-vous prêt et prête pour le Concours International de Piano Mouvement Contraire édition 2024 ?
                        A tous les inscrits au concours , Bonne chance à tous !</q>
                </div>
                <div class="message h-[65vh]">
                    <div class="info-container grid grid-rows-1 grid-cols-2 gap-5  mb-5">
                        <img class="w-[90%] h-[20vh]" src="{{ asset('Images/Joshu- LAFFONT-COHEN.png') }}" alt="Joshua LAFFONT-COHEN">
                        <div class="infos">
                            <p class="text-[26px] font-bold text-[#bc8c2d]">Joshua LAFFONT-COHEN</p>
                            <p class="text-[22px] text-gray-400 italic">Directeur du Concours</p>
                            <p class="text-[22px] my-3">Mouvement Contraire - France</p>
                        </div>
                    </div>
                    <p class="text-[22px] font-bold my-3">Une fête de notes et d’émotions</p>
                    <q class="description text-justify text-gray-400">En tant que fondateur du concours mouvement contraire, je souhaite que tous les candidats de France et du Maroc s’unissent et frémissent le temps d’une fête de notes et d’émotions. Je rêve que chacun nous offre au piano sa version des morceaux, le reflet de son âme. Cherchez les notes susceptibles de s’aimer ! Jouez pour émouvoir, pour partager votre univers, dialoguer, aimer et être aimé ! Amusez-vous ! De la musique avant toute chose ?  Alors ensemble vibrons !</q>
                </div>
                <div class="message h-[65vh]">
                    <div class="info-container grid grid-rows-1 grid-cols-2 gap-5  mb-5">
                        <img class="w-[90%] h-[20vh]" src="{{ asset('Images/Racha-Arodaky.png') }}" alt="Racha ARODAKY">
                        <div class="infos">
                            <p class="text-[26px] font-bold text-[#bc8c2d]">Racha ARODAKY</p>
                            <p class="text-[22px] text-gray-400 italic">Rrésidente du Jury</p>
                        </div>
                    </div>
                    <p class="text-[22px] font-bold my-3">Partage & convivialité</p>
                    <q class="description text-justify text-gray-400">Chers amis,
                        J’ai eu l’honneur et le grand plaisir de présider la première édition du Concours International de piano de Marrakech en 2023. L’expérience a été riche de rencontres de découvertes et le succès nous a encouragé pour réitérer l’aventure avec vous pour mai 2024.
                        Je suis très heureuse et enthousiaste de découvrir à nouveau des pianistes talentueux marocains et internationaux.
                        Le concours offrira aux candidats sélectionnés de nouveaux prix et force de son succès se passera dans le cadre magique du centre culturel de Meydene.
                        Je vous invite à nous rejoindre les 9, 10 et 11 mai 2024 avec Joshua Laurens, Louis Dugué et Lamia Boukaa, artistes internationaux et éminents pédagogues pour ces journées de découvertes musicales. Soyez prêts à vous laisser emporter par la magie de la musique et tout cela dans le partage et la convivialité.
                        Je remercie nos sponsors pour leur engagement dans cette nouvelle aventure et espère vous retrouver aussi nombreux et enthousiastes que l’année dernière.
                        Bon concours à tous !</q>
                </div>
            </div>
        </section>
        <section class="w-full max-h-screen my-5">
            <div class="flex h-[20vh] relative z-[-2] items-center my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center text-[#bc8c2d]">Nos Partenaires</h2>
            </div>
            <div class="w-4/5 min-h-[30vh] m-auto">
                <div class="partners-track overflow-x-hidden relative">
                    <div class="partners-list grid grid-cols-4 grid-rows-1 w-full h-full">
                        <div class="partner-item hover:translate-y-[-20px]">
                            <img class="w-[10vw] mt-5 m-auto" src="{{ asset('Images/Poly-Plumes.png') }}" alt="Poly plumes">
                            <p class="text-center text-[20px] font-bold my-5 text-gray-400">Poly Plumes</p>
                        </div>
                        <div class="partner-item hover:translate-y-[-20px]">
                            <img class="w-[10vw] mt-5 m-auto" src="{{ asset('Images/Meydene.png') }}" alt="Meydene">
                            <p class="text-center text-[20px] font-bold my-5 text-gray-400">Meydene</p>
                        </div>
                        <div class="partner-item hover:translate-y-[-20px]">
                            <img class="w-[10vw] mt-5 m-auto" src="{{ asset('Images/M-Avenue.png') }}" alt="M Avenue">
                            <p class="text-center text-[20px] font-bold my-5 text-gray-400">M Avenue</p>
                        </div>
                        <div class="partner-item hover:translate-y-[-20px]">
                            <img class="w-[10vw] mt-5 m-auto" src="{{ asset('Images/Re-Belle-Communication.png') }}" alt="Re ‘ Belle communication">
                            <p class="text-center text-[20px] font-bold my-5 text-gray-400">Re ‘ Belle communication</p>
                        </div>
                    </div>
                    <div class="partners-list grid grid-cols-4 grid-rows-1 absolute left-[100%] top-0 w-full h-full">
                        <div class="partner-item hover:translate-y-[-20px]">
                            <img class="w-[10vw] mt-5 m-auto" src="{{ asset('Images/Poly-Plumes.png') }}" alt="Poly plumes">
                            <p class="text-center text-[20px] font-bold my-5 text-gray-400">Poly Plumes</p>
                        </div>
                        <div class="partner-item hover:translate-y-[-20px]">
                            <img class="w-[10vw] mt-5 m-auto" src="{{ asset('Images/Meydene.png') }}" alt="Meydene">
                            <p class="text-center text-[20px] font-bold my-5 text-gray-400">Meydene</p>
                        </div>
                        <div class="partner-item hover:translate-y-[-20px]">
                            <img class="w-[10vw] mt-5 m-auto" src="{{ asset('Images/M-Avenue.png') }}" alt="M Avenue">
                            <p class="text-center text-[20px] font-bold my-5 text-gray-400">M Avenue</p>
                        </div>
                        <div class="partner-item hover:translate-y-[-20px]">
                            <img class="w-[10vw] mt-5 m-auto" src="{{ asset('Images/Re-Belle-Communication.png') }}" alt="Re ‘ Belle communication">
                            <p class="text-center text-[20px] font-bold my-5 text-gray-400">Re ‘ Belle communication</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full min-h-screen mt-5 m-auto grid grid-cols-2 grid-rows-1 gap-x-10">
            <div class="flex h-[20vh] relative z-[-2] items-center col-span-2 my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center text-[#bc8c2d]">Contactez-nous</h2>
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
