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

@section('title', 'Comité d’honneur')

@section('resources')
    @vite(['resources/css/app.css','resources/css/comite.css', 'resources/js/comite.js', 'resources/js/carousel.js', 'resources/js/app.js'])
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
      <div class="xs:min-h-[20vh] xs:mx-5 sm:flex sm:flex-wrap sm:justify-between sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
          <div class="flex relative w-full z-[-2] items-center  mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <h2 class="font-[400] text-center text-[#bc8c2d] xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Comité d’honneur</h2>
          </div>
          <p class="text-[#a3a3a3] xs:text-[10px] xs:mb-5 sm:mb-20 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
            Le comité d’honneur du Concours International de Piano Mouvement Contraire est composé de personnalités emblématiques du monde de l'art, de l'enseignement et de l'institution. Ces invités de renom, provenant de différents milieux, symbolisent l'excellence et la passion pour la culture et la musique. Leur participation reflète la renommée et la renommée internationale de cet événement, tout en soulignant l'importance de l'implication artistique et éducative dans la promotion de la musique classique et contemporaine. Ces personnalités, rassemblées par leur passion pour la musique, apportent leur soutien, leur expertise et leur inspiration au concours.
          </p>
          <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Mohamed-Mehdi-Bensaid.webp') }}" alt="Mohamed Mehdi Bensaid">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mohamed Mehdi Bensaid</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Ministre de la culture. Maroc</p>
                  </div>
              </div>
          </div>
          <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Samir-Goudar.webp') }}" alt="Samir Goudar">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Samir Goudar</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Président du conseil Régional de la région Marrakech- Safi. Maroc</p>
                  </div>
              </div>
          </div>
          <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Allal-Benjelloun.webp') }}" alt="Allal Benjelloun">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Allal Benjelloun</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">DG Centrale Automobile Cherifienne</p>
                  </div>
              </div>
          </div>
          <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Racha-Arodaky.webp') }}" alt="Racha Arodaky">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Racha Arodaky</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste, concertiste</p>
                  </div>
              </div>
          </div>
          <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Mounia-Dadi.webp') }}" alt="Mounia Dadi">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mounia Dadi</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Fondatrice de Art Academy, artiste</p>
                  </div>
              </div>
          </div>
          <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Laurence-Dale.webp') }}" alt="Laurence Dale">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Laurence Dale</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Chef d'orchestre, directeur artistique</p>
                  </div>
              </div>
          </div>
          <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Ricardo-Araujo.webp') }}" alt="Ricardo Araujo">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Ricardo Araujo</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Chef d'orchestre, compositeur, pianiste</p>
                  </div>
              </div>
          </div>
          <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Eric-Ferrer.webp') }}" alt="Eric Ferrer">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Eric Ferrer</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste, professeur au Conservatoire de Courbevoie</p>
                  </div>
              </div>
          </div>
          <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Yun-Yang-Lee.webp') }}" alt="Yun-Yang Lee">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Yun-Yang Lee</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste, premier prix du concours international Frédéric Chopin</p>
                  </div>
              </div>
          </div>
          <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Aimo-Pagin.webp') }}" alt="Aimo Pagin">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Aimo Pagin</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste, concertiste international</p>
                  </div>
              </div>
          </div>
          <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Eric-Artz.webp') }}" alt="Eric Artz">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Eric Artz</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste</p>
                  </div>
              </div>
          </div>
          <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/François-Meimoun.webp') }}" alt="François Meimoun">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">François Meimoun</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Compositeur</p>
                  </div>
              </div>
          </div>
          <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Olivier-Sandberg.webp') }}" alt="Olivier Sandberg">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Olivier Sandberg</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste</p>
                  </div>
              </div>
          </div>
          <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Jean-Frédéric-Neuburger.webp') }}" alt="Jean-Frédéric Neuburger">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Jean-Frédéric Neuburger</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste, professeur au CNSM de Paris</p>
                  </div>
              </div>
          </div>
          <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Michael-Nguyen.webp') }}" alt="Michael Nguyenr">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Michael Nguyenr</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste</p>
                  </div>
              </div>
          </div>
          <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Stéphanie-Elbaz.webp') }}" alt="Stéphanie Elbaz">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Stéphanie Elbaz</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste</p>
                  </div>
              </div>
          </div>
          <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/Jeremie-Honnore.webp') }}" alt="Jérémie Honnoré">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Jérémie Honnoré</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste chambriste, directeur artistique</p>
                  </div>
              </div>
          </div>
          <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/home-header-img.webp') }}" alt="Céline Eymard-Bianchi-Ferrari">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Céline Eymard-Bianchi-Ferrari</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Présidente de Poly Plumes</p>
                  </div>
              </div>
          </div>
          <div class="comite left xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/home-header-img.webp') }}" alt="Cécile Wang">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Cécile Wang</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste, concertiste au Royal College of Music of London</p>
                  </div>
              </div>
          </div>
          <div class="comite right xs:h-[20vh] xs:mb-5 sm:h-[30vh] sm:mb-20 sm:w-1/2">
              <div class="info-container flex">
                  <img loading="lazy" class="w-[40%] xs:h-[15vh] md:h-[20vh] xl:h-[25vh]" src="{{ asset('Images/home-header-img.webp') }}" alt="Pierrette Angelin">
                  <div class="infos w-[55%] ms-5 sm:me-2 xl:me-0">
                      <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pierrette Angelin</p>
                      <p class="text-gray-400 italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Professeur au Conservatoire de Toulouseo</p>
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
