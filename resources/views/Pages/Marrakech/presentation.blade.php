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
  <section id="association-culturers-sans-frontieres" class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
    <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
        <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
        <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Association culture sans frontieres</h2>
    </div>
    <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
        <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
            <img loading="lazy" class="w-full h-full object-cover" src="{{ asset('Images/Association-Culture-Sans-Frontieres.jpg') }}" alt="Association Culture Sans Frontieres">
        </div>
        <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">L’association est une organisation non gouvernementale, apolitique et independante de toute considération a caractère syndical confessionnel ou idéologique. C’est une association culturelle et artistique a but non lucratif. Elle a été crée pour une duréé illimité.Son siège est situé « 6,Résidence Oussama ,Route de Targa.Camp EL Ghoul-40000.MARRAKECH », ce siége peut etre transféré en vertu d’une délibération du comité conseil.Confermement aux dispositions du Dahir 1-58-376 du 15 novembre tel qu’il été modifié et complété par la loi 75.00 promulgée par le Dahir du 23 juillet 2002 .il a été decidé entre membres fondateurs de créer cette association autonomme regroupant principalement des professionnels de la musique , l’art et la culture ainsi que toute personne qui y adhére dans le cadre des objectifs.
            L’organisateur n’est pas responsable des dommages corporels ou matériels survenant dans le cadre des manifestations du concours.
        </p>
        <p class="font-semibold text-stone-50 my-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Les objectifs de l’association </p>
        <ul class="text-[#a3a3a3] ps-10 list-disc xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
          <li>Favoriser le développement culturel et artistique en valorisant les compétences dans ces domaines.</li>
          <li>Sensibiliser les citoyens à l’importance de la musique, de l’art et de la culture dans leur quotidien.</li>
          <li>Améliorer la qualité des événements et manifestations culturelles et artistiques au Maroc.</li>
          <li>Encourager l’épanouissement des arts en offrant une expérience enrichissante, tant sur le plan professionnel que pédagogique.</li>
          <li>Rayonner la culture et la création artistique aux niveaux municipal, national et international.</li>
          <li>Faciliter l’accès aux activités culturelles et artistiques pour les populations défavorisées.</li>
        </ul>
        <p class="font-semibold text-stone-50 my-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Les membres de l’association </p>
        <ul class="text-gold ps-10 list-decimal xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
          <li>
            <ul class="text-[#a3a3a3] list-disc xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
              <p class="font-[500] text-gold my-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Membres Actifs :</p>
              <li class="ms-10">Personnes participant aux activités associatives et respectant les conditions d'adhésion (demande écrite, respect des statuts, cotisation annuelle, etc.).</li>
              <li class="ms-10">Ont le droit de vote lors de l'assemblée générale.</li>
              <li class="ms-10">Peuvent se présenter aux élections du Bureau Exécutif sous certaines conditions (3 ans d’ancienneté et participation régulière).</li>
            </ul>
          </li>
          <li>
            <ul class="text-[#a3a3a3]  list-disc xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
              <p class="font-[500] text-gold my-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Membres d’Honneur :</p>
              <li class="ms-10">Désignés par le Comité Conseil pour services importants rendus à l’association.</li>
              <li class="ms-10">Pas d’obligation de payer une cotisation.</li>
              <li class="ms-10">Peuvent assister aux réunions sur invitation mais n’ont pas le droit de vote.</li>
            </ul>
          </li>
          <li>
            <ul class="text-[#a3a3a3] list-disc xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
              <p class="font-[500] text-gold my-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Membres Bienfaiteurs :</p>
              <li class="ms-10">Contribuent à l’association par des dons importants en nature ou en numéraire.</li>
              <li class="ms-10">Peuvent participer à l’assemblée générale sans payer de cotisation.</li>
            </ul>
          </li>
          <li>
            <ul class="text-[#a3a3a3] list-disc xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
              <p class="font-[500] text-gold my-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Membres fondateurs :</p>
              <li class="ms-10">Participent au développement et la notoriété de l’association et apportent leur savoir faire dans les différentes activités.</li>
              <li class="ms-10">Ils siègent dans un comité de concertation appelé comité conseil qui veille à préserver l’orientation de l’association et y disposent d’un droit de vote ayant chacun une voix délibérative.</li>
            </ul>
          </li>
        </ul>
    </div>
  </section>
  <section id="infos-pratiques" class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
    <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
        <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
        <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Presentation du concours</h2>
    </div>
    <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
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
    <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
        <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
        <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Objectifs</h2>
    </div>
    <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
        <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
            <img loading="lazy" class="w-full h-full object-cover object-top" src="{{ asset('Images/Galerie Piano/galerie-20.png') }}" alt="Objectifs">
        </div>
        <ul class="ps-5 list-disc text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
          <li>Stimuler l’apprentissage  et permettre à tous les pianistes d’exprimer leurs talents et leurs sensibilités</li>
          <li>Révéler et promouvoir des personnalités musicales d’intérêt, de favoriser les échanges entre candidats, formateurs et pianistes membres du jury, dans un esprit bienveillant et constructif. </li>
          <li>C’est aussi une rencontre avec le public et une expérience pour les jeunes pianistes au contact d’autres écoles de piano</li>
        </ul>
    </div>
  </section>
  <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
      <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
          <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
          <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Fiche technique du concours</h2>
      </div>
      <div class="w-5/6 min-h-[65vh] m-auto xs:flex xs:flex-col-reverse md:grid md:grid-cols-2 md:grid-rows-1">
          <div class="flex items-center justify-center">
              <div class="w-2/3">
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Nom:</span> Mouvement Contraire</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Genre:</span> Concours International de Piano</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Thème:</span> Vibrations</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Portée:</span> Internationale</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Lieu:</span> Marrakech, Maroc (Meydene- M Avenue)</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Durée - Date:</span> 4 jours - (du 1 au 4 mai 2025)</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Organisateur:</span> Association Cultures sans frontières - Mouvement contraire - Maroc</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Partenaires institutionnels:</span> Ministère de la jeunesse, de la Culture et de la Communication, Maroc - Conseil de la Région Marrakech Safi - Mairie du 7è arrondissement de Paris</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Partenaires:</span> Poly plumes - Meydene - M Avenue - Re ‘ Belle communication</p>
                  <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Sponsors:</span> Audi - Kenzi Menara Palace - Mifa Musique - Yamaha</p>
              </div>
          </div>
          <div class="h-full flex justify-center items-center xs:mb-5 md:mb-0">
              <img loading="lazy" src="{{ asset('Images/PosterMarrakech.webp') }}" alt="PosterMarrakech">
          </div>
      </div>
  </section>
    {{-- <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
        <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
            <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Notre Histoire</h2>
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
            <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
            <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Nos Edition</h2>
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
