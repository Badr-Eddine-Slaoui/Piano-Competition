@extends('Layouts.marrakech-container')

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
        <video class="w-[100vw] object-cover xs:h-[30vh] sm:h-[50vh] md:h-[60vh] lg:h-[80vh]" poster="{{ asset('Videos/Posters/HomeHeaderVideo.png') }}" src="{{ asset('Videos/HomeHeaderVideo.mp4') }}" muted autoplay loop></video>
    </main>
@endsection

@section('content')
    <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh]">
        <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
            <h2 class="font-[400] text-center text-gold capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Concours</h2>
        </div>
        <div class="w-5/6 m-auto min-h-[20vh] grid sm:grid-cols-2 sm:grid-rows-1 sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[65vh]">
            <div class="sm:flex sm:items-center sm:justify-center">
                <div class="xs:w-full xs:flex xs:justify-between sm:block sm:w-2/3">
                    <h1 class="font-extrabold capitalize mb-5 xs:w-1/2 xs:text-xs sm:w-2/3 sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl">Un voyage pianistique</h1>
                    <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">La 4ème édition<br> Du 1 Mai 2025<br> Au 4 Mai 2025</p>
                </div>
            </div>
            <div class="flex items-center justify-center xs:mt-5 sm:mt-0">
                <q class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
                    Imaginé comme une rencontre musicale, le Concours de Piano Mouvement Contraire se veut un trait d’union entre le patrimoine musical et la création contemporaine. Depuis 2012, des pianistes de tout âge sont de plus en plus nombreux à participer au concours et l’exigence du message relative les aide à progresser. Aujourd’hui grâce au soutien des partenaires et à l’adhésions des écoles professeurs et parents, Mouvement Contraire devient un concours international de premier plan.
                </q>
            </div>
        </div>
    </section>
    <section id="mot-de-la-presidente" class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh]">
      <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
          <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
          <h2 class="font-[400] text-center text-gold capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Les Mots</h2>
      </div>
      <div class="grid grid-cols-1 grid-rows-1 xs:gap-y-10 xs:min-h-[20vh] sm:gap-y-16 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] md:gap-y-32 lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14 lg:gap-y-40 xl:gap-y-52">
        <p class="text-[#a3a3a3] xs:mx-5 xs:text-[10px] sm:text-[12px] sm:mx-0 md:text-[14px] lg:text-[16px] xl:text-[18px]">
          Découvrez les messages inspirants de nos leaders : Lamia Boukaa, directrice du concours, nous encourage à vivre des émotions à travers la musique, tandis que Joshua LaFont-Cohen, directeur du concours, nous invite à une fête de notes et d’émotions. Rachida Dati, marraine du concours, adresse ses vœux de réussite et annonce l’édition suivante à Paris. Enfin, Racha Arodaky, présidente du jury, nous invite à partager cette belle aventure musicale avec passion et convivialité.
        </p>
        <div class="message relative xs:min-h-[40vh] xs:mb-10 md:mb-0 lg:min-h-[65vh]">
          <i class="fa-solid fa-quote-left absolute xs:text[30px] xs:-top-5 xs:left-2 sm:text-[35px] sm:-top-10 md:text-[40px] lg:text-[45px] xl:text-[60px] xl:-top-10 xl:left-0"></i>
          <i class="fa-solid fa-quote-right absolute xs:text[30px] xs:-bottom-0 xs:right-3 sm:text-[35px] sm:bottom-0 md:text-[40px] lg:text-[45px] xl:text-[60px] xl:-bottom-10 xl:right-0"></i>
          <div class="info-container w-4/5 m-auto flex mb-5">
                <img loading="lazy" class="rounded-full xs:me-5 xs:w-[10vh] xs:h-[10vh] md:w-[15vh] md:h-[15vh] lg:w-[20vh] lg:h-[20vh] xl:w-[30vh] xl:h-[30vh] xl:me-10" src="{{ asset('Images/Lamia-BOUKAA.webp') }}" alt="Lamia BOUKAA">
                <div class="infos flex items-center">
                  <div>
                    <p class="font-bold text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Lamia BOUKAA</p>
                    <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mot de la directrice du concours</p>
                    <p class="my-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mouvement Contraire - MAROC</p>
                  </div>
                </div>
            </div>
            <p class="w-4/5 m-auto font-bold mb-2 xs:mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:mt-10 lg:text-[16px] xl:text-[18px]">La musique nous réunira</p>
            <p class="description w-4/5 m-auto mb-10 text-justify text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Stimuler l’apprentissage autour d’un programme thématique, permettra à tous les pianistes d’exprimer leurs talents et leurs sensibilités ! De Bach à Schumann, de Liszt à Thomas Adès, les candidats nous feront vivre différentes émotions et leurs notes continueront de vibrer après leur passage. De Paris à Marrakech, la musique nous réunira et fera battre nos cœurs sur des notes et rythme . Êtes-vous prêt et prête pour le Concours International de Piano Mouvement Contraire édition 2024 ?
                A tous les inscrits au concours , Bonne chance à tous !</p>
        </div>
        <div class="message relative xs:min-h-[40vh] xs:mb-10 md:mb-0 lg:min-h-[65vh]">
          <i class="fa-solid fa-quote-left absolute xs:text[30px] xs:-top-5 xs:left-2 sm:text-[35px] sm:-top-10 md:text-[40px] lg:text-[45px] xl:text-[60px] xl:-top-10 xl:left-0"></i>
          <i class="fa-solid fa-quote-right absolute xs:text[30px] xs:-bottom-0 xs:right-3 sm:text-[35px] sm:bottom-0 md:text-[40px] lg:text-[45px] xl:text-[60px] xl:-bottom-10 xl:right-0"></i>
          <div class="info-container w-4/5 m-auto flex mb-5">
                <img loading="lazy" class="rounded-full xs:me-5 xs:w-[10vh] xs:h-[10vh] md:w-[15vh] md:h-[15vh] lg:w-[20vh] lg:h-[20vh] xl:w-[30vh] xl:h-[30vh] xl:me-10" src="{{ asset('Images/Joshu- LAFFONT-COHEN.webp') }}" alt="Joshua LAFFONT-COHEN">
                <div class="infos flex items-center">
                  <div>
                    <p class="font-bold text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Joshua LAFFONT-COHEN</p>
                    <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mot de le directeur du concours</p>
                    <p class="my-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mouvement Contraire - France</p>
                  </div>
                </div>
            </div>
            <p class="w-4/5 m-auto font-bold mb-2 xs:mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:mt-10 lg:text-[16px] xl:text-[18px]">Une fête de notes et d’émotions</p>
            <p class="description w-4/5 m-auto mb-10 text-justify text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">En tant que fondateur du concours mouvement contraire, je souhaite que tous les candidats de France et du Maroc s’unissent et frémissent le temps d’une fête de notes et d’émotions. Je rêve que chacun nous offre au piano sa version des morceaux, le reflet de son âme. Cherchez les notes susceptibles de s’aimer ! Jouez pour émouvoir, pour partager votre univers, dialoguer, aimer et être aimé ! Amusez-vous ! De la musique avant toute chose ?  Alors ensemble vibrons !</p>
        </div>
        <div class="message relative xs:min-h-[40vh] xs:mb-10 md:mb-0 lg:min-h-[65vh]">
          <i class="fa-solid fa-quote-left absolute xs:text[30px] xs:-top-5 xs:left-2 sm:text-[35px] sm:-top-10 md:text-[40px] lg:text-[45px] xl:text-[60px] xl:-top-10 xl:left-0"></i>
          <i class="fa-solid fa-quote-right absolute xs:text[30px] xs:-bottom-0 xs:right-3 sm:text-[35px] sm:bottom-0 md:text-[40px] lg:text-[45px] xl:text-[60px] xl:-bottom-10 xl:right-0"></i>
          <div class="info-container w-4/5 m-auto flex mb-5">
                <img loading="lazy" class="rounded-full xs:me-5 xs:w-[10vh] xs:h-[10vh] md:w-[15vh] md:h-[15vh] lg:w-[20vh] lg:h-[20vh] xl:w-[30vh] xl:h-[30vh] xl:me-10" src="{{ asset('Images/Rachida-Dati.webp') }}" alt="Rachida Dati">
                <div class="infos flex items-center">
                  <div>
                    <p class="font-bold text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Rachida Dati</p>
                    <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mot de la marraine du concours</p>
                </div>
              </div>
            </div>
            <p class="description w-4/5 m-auto mb-10 text-justify text-gray-400 xs:mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:mt-10 lg:text-[16px] xl:text-[18px]">Je suis très honorée d’être la marraine cette année du Concours international de piano « Mouvement contraire ». Je souhaite bonne chance à toute la jeunesse marocaine et à toute la jeunesse française dans le cadre de ce concours. Je suis également très honorée de vous annoncer que la prochaine édition de ce concours international se tiendra à la mairie du 7 ème arrondissement, à Paris l’année prochaine , et je vous accueillerais personnellement.
                Bon courage à tous.</p>
        </div>
        <div class="message relative xs:min-h-[40vh] xs:mb-10 md:mb-0 lg:min-h-[65vh]">
          <i class="fa-solid fa-quote-left absolute xs:text[30px] xs:-top-5 xs:left-2 sm:text-[35px] sm:-top-10 md:text-[40px] lg:text-[45px] xl:text-[60px] xl:-top-10 xl:left-0"></i>
          <i class="fa-solid fa-quote-right absolute xs:text[30px] xs:-bottom-0 xs:right-3 sm:text-[35px] sm:bottom-0 md:text-[40px] lg:text-[45px] xl:text-[60px] xl:-bottom-10 xl:right-0"></i>
          <div class="info-container w-4/5 m-auto flex mb-5">
                <img loading="lazy" class="rounded-full xs:me-5 xs:w-[10vh] xs:h-[10vh] md:w-[15vh] md:h-[15vh] lg:w-[20vh] lg:h-[20vh] xl:w-[30vh] xl:h-[30vh] xl:me-10" src="{{ asset('Images/Racha-Arodaky.webp') }}" alt="Racha ARODAKY">
                <div class="infos flex items-center">
                  <div>
                    <p class="font-bold text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Racha ARODAKY</p>
                    <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mot de la présidente du jury</p>
                </div>
              </div>
            </div>
            <p class="w-4/5 m-auto font-bold mb-2 xs:mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:mt-10 lg:text-[16px] xl:text-[18px]">Partage & convivialité</p>
            <p class="description w-4/5 m-auto mb-10 text-justify text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Chers amis,
                J’ai eu l’honneur et le grand plaisir de présider la première édition du Concours International de piano de Marrakech en 2023. L’expérience a été riche de rencontres de découvertes et le succès nous a encouragé pour réitérer l’aventure avec vous pour mai 2024.
                Je suis très heureuse et enthousiaste de découvrir à nouveau des pianistes talentueux marocains et internationaux.
                Le concours offrira aux candidats sélectionnés de nouveaux prix et force de son succès se passera dans le cadre magique du centre culturel de Meydene.
                Je vous invite à nous rejoindre les 9, 10 et 11 mai 2024 avec Joshua Laurens, Louis Dugué et Lamia Boukaa, artistes internationaux et éminents pédagogues pour ces journées de découvertes musicales. Soyez prêts à vous laisser emporter par la magie de la musique et tout cela dans le partage et la convivialité.
                Je remercie nos sponsors pour leur engagement dans cette nouvelle aventure et espère vous retrouver aussi nombreux et enthousiastes que l’année dernière.
                Bon concours à tous !</p>
        </div>
      </div>
    </section>
    <section id="partenaires" class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh]">
        <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
            <h2 class="font-[400] text-center text-gold capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Nos Partenaires</h2>
        </div>
        <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
          <p class="text-[#a3a3a3] xs:text-[10px] xs:mb-5 sm:mb-20 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
            Nous sommes fiers de collaborer avec nos partenaires précieux qui rendent possible le Concours International de Piano Mouvement Contraire. Grâce à Poly Plumes, Meydene, M Avenue et Re 'Belle Communication, cet événement prend vie dans un esprit de collaboration et de soutien. Leur engagement contribue à offrir une expérience exceptionnelle à tous les participants et à faire de cette compétition un moment unique.
          </p>
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
        "name": "Concours International Du Piano Marrakech",
        "description": "",
        "url": "{{ url()->current() }}",
        "logo": "{{ asset('Images/MarrakechIcon.webp') }}",
        "image": "{{ asset('Images/PosterMarrakech.webp') }}",
        "telephone": "",
        "sameAs": [
            "",
            "",
        ]
        }
    </script>
@endsection
