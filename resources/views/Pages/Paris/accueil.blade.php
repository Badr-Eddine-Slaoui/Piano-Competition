@extends('Layouts.paris-container')

@section('meta')
    <meta name="title" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title"content="">
    <meta property="og:description" content="">
    <meta name="twitter:title"content="">
    <meta name="twitter:description" content="">
@endsection

@section('title', 'Accueil')

@section('resources')
    @vite(['resources/css/app.css', 'resources/css/home.css', 'resources/js/app.js'])
@endsection

@section('hero')
    <main class="w-full xs:h-[30vh] sm:h-[50vh] md:h-[60vh] lg:h-[80vh]">
        <video class="w-[100vw] object-cover xs:h-[30vh] sm:h-[50vh] md:h-[60vh] lg:h-[80vh]" poster="{{ asset('Images/home-header-img.webp') }}" src="{{ asset('Videos/HomeHeaderVideo.mp4') }}" muted autoplay loop></video>
    </main>
@endsection

@section('content')
    <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh]">
        <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
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
            <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
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
            <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
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
@endsection

@section('json')
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Concours International Du Piano Paris",
        "description": "",
        "url": "{{ url()->current() }}",
        "logo": "{{ asset('Images/ParisIcon.webp') }}",
        "image": "{{ asset('Images/PosterParis.webp') }}",
        "telephone": "",
        "sameAs": [
            "",
            "",
        ]
        }
    </script>
@endsection
