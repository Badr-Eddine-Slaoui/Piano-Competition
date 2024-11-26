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

@section('title', 'Edition 2025')

@section('resources')
    @vite(['resources/css/app.css', 'resources/js/carousel.js', 'resources/js/app.js'])
@endsection

@section('hero')
  <main id="carousel" class="w-full xs:h-[30vh] sm:h-[50vh] md:h-[60vh] xl:h-[65vh] relative overflow-x-hidden">
      <div id="carousel-track" class="w-full h-full flex ">
          <img loading="lazy" class="w-full h-full flex-shrink-0" src="{{ asset('Images/home-header-img.webp') }}">
          <img loading="lazy" class="w-full h-full flex-shrink-0" src="{{ asset('Images/Re-Belle-Communication.webp') }}">
      </div>
  </main>
@endsection

@section('content')
  <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
      <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
          <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
          <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Les composantes du concours</h2>
      </div>
      <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
          <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
              <img loading="lazy" class="w-full h-full" src="{{ asset('Images/ConditionDeParticipation.webp') }}" alt="EventBanner">
          </div>
          <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d]">Compétition:</span> Éliminatoires - Finale - Cérémonie de clôture - Masterclass</p>
          <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d]">Expositions:</span> Histoire du piano</p>
          <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d]">L’Afte:</span> Cérémonie de réception en l’honneur des partenaires</p>
      </div>
  </section>
  <section class="w-full mt-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
      <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
          <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
          <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Programme</h2>
      </div>
      <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
          <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
              <img loading="lazy" class="w-full h-full" src="{{ asset('Images/ConditionDeParticipation.webp') }}" alt="EventBanner">
          </div>
          <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
              Le concours est ouvert à tous les pianistes ayant atteint l’âge de 18 ans au 23 Octobre 2023, date de début du concours.
              Avoir 6 ans révolus et
              N’ont pas encore atteint l’âge de 19 ans.
          </p>
          <div class="my-20 sm:grid sm:grid-rows-1 sm:grid-cols-2 sm:gap-10">
              <div class="xs:mb-10 sm:mb-0">
                  <img loading="lazy" src="{{ asset('Images/programme finale.webp') }}" alt="Programme">
              </div>
              <div class="flex items-center justify-center">
                  <img loading="lazy" src="{{ asset('Images/programme-finale2.webp') }}" alt="Programme">
              </div>
          </div>
      </div>
  </section>
  <section class="sm:w-5/6 xs:mx-5 sm:ms-auto sm:me-8 lg:w-5/6 lg:ms-auto lg:me-14 sm:mt-5 md:mt-10 lg:mt-15 xl:mt-20">
      <button class="block mx-auto text-center bg-orange-600 rounded-xl xs:py-1 xs:px-3 xs:-mt-14 xs:text-[10px] sm:py-2 sm:px-4 sm:text-[12px] md:py-3 md:px-5 md:text-[14px] lg:text-[16px] xl:text-[18px]"><a class="text-decoration-none" href="" download="">Telecharger Programme</a></button>
  </section>
  <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] overflow-x-hidden">
    <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
        <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
        <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Les classes</h2>
    </div>
    <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:w-5/6 lg:ms-auto lg:me-14">
        <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
            <img loading="lazy" class="w-full h-full" src="{{ asset('Images/ConditionDeParticipation.webp') }}" alt="EventBanner">
        </div>
        <ul class="ps-5 list-disc text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
          <li>Initiation</li>
          <li>Débutant 1</li>
          <li>Débutant 2</li>
          <li>Préparatoire 1</li>
          <li>Préparatoire 2</li>
          <li>Élémentaire 1</li>
          <li>Élémentaire 2</li>
          <li>Moyen 1</li>
          <li>Moyen 2</li>
          <li>Supérieur 1</li>
          <li>Supérieur 2</li>
          <li>Excellence 1</li>
          <li>Virtuosité 2</li>
          <li>Diplôme de Concert</li>
        </ul>
    </div>
  </section>
  <section class="sm:w-5/6 xs:mx-5 sm:ms-auto sm:me-8 lg:w-5/6 lg:ms-auto lg:me-14 sm:mt-5 md:mt-10 lg:mt-15 xl:mt-20">
    <button class="block mx-auto text-center bg-orange-600 rounded-xl xs:py-1 xs:px-3 xs:mt-10 xs:text-[10px] sm:py-2 sm:px-4 sm:mt-14 sm:text-[12px] md:py-3 md:px-5 md:mt-20 md:text-[14px] lg:text-[16px] xl:text-[18px]"><a class="text-decoration-none" href="{{ route('paris.inscription') }}">Inscrivez-vous</a></button>
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
