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

@section('title', 'Reservation')

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
  <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh]">
      <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
          <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
          <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Reservation</h2>
      </div>
      <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
          <p class="text-[#a3a3a3] my-10 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
              Le concours est ouvert à tous les pianistes ayant atteint l’âge de 18 ans au 23 Octobre 2023, date de début du concours.
              Avoir 6 ans révolus et
          </p>
          <form class="w-full py-5 my-5" action="{{ route('paris.reservation.store') }}" method="post">
              @csrf
              <div class="mx-auto border border-gold rounded-3xl xs:w-11/12 xs:py-8 xs:px-5 md:py-16 md:px-10 lg:w-4/5 xl:w-3/5">
                  <div class="grid grid-cols-1 grid-rows-1 xs:gap-y-3 md:gap-10">
                      <div class="grid grid-cols-1 grid-rows-2 gap-4">
                          <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="nom_complet">Nom Complet: <span class=" text-red-600">*</span></label>
                          <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre nom" id="nom_complet" name="nom_complet" type="text" value="{{ old('nom_complet') }}">
                          @error('nom_complet')
                              <p class="text-red-600 mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                          @enderror
                      </div>
                      <div class="grid grid-cols-1 grid-rows-2 gap-4">
                          <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="email">Email: <span class=" text-red-600">*</span></label>
                          <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre email" id="email" name="email" type="email" value="{{ old('email') }}">
                          @error('email')
                              <p class="text-red-600 mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                          @enderror
                      </div>
                      <div class="grid grid-cols-1 grid-rows-2 gap-4">
                          <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="tel">Telephone: <span class=" text-red-600">*</span></label>
                          <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre telephone" id="tel" name="tel" type="tel" value="{{ old('tel') }}">
                          @error('tel')
                              <p class="text-red-600 mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                          @enderror
                      </div>
                      <div class="grid grid-cols-1 grid-rows-2 gap-4">
                        <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="billet">Nom Complet: <span class=" text-red-600">*</span></label>
                        <select class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" id="billet" name="billet" type="text" value="{{ old('billet') }}">
                          <option>--Choisissez votre billet--</option>
                        </select>
                        @error('billet')
                            <p class="text-red-600 mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                        @enderror
                      </div>
                  </div>
                  <input class="cursor-pointer bg-blue-400 rounded-md my-5 text-white xs:text-[10px] xs:py-2 xs:px-5 sm:py-3 sm:px-10 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" type="submit" value="Reserver">
              </div>
          </form>
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