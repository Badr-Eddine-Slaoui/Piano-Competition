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

@section('title', 'Presentation')

@section('resources')
    @vite(['resources/css/app.css', 'resources/js/carousel.js', 'resources/js/app.js'])
@endsection

@section('hero')
  <main id="carousel" class="w-full xs:h-[20vh] sm:h-[40vh] md:h-[50vh] xl:h-[65vh] relative overflow-x-hidden">
      <div id="carousel-track" class="w-full h-full flex ">
          <img loading="lazy" class="w-full h-full flex-shrink-0" src="{{ asset('Images/Sliade 1.png') }}">
          <img loading="lazy" class="w-full h-full flex-shrink-0" src="{{ asset('Images/Sliade 2.png') }}">
      </div>
  </main>
@endsection

@section('content')
  <section id="infos-pratiques" class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
    <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
        <div class="flex relative z-[-2] items-center mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
          <h2 class="font-[400] text-center text-[#bc8c2d] xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Presentation du concours</h2>
        </div>
        <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
            <img loading="lazy" class="w-full h-full object-cover object-right-top " src="{{ asset('Images/Galerie Piano/galerie-13.png') }}" alt="Presentation Du Concours">
        </div>
        <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
          Le Concours de Piano Mouvement Contraire est bien plus qu’une compétition – c’est une plateforme de rencontre entre l’héritage de la musique classique et les nouvelles tendances créatives. Depuis sa création, le concours n’a cessé d’attirer des talents passionnés, explorant des répertoires variés, du baroque au contemporain, avec un focus particulier sur l’innovation musicale.
          Le concours du piano mouvement contraire a eté fondé en 2012 dans le but de proumouvoir l’excellence pianistique et de rapprocher le patrimoine musical classique de la création contemporaine .ce concours se distingue par son ouverture a tous les âges et niveaux de pianistes, et par son jury exigeant qui aide les participants a progresser .Depuis sa création , il a évolué pour devenir un évenement de premier plan ,soutenu par des personnalités comme Rachida Dati ,maire du 7e arrondissement de Paris ,et Mounia directrice de l’Art Academy Marrakech .
        </p>
    </div>
  </section>
  <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
    <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
        <div class="flex relative z-[-2] items-center mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
          <h2 class="font-[400] text-center text-[#bc8c2d] xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Objectifs</h2>
        </div>
        <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
            <img loading="lazy" class="w-full h-full object-cover object-top" src="{{ asset('Images/Galerie Piano/galerie-21.png') }}" alt="Objectifs">
        </div>
        <ul class="ps-5 list-disc text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
          <li>Stimuler l’apprentissage  et permettre à tous les pianistes d’exprimer leurs talents et leurs sensibilités</li>
          <li>Révéler et promouvoir des personnalités musicales d’intérêt, de favoriser les échanges entre candidats, formateurs et pianistes membres du jury, dans un esprit bienveillant et constructif. </li>
          <li>C’est aussi une rencontre avec le public et une expérience pour les jeunes pianistes au contact d’autres écoles de piano</li>
        </ul>
    </div>
  </section>
  <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
      <div class="flex relative col-span-2 z-[-2] items-center mt-10 slide-text xs:h-[5vh] xs:ms-5 sm:h-[20vh] sm:ms-20 md:ms-24 lg:ms-28 xl:ms-52 2xl:ms-56">
        <div class="w-1/5 border-b-[4px] border-dotted xs:me-1 sm:me-5"></div>
        <h2 class="font-[400] text-center text-[#bc8c2d] xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Fiche technique du concours</h2>
      </div>
      <div class="w-5/6 min-h-[65vh] m-auto xs:flex xs:flex-col-reverse md:grid md:grid-cols-2 md:grid-rows-1">
          <div class="flex items-center justify-center">
              <div class="w-2/3">
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Nom:</span> Mouvement Contraire</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Genre:</span> Concours International de Piano</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Thème:</span> Vibrations</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Portée:</span> Internationale</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Lieu:</span> Paris, France</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Durée - Date:</span> Le 28 Juin</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Organisateur:</span> Association Cultures sans frontières - Mouvement contraire - Maroc</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Partenaires institutionnels:</span> Ministère de la jeunesse, de la Culture et de la Communication, Maroc - Conseil de la Région Marrakech Safi - Mairie du 7è arrondissement de Paris</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Partenaires:</span> Poly plumes - Meydene - M Avenue - Re ‘ Belle communication</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Sponsors:</span> Audi - Kenzi Menara Palace - Mifa Musique - Yamaha</p>
              </div>
          </div>
          <div class="h-full flex justify-center items-center xs:mb-5 md:mb-0">
              <img loading="lazy" src="{{ asset('Images/PosterParis.webp') }}" alt="PosterParis">
          </div>
      </div>
  </section>
    {{-- <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
        <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <h2 class="font-[400] text-center text-[#bc8c2d] xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Notre Histoire</h2>
        </div>
        <div class="w-5/6 m-auto min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[65vh]">
            <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
                <img loading="lazy" class="w-full h-full" src="{{ asset('Images/ConditionDeParticipation.webp') }}" alt="EventBanner">
            </div>
            <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
                Le concours est ouvert à tous les pianistes ayant atteint l’âge de 18 ans au 23 Octobre 2023, date de début du concours.
                Avoir 6 ans révolus et
                N’ont pas encore atteint l’âge de 19 ans.
                Sont exclus du concours les jeunes inscrits à plein temps dans des études de musique. Les jeunes étudiants sont admis. Les personnes ayant eu une relation d’enseignement permanente, publique ou privée, avec un membre du jury au cours des deux dernières années ne sont pas autorisées à participer.
                Le concours est public dans tous ses aspects. La collecte et le traitement de données personnelles sont obligatoires pour la planification et l’organisation du concours. L’organisateur assure le respect des dispositions correspondantes en matière de protection des données.
                Les enregistrements vidéo et audio privés ne sont pas autorisés pendant le concours. L’organisateur procédera à des enregistrements visuels et sonores dont chaque participant cède gratuitement les droits d’utilisation à l’organisateur. Les demandes d’honoraires sont irrecevables.
                L’organisateur n’est pas responsable des dommages corporels ou matériels survenant dans le cadre des manifestations du concours. Le concours est ouvert à tous les pianistes ayant atteint l’âge de 18 ans au 23 Octobre 2023, date de début du concours.
                Avoir 6 ans révolus et  La collecte et le traitement de données personnelles sont obligatoires pour la planification et l’organisation du concours. L’organisateur assure le respect des dispositions correspondantes en matière de protection des données.
                Les enregistrements vidéo et audio privés ne sont pas autorisés pendant le concours. L’organisateur procédera à des enregistrements visuels et sonores dont chaque participant cède gratuitement les droits d’utilisation à l’organisateur. Les demandes d’honoraires sont irrecevables.
                L’organisateur n’est pas responsable des dommages corporels ou matériels survenant dans le cadre des manifestations du concours.
            </p>
        </div>
    </section>
    <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
        <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <h2 class="font-[400] text-center text-[#bc8c2d] xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Nos Edition</h2>
        </div>
        <div class="w-5/6 m-auto min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[65vh]">
            <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
                <img loading="lazy" class="w-full h-full" src="{{ asset('Images/ConditionDeParticipation.webp') }}" alt="EventBanner">
            </div>
            <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
                Le concours est ouvert à tous les pianistes ayant atteint l’âge de 18 ans au 23 Octobre 2023, date de début du concours.
                Avoir 6 ans révolus et
                N’ont pas encore atteint l’âge de 19 ans.
            </p>
            <div class="xs:my-10 sm:my-14 sm:grid sm:grid-rows-1 sm:grid-cols-2 md:my-20">
                <div class="xs:mb-5 sm:mb-0">
                    <img loading="lazy" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                </div>
                <div class="flex items-center justify-center sm:ms-5 xl:ms-0">
                    <div class="w-full">
                        <h2 class="text-white font-extrabold mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Premier Edition: Titre Ici</h2>
                        <p class="w-full text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
                            Les enregistrements vidéo et audio privés ne sont pas autorisés pendant le concours. L’organisateur procédera à des enregistrements visuels et sonores dont chaque participant cède gratuitement les droits d’utilisation à l’organisateur. Les demandes d’honoraires sont irrecevables.
                            L’organisateur n’est pas responsable des dommages corporels ou matériels survenant dans le cadre des manifestations du concours.
                        </p>
                    </div>
                </div>
            </div>
            <div class="xs:my-10 sm:my-14 sm:grid sm:grid-rows-1 sm:grid-cols-2 md:my-20">
                <div class="xs:mb-5 sm:mb-0">
                    <img loading="lazy" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                </div>
                <div class="flex items-center justify-center sm:ms-5 xl:ms-0">
                    <div class="w-full">
                        <h2 class="text-white font-extrabold mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Premier Edition: Titre Ici</h2>
                        <p class="w-full text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
                            Les enregistrements vidéo et audio privés ne sont pas autorisés pendant le concours. L’organisateur procédera à des enregistrements visuels et sonores dont chaque participant cède gratuitement les droits d’utilisation à l’organisateur. Les demandes d’honoraires sont irrecevables.
                            L’organisateur n’est pas responsable des dommages corporels ou matériels survenant dans le cadre des manifestations du concours.
                        </p>
                    </div>
                </div>
            </div>
            <div class="xs:my-10 sm:my-14 sm:grid sm:grid-rows-1 sm:grid-cols-2 md:my-20">
                <div class="xs:mb-5 sm:mb-0">
                    <img loading="lazy" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                </div>
                <div class="flex items-center justify-center sm:ms-5 xl:ms-0">
                    <div class="w-full">
                        <h2 class="text-white font-extrabold mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Premier Edition: Titre Ici</h2>
                        <p class="w-full text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
                            Les enregistrements vidéo et audio privés ne sont pas autorisés pendant le concours. L’organisateur procédera à des enregistrements visuels et sonores dont chaque participant cède gratuitement les droits d’utilisation à l’organisateur. Les demandes d’honoraires sont irrecevables.
                            L’organisateur n’est pas responsable des dommages corporels ou matériels survenant dans le cadre des manifestations du concours.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
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
