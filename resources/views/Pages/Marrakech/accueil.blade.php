<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Marrakech - Accueil</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('Images/MarrakechIcon.webp') }}" type="image/x-icon">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/css/home.css', 'resources/js/app.js'])

    </head>
    <body class="text-white bg-[#231F20]">
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
                        <li><a href="{{ route('marrakech.home') }}" class="text-decoration-none xs:block xs:mb-5 xs:text-[#bc8c2d] sm:border-b-4 sm:border-[#bc8c2d] sm:mb-0 md:border-b-[3px] lg:border-b-4">Accueil</a></li>
                        <li><a href="{{ route('marrakech.presentation') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Presentation</a></li>
                        <li><a href="{{ route('marrakech.edition_2025') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Edition 2025</a></li>
                        <li><a href="{{ route('marrakech.jury') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Jury</a></li>
                        <li><a href="{{ route('marrakech.comite_honneur') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Comite d’Honneur</a></li>
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
        <main class="w-full xs:h-[30vh] sm:h-[50vh] md:h-[60vh] lg:h-[80vh]">
            <video class="w-[100vw] object-cover xs:h-[30vh] sm:h-[50vh] md:h-[60vh] lg:h-[80vh]" poster="{{ asset('Images/home-header-img.webp') }}" src="{{ asset('Videos/HomeHeaderVideo.mp4') }}" muted autoplay loop></video>
        </main>
        <aside class="fixed left-0 top-[25vh] w-1/12 z-[-1] xs:hidden sm:block">
            <img loading="lazy" class="w-full" src="{{ asset('Images/SideImg.webp')  }}" alt="SideImg">
        </aside>
        <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh]">
            <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Concours</h2>
            </div>
            <div class="w-5/6 m-auto min-h-[20vh] sm:grid sm:grid-cols-2 sm:grid-rows-1 sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[65vh]">
                <div class="sm:flex sm:items-center sm:justify-center">
                    <div class="xs:w-full xs:flex xs:justify-between sm:block sm:w-2/3">
                        <h1 class="font-extrabold mb-5 xs:w-1/2 xs:text-xs sm:w-2/3 sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl">Concours International de Piano</h1>
                        <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">La 3ème édition<br> Du 23 Octobre 2023<br> au 30 Octobre 2023</p>
                    </div>
                </div>
                <div class="flex items-center justify-center xs:mt-5 sm:mt-0">
                    <q class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
                        Imaginé comme une rencontre musicale, le Concours de Piano Mouvement Contraire se veut un trait d’union entre le patrimoine musical et la création contemporaine. Depuis 2012, des pianistes de tout âge sont de plus en plus nombreux à participer au concours et l’exigence du message les aide à progresser. Aujourd’hui grâce au soutien des partenaires et à l’adhésions des écoles professeurs et parents, Mouvement Contraire devient un concours international de premier plan.
                    </q>
                </div>
            </div>
        </section>
        <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh]">
            <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Les Mots</h2>
            </div>
            <div class="w-5/6 m-auto xs:min-h-[20vh] sm:min-h-[30vh] md:grid md:grid-cols-2 md:grid-rows-1 md:gap-x-4 md:gap-y-5 md:min-h-[40vh] lg:min-h-[65vh]">
                <div class="message xs:min-h-[40vh] xs:mb-10 md:mb-0 lg:min-h-[65vh] lg:opacity-60 lg:cursor-pointer lg:hover:opacity-100 lg:hover:-translate-y-3 lg:hover:scale-105 lg:transition-all lg:duration-500">
                    <div class="info-container grid grid-rows-1 grid-cols-2 mb-5">
                        <img loading="lazy" class="w-[90%] mx:h-[10vh] sm:h-[20vh]" src="{{ asset('Images/Rachida-Dati.webp') }}" alt="Rachida Dati">
                        <div class="infos">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Rachida Dati</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Marraine du concours</p>
                        </div>
                    </div>
                    <q class="description text-justify text-gray-400 xs:text-[9px] sm:text-[11px] md:text-[12px] lg:text-[13px] xl:text-[14px]">Je suis très honorée d’être la marraine cette année du Concours international de piano « Mouvement contraire ». Je souhaite bonne chance à toute la jeunesse marocaine et à toute la jeunesse française dans le cadre de ce concours. Je suis également très honorée de vous annoncer que la prochaine édition de ce concours international se tiendra à la mairie du 7 ème arrondissement, à Paris l’année prochaine , et je vous accueillerais personnellement.
                        Bon courage à tous.</q>
                </div>
                <div class="message xs:min-h-[40vh] xs:mb-10 md:mb-0 lg:min-h-[65vh] lg:opacity-60 lg:cursor-pointer lg:hover:opacity-100 lg:hover:-translate-y-3 lg:hover:scale-105 lg:transition-all lg:duration-500">
                    <div class="info-container grid grid-rows-1 grid-cols-2 mb-5">
                        <img loading="lazy" class="w-[90%] mx:h-[10vh] sm:h-[20vh]" src="{{ asset('Images/Lamia-BOUKAA.webp') }}" alt="Lamia BOUKAA">
                        <div class="infos">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Lamia BOUKAA</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mot de la directrice du Concours</p>
                            <p class="my-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mouvement Contraire - MAROC</p>
                        </div>
                    </div>
                    <p class="font-bold my-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">La musique nous réunira</p>
                    <q class="description text-justify text-gray-400 xs:text-[9px] sm:text-[11px] md:text-[12px] lg:text-[13px] xl:text-[14px]">Stimuler l’apprentissage autour d’un programme thématique, permettra à tous les pianistes d’exprimer leurs talents et leurs sensibilités ! De Bach à Schumann, de Liszt à Thomas Adès, les candidats nous feront vivre différentes émotions et leurs notes continueront de vibrer après leur passage. De Paris à Marrakech, la musique nous réunira et fera battre nos cœurs sur des notes et rythme . Êtes-vous prêt et prête pour le Concours International de Piano Mouvement Contraire édition 2024 ?
                        A tous les inscrits au concours , Bonne chance à tous !</q>
                </div>
                <div class="message xs:min-h-[40vh] xs:mb-10 md:mb-0 lg:min-h-[65vh] lg:opacity-60 lg:cursor-pointer lg:hover:opacity-100 lg:hover:-translate-y-3 lg:hover:scale-105 lg:transition-all lg:duration-500">
                    <div class="info-container grid grid-rows-1 grid-cols-2 mb-5">
                        <img loading="lazy" class="w-[90%] mx:h-[10vh] sm:h-[20vh]" src="{{ asset('Images/Joshu- LAFFONT-COHEN.webp') }}" alt="Joshua LAFFONT-COHEN">
                        <div class="infos">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Joshua LAFFONT-COHEN</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Directeur du Concours</p>
                            <p class="my-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mouvement Contraire - France</p>
                        </div>
                    </div>
                    <p class="font-bold my-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Une fête de notes et d’émotions</p>
                    <q class="description text-justify text-gray-400 xs:text-[9px] sm:text-[11px] md:text-[12px] lg:text-[13px] xl:text-[14px]">En tant que fondateur du concours mouvement contraire, je souhaite que tous les candidats de France et du Maroc s’unissent et frémissent le temps d’une fête de notes et d’émotions. Je rêve que chacun nous offre au piano sa version des morceaux, le reflet de son âme. Cherchez les notes susceptibles de s’aimer ! Jouez pour émouvoir, pour partager votre univers, dialoguer, aimer et être aimé ! Amusez-vous ! De la musique avant toute chose ?  Alors ensemble vibrons !</q>
                </div>
                <div class="message xs:min-h-[40vh] xs:mb-10 md:mb-0 lg:min-h-[65vh] lg:opacity-60 lg:cursor-pointer lg:hover:opacity-100 lg:hover:-translate-y-3 lg:hover:scale-105 lg:transition-all lg:duration-500">
                    <div class="info-container grid grid-rows-1 grid-cols-2 mb-5">
                        <img loading="lazy" class="w-[90%] mx:h-[10vh] sm:h-[20vh]" src="{{ asset('Images/Racha-Arodaky.webp') }}" alt="Racha ARODAKY">
                        <div class="infos">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Racha ARODAKY</p>
                            <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Présidente du Jury</p>
                        </div>
                    </div>
                    <p class="font-bold my-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Partage & convivialité</p>
                    <q class="description text-justify text-gray-400 xs:text-[9px] sm:text-[11px] md:text-[12px] lg:text-[13px] xl:text-[14px]">Chers amis,
                        J’ai eu l’honneur et le grand plaisir de présider la première édition du Concours International de piano de Marrakech en 2023. L’expérience a été riche de rencontres de découvertes et le succès nous a encouragé pour réitérer l’aventure avec vous pour mai 2024.
                        Je suis très heureuse et enthousiaste de découvrir à nouveau des pianistes talentueux marocains et internationaux.
                        Le concours offrira aux candidats sélectionnés de nouveaux prix et force de son succès se passera dans le cadre magique du centre culturel de Meydene.
                        Je vous invite à nous rejoindre les 9, 10 et 11 mai 2024 avec Joshua Laurens, Louis Dugué et Lamia Boukaa, artistes internationaux et éminents pédagogues pour ces journées de découvertes musicales. Soyez prêts à vous laisser emporter par la magie de la musique et tout cela dans le partage et la convivialité.
                        Je remercie nos sponsors pour leur engagement dans cette nouvelle aventure et espère vous retrouver aussi nombreux et enthousiastes que l’année dernière.
                        Bon concours à tous !</q>
                </div>
            </div>
        </section>
        <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh]">
            <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Nos Partenaires</h2>
            </div>
            <div class="w-5/6 m-auto min-h-[20vh] sm:min-h-[30vh]">
                <div class="partners-track overflow-x-hidden relative">
                    <div class="partners-list grid grid-cols-4 grid-rows-1 xs:w-[140%] sm:w-full h-full">
                        <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                            <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Poly-Plumes.webp') }}" alt="Poly plumes">
                            <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Poly Plumes</p>
                        </div>
                        <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                            <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Meydene.webp') }}" alt="Meydene">
                            <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Meydene</p>
                        </div>
                        <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                            <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/M-Avenue.webp') }}" alt="M Avenue">
                            <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">M Avenue</p>
                        </div>
                        <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                            <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Re-Belle-Communication.webp') }}" alt="Re ‘ Belle communication">
                            <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Re ‘ Belle communication</p>
                        </div>
                    </div>
                    <div class="partners-list grid grid-cols-4 grid-rows-1 absolute top-0 xs:w-[140%] xs:left-[140%] sm:left-[100%] sm:w-full h-full">
                        <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                            <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Poly-Plumes.webp') }}" alt="Poly plumes">
                            <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Poly Plumes</p>
                        </div>
                        <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                            <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Meydene.webp') }}" alt="Meydene">
                            <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Meydene</p>
                        </div>
                        <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                            <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/M-Avenue.webp') }}" alt="M Avenue">
                            <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">M Avenue</p>
                        </div>
                        <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                            <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Re-Belle-Communication.webp') }}" alt="Re ‘ Belle communication">
                            <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Re ‘ Belle communication</p>
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
