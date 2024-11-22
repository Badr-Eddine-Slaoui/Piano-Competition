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
    <main id="carousel" class="w-full xs:h-[30vh] sm:h-[50vh] md:h-[60vh] lg:h-[80vh] relative overflow-x-hidden">
        <div id="carousel-track" class="w-full h-full flex ">
            <img loading="lazy" class="w-full h-full flex-shrink-0" src="{{ asset('Images/home-header-img.webp') }}">
            <img loading="lazy" class="w-full h-full flex-shrink-0" src="{{ asset('Images/Re-Belle-Communication.webp') }}">
        </div>
    </main>
@endsection

@section('content')
    <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
        <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <div class="h-[1px] w-1/5 bg-white me-5"></div>
            <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Galerie</h2>
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
        </div>
    </section>
    <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
        <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <div class="h-[1px] w-1/5 bg-white me-5"></div>
            <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Photos</h2>
        </div>
        <div class="w-4/5 min-h-[80vh] m-auto">
            <div class="galerie-pics grid grid-rows-1 gap-10 xs:grid-cols-2 sm:grid-cols-3">
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
                <div class="galerie-pic-container relative hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <img loading="lazy" class="galerie-pic w-full h-full" src="{{ asset('Images/Edition.webp') }}" alt="Edition">
                    <div class="pic-title absolute top-0 left-0 w-full h-full bg-black z-[1] flex justify-center items-center border border-white opacity-0 hover:opacity-[1]">
                        <p class="font-[400] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pic Title</p>
                    </div>
                </div>
            </div>
            <button id="show_more_pics" class="block mx-auto text-center bg-orange-600 my-20 xs:text-[10px] xs:py-1 xs:px-3 xs:rounded-sm sm:text-[12px] sm:py-2 sm:px-4 md:text-[14px] md:rounded-md md:py-3 md:px-5 lg:text-[16px] lg:rounded-xl xl:text-[18px]">Show More</button>
        </div>
    </section>
    <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
        <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <div class="h-[1px] w-1/5 bg-white me-5"></div>
            <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Videos</h2>
        </div>
        <div class="w-4/5 min-h-[80vh] m-auto">
            <div class="galerie-vids grid grid-rows-1 gap-10 xs:grid-cols-2 sm:grid-cols-3">
                <div class="galerie-vid-container hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <video class="galerie-vid h-full object-cover" loading="lazy" controls preload="none" poster="{{ asset('Images/Edition.webp') }}">
                        <source src="{{ asset('Videos/v1.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="galerie-vid-container hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <video class="galerie-vid h-full object-cover" loading="lazy" controls preload="none" poster="{{ asset('Images/Edition.webp') }}">
                        <source src="{{ asset('Videos/v2.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="galerie-vid-container hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <video class="galerie-vid h-full object-cover" loading="lazy" controls preload="none" poster="{{ asset('Images/Edition.webp') }}">
                        <source src="{{ asset('Videos/v3.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="galerie-vid-container hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <video class="galerie-vid h-full object-cover" loading="lazy" controls preload="none" poster="{{ asset('Images/Edition.webp') }}">
                        <source src="{{ asset('Videos/v1.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="galerie-vid-container hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <video class="galerie-vid h-full object-cover" loading="lazy" controls preload="none" poster="{{ asset('Images/Edition.webp') }}">
                        <source src="{{ asset('Videos/v2.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="galerie-vid-container hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <video class="galerie-vid h-full object-cover" loading="lazy" controls preload="none" poster="{{ asset('Images/Edition.webp') }}">
                        <source src="{{ asset('Videos/v3.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="galerie-vid-container hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <video class="galerie-vid h-full object-cover" loading="lazy" controls preload="none" poster="{{ asset('Images/Edition.webp') }}">
                        <source src="{{ asset('Videos/v1.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="galerie-vid-container hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <video class="galerie-vid h-full object-cover" loading="lazy" controls preload="none" poster="{{ asset('Images/Edition.webp') }}">
                        <source src="{{ asset('Videos/v2.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="galerie-vid-container hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <video class="galerie-vid h-full object-cover" loading="lazy" controls preload="none" poster="{{ asset('Images/Edition.webp') }}">
                        <source src="{{ asset('Videos/v3.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="galerie-vid-container hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <video class="galerie-vid h-full object-cover" loading="lazy" controls preload="none" poster="{{ asset('Images/Edition.webp') }}">
                        <source src="{{ asset('Videos/v1.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="galerie-vid-container hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <video class="galerie-vid h-full object-cover" loading="lazy" controls preload="none" poster="{{ asset('Images/Edition.webp') }}">
                        <source src="{{ asset('Videos/v2.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="galerie-vid-container hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <video class="galerie-vid h-full object-cover" loading="lazy" controls preload="none" poster="{{ asset('Images/Edition.webp') }}">
                        <source src="{{ asset('Videos/v3.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="galerie-vid-container hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <video class="galerie-vid h-full object-cover" loading="lazy" controls preload="none" poster="{{ asset('Images/Edition.webp') }}">
                        <source src="{{ asset('Videos/v1.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div class="galerie-vid-container hidden xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[35vh] xl:h-[50vh]">
                    <video class="galerie-vid h-full object-cover" loading="lazy" controls preload="none" poster="{{ asset('Images/Edition.webp') }}">
                        <source src="{{ asset('Videos/v2.mp4') }}" type="video/mp4">
                    </video>
                </div>
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
