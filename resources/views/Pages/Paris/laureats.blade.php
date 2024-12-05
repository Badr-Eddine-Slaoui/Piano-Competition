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

@section('title', 'Lauréats 2024')

@section('resources')
    @vite(['resources/css/app.css','resources/css/laureats.css', 'resources/js/laureats.js', 'resources/js/carousel.js', 'resources/js/app.js'])
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
  <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
      <div class="laureats min-h-screen mb-5 m-auto xs:w-4/6 sm:w-9/12 sm:grid sm:grid-cols-2 sm:grid-rows-1 sm:gap-x-1 sm:gap-y-10 md:gap-x-10 md:gap-y-20 xl:w-4/6">
        <div class="flex relative z-[-2] items-center mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
          <h2 class="font-[400] text-center text-[#bc8c2d] xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Les Laureats 2024</h2>
        </div>
        <div class="w-full my-10 col-span-2 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
          <img loading="lazy" class="w-full h-full object-cover object-top" src="{{ asset('Images/Galerie Piano/galerie-20.png') }}" alt="Objectifs">
        </div>
        <p class="text-[#a3a3a3] col-span-2 xs:text-[10px] xs:mb-5 sm:mb-20 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
          Découvrez les lauréats de l'édition 2024 du Concours International de Piano Mouvement Contraire, une célébration de talent, de passion et d'excellence musicale. Ces artistes prometteurs, récompensés dans diverses catégories allant de l'initiation à la virtuosité, incarnent l'esprit du concours et son engagement envers la promotion de la musique classique. Félicitations à tous nos lauréats pour leurs performances remarquables et leur dévouement à l'art pianistique!
        </p>
        <div class="left xs:mb-5 sm:mb-0">
              <p class="font-bold text-[#bc8c2d] mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Initiation:</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">1-</span> prix Mention très bien: El Bouanani Lina</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">2-</span> prix Mention très bien: Bouzoubaa Sara</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">3-</span> prix Mention très bien: Bennis Meryem</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">4-</span> prix Mention très bien: El Mouhtadi Jad</p>
          </div>
          <div class="right xs:mb-5 sm:mb-0">
              <p class="font-bold text-[#bc8c2d] mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Débutant 1:</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">1-</span> prix Mention très bien: Saher Lylia</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">2-</span> prix Mention très bien: Tazi Amine</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">3-</span> prix Mention très bien : Boutaleb Ali</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">4-</span> prix Mention très bien : Mikou Leyla</p>
          </div>
          <div class="left xs:mb-5 sm:mb-0">
              <p class="font-bold text-[#bc8c2d] mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Debutant2:</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">1-</span> prix Mention très bien : Mseffer Sophia</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">2-</span> prix Mention très bien:Zine Filali Chama</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">3-</span> prix Mention très bien: Hassoune Selman</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">4-</span> prix Mention très bien: Smires Lyna</p>
          </div>
          <div class="right xs:mb-5 sm:mb-0">
              <p class="font-bold text-[#bc8c2d] mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Préparatoire 1:</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">1-</span> prix Mention très bien: Hilal Chadi</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">2-</span> prix Mention très bien: Bennis-Belozerskaya Sofia</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">3-</span> prix Mention très bien: Jellali Ziyad</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">4-</span> prix Mention très bien: Kadiri Ghita</p>
          </div>
          <div class="left xs:mb-5 sm:mb-0">
              <p class="font-bold text-[#bc8c2d] mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Préparatoire 2 :</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">1-</span> prix Mention très bien: Tahiri Joutei Hassani Sophia</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">2-</span> prix Mention très bien: Dahab Kamil</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">3-</span> prix Mention très bien: Rhafiri Mayssane</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">4-</span> prix Mention très bien : Lahrichi Radia</p>
          </div>
          <div class="right xs:mb-5 sm:mb-0">
              <p class="font-bold text-[#bc8c2d] mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Élémentaire 1:</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">1-</span> prix Mention très bien: Guessous Mehdi</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">2-</span> prix Mention très bien: El Rhazi Kenza</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">3-</span> prix Mention très bien: Moumile Kenza</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">4-</span> prix Mention très bien ex aequo: sanhadji Sofia</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">4-</span> prix Mention très bien ex aequo: Abouzaid Lyn</p>
          </div>
          <div class="left xs:mb-5 sm:mb-0">
              <p class="font-bold text-[#bc8c2d] mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Élémentaire 2:</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">1-</span> prix Mention très bien: Hadni Layla</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">2-</span> prix Mention très bien: El Waradi Mohamed Sadik</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">3-</span> prix Mention bien: Lahlou Sofia</p>
          </div>
          <div class="right xs:mb-5 sm:mb-0">
              <p class="font-bold text-[#bc8c2d] mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Moyen1:</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">1-</span> prix Mention très bien: Tazi Zineb</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">2-</span> prix Mention très bien: El Waradi Mohamed Yazid</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">3-</span> prix Mention très bien: Houmy Ines</p>
          </div>
          <div class="left xs:mb-5 sm:mb-0">
              <p class="font-bold text-[#bc8c2d] mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Moyen2 :</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">1-</span> prix Mention très bien: Chami Dina</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">2-</span> prix Mention très bien: Nejjar Abdallah</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">3-</span> prix Mention très bien: Savoir Yassine</p>
          </div>
          <div class="right xs:mb-5 sm:mb-0">
              <p class="font-bold text-[#bc8c2d] mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Supérieur 1:</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Aucun prix</p>
          </div>
          <div class="left xs:mb-5 sm:mb-0">
              <p class="font-bold text-[#bc8c2d] mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Supérieur 2:</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Aucun prix</p>
          </div>
          <div class="right xs:mb-5 sm:mb-0">
              <p class="font-bold text-[#bc8c2d] mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Excellence 1:</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="text-white">1-</span> prix Mention très bien: Antoine Tomasi</p>
          </div>
          <div class="left xs:mb-5 sm:mb-0">
              <p class="font-bold text-[#bc8c2d] mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Virtuosité 2:</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Aucun prix</p>
          </div>
          <div class="right xs:mb-5 sm:mb-0">
              <p class="font-bold text-[#bc8c2d] mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Diplôme de Concert:</p>
              <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mention très bien: Sebti Ralia</p>
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
