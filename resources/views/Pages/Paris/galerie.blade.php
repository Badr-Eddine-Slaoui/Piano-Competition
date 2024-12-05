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

@section('title', 'Galerie')

@section('resources')
    @vite(['resources/css/app.css','resources/css/galerie.css', 'resources/js/galerie.js', 'resources/js/carousel.js', 'resources/js/app.js'])
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
        <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
            <div class="flex relative z-[-2] items-center mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
              <div class="w-1/5 border-b-[4px] border-dotted xs:me-1 sm:me-5"></div>
              <h2 class="font-[400] text-center text-[#bc8c2d] xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Galerie</h2>
            </div>
            <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
                <img loading="lazy" class="w-full h-full object-cover object-top" src="{{ asset('Images/Galerie Piano/galerie-28.png') }}" alt="Galerie">
            </div>
            <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
              La galerie du Concours International de Piano Mouvement Contraire vous offre l'opportunité de revivre les moments les plus marquants de cette manifestation. Découvrez les performances des artistes, l'atmosphère des répétitions et les moments d'émotion partagés à travers des photos, des vidéos et des souvenirs.
            </p>
        </div>
    </section>
    <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
        <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
            <div class="flex relative z-[-2] items-center mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
              <div class="w-1/5 border-b-[4px] border-dotted xs:me-1 sm:me-5"></div>
              <h2 class="font-[400] text-center text-[#bc8c2d] xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Photos</h2>
            </div>
            <div class="galerie-pics grid grid-rows-1 gap-10 xs:grid-cols-2 sm:grid-cols-3">
              @foreach ($pics as $src => $name)
                <div class="galerie-pic-container bg-black relative hidden overflow-hidden border border-gold items-center justify-center xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic object-contain" src="{{ asset("Images/Galerie Piano/".$src.".png") }}" alt="{{ $name }}">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-gold opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $name }}</p>
                    </div>
                </div>
              @endforeach
            </div>
            <button id="show_more_pics" class="block mx-auto text-center bg-orange-600 my-20 xs:text-[10px] xs:py-1 xs:px-3 xs:rounded-sm sm:text-[12px] sm:py-2 sm:px-4 md:text-[14px] md:rounded-md md:py-3 md:px-5 lg:text-[16px] lg:rounded-xl xl:text-[18px]">Show More</button>
        </div>
    </section>
    <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
        <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
          <div class="flex relative z-[-2] items-center mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <h2 class="font-[400] text-center text-[#bc8c2d] xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Videos</h2>
          </div>
          <div class="galerie-vids grid grid-rows-1 gap-10 xs:grid-cols-2 sm:grid-cols-3">
            @foreach ($videos as $video)
              <div class="galerie-vid-container bg-black relative hidden overflow-hidden border border-gold items-center justify-center xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                  <video class="galerie-vid object-contain max-h-full" loading="lazy" controls preload="none" poster="{{ asset("Videos/Posters/".$video.".jpg") }}">
                    <source src="{{ asset('Videos/'.$video.".mp4") }}" type="video/mp4">
                  </video>
              </div>
            @endforeach
          </div>
          <button id="show_more_vids" class="block mx-auto text-center bg-orange-600 my-20 xs:text-[10px] xs:py-1 xs:px-3 xs:rounded-sm sm:text-[12px] sm:py-2 sm:px-4 md:text-[14px] md:rounded-md md:py-3 md:px-5 lg:text-[16px] lg:rounded-xl xl:text-[18px]">Show More</button>
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
