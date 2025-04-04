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

@section('title', 'Partenaires')

@section('resources')
    @vite(['resources/css/app.css', 'resources/css/home.css', 'resources/js/app.js'])
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
  <section id="partenaires-officiels" class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh]">
    <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
      <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
        <h2 class="font-[400] font-Against text-center text-gold xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Nos Partenaires</h2>
      </div>
      <p class="text-[#a3a3a3] xs:text-[10px] xs:mb-5 sm:mb-20 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
        C’est grâce au soutien précieux et la générosité de nos partenaires que le concours du piano mouvement contraire  prend une vie dans un esprit  de collaboration et de l’engagement .Polyplumes,Meydene ,M avenue et Rebelle communication partagent notre vision d’une compétition qui regroupe l’excellence et la créativité . Grace à eux, chaque détail de cette compétition prend vie avec élégance et profondeur. Ensemble nous donnons vie a un événement unique pensé pour offrir une expérience inoubliable aux participants.
      </p>
      <div class="flex relative z-[-2] items-center my-6 slide-text xs:h-[5vh] sm:h-[20vh]">
        <h3 class="font-[400] font-Against text-center text-gold xs:text-[10px] sm:text-[18px] md:text-[22px] lg:text-[26px] xl:text-[30px]">Partenaires Officiels</h3>
      </div>
      <img src="{{ asset('Images/logo partenaires officels.png') }}" alt="logo partenaires officels">
    </div>
  </section>
  <section id="partenaires" class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh]">
    <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
      <div class="flex relative z-[-2] items-center my-6 slide-text xs:h-[5vh] sm:h-[20vh]">
        <h3 class="font-[400] font-Against text-center text-gold xs:text-[10px] sm:text-[18px] md:text-[22px] lg:text-[26px] xl:text-[30px]">Partenaires</h3>
      </div>
      <div class="partners-track overflow-x-hidden relative">
          <div class="partners-list grid grid-cols-9 grid-rows-1 xs:w-[280%] sm:w-[200%] h-full">
              <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                  <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/AUDI 1.png') }}" alt="Audi">
                  <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Audi</p>
              </div>
              <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                  <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Kenzi 2.png') }}" alt="Kenzi">
                  <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Kenzi</p>
              </div>
              <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                  <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Mifa 3.png') }}" alt="Mifa">
                  <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mifa</p>
              </div>
              <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                  <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Meydene 4.png') }}" alt="Meydene">
                  <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Meydene</p>
              </div>
              <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                  <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/M Avenue 5.png') }}" alt="M Avenue">
                  <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">M Avenue</p>
              </div>
              <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                  <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Rebelle com 6.png') }}" alt="Re ‘ Belle communication">
                  <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Re ‘ Belle communication</p>
              </div>
              <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                  <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Rebelle com 7.png') }}" alt="Art Academy">
                  <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Art Academy</p>
              </div>
              <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                  <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Poly plumes 8.png') }}" alt="Poly Plumes">
                  <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Poly Plumes</p>
              </div>
              <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                  <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Chauffeur privé 9.png') }}" alt="Chauffeur privé">
                  <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Chauffeur privé</p>
              </div>
          </div>
          <div class="partners-list grid grid-cols-9 grid-rows-1 absolute top-0 xs:w-[280%] xs:left-[280%] sm:left-[200%] sm:w-[200%] h-full">
            <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
              <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/AUDI 1.png') }}" alt="Audi">
              <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Audi</p>
            </div>
            <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Kenzi 2.png') }}" alt="Kenzi">
                <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Kenzi</p>
            </div>
            <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Mifa 3.png') }}" alt="Mifa">
                <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mifa</p>
            </div>
            <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Meydene 4.png') }}" alt="Meydene">
                <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Meydene</p>
            </div>
            <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/M Avenue 5.png') }}" alt="M Avenue">
                <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">M Avenue</p>
            </div>
            <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Rebelle com 6.png') }}" alt="Re ‘ Belle communication">
                <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Re ‘ Belle communication</p>
            </div>
            <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Rebelle com 7.png') }}" alt="Art Academy">
                <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Art Academy</p>
            </div>
            <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Poly plumes 8.png') }}" alt="Poly Plumes">
                <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Poly Plumes</p>
            </div>
            <div class="partner-item hover:translate-y-[-20px] hover:scale-105 cursor-pointer">
                <img loading="lazy" class="mt-5 m-auto xs:w-[15vw] sm:w-[10vw]" src="{{ asset('Images/Chauffeur privé 9.png') }}" alt="Chauffeur privé">
                <p class="text-center font-bold my-5 text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Chauffeur privé</p>
            </div>
          </div>
      </div>
    </div>
  </section>
  <section id="partenaires-videos" class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
    <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
      <div class="flex relative z-[-2] items-center mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
        <h2 class="font-[400] font-Against text-center text-[#bc8c2d] xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Partenaires Videos</h2>
      </div>
      <div class="galerie-vids grid grid-rows-1 gap-10 xs:grid-cols-2 sm:grid-cols-3">
        @for ($i=1; $i <= 3; $i++)
          <div class="galerie-vid-container bg-black relative overflow-hidden border border-gold items-center justify-center xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
              <video class="galerie-vid object-contain max-h-full" loading="lazy" controls preload="none" poster="{{ asset("Videos/Posters/galerie-".$i.".jpg") }}">
                <source src="{{ asset('Videos/galerie-'.$i.".mp4") }}" type="video/mp4">
              </video>
          </div>
        @endfor
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
