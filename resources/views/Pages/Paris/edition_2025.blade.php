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
            <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Objectifs</h2>
        </div>
        <div class="w-5/6 m-auto min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[65vh]">
            <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
                <img loading="lazy" class="w-full h-full" src="{{ asset('Images/ConditionDeParticipation.webp') }}" alt="EventBanner">
            </div>
            <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Stimuler l’apprentissage  et permettre à tous les pianistes d’exprimer leurs talents et leurs sensibilités,
                Révéler et promouvoir des personnalités musicales d’intérêt, de favoriser les échanges entre candidats, formateurs et pianistes membres du jury, dans un esprit bienveillant et constructif.
                C’est aussi une rencontre avec le public et une expérience pour les jeunes pianistes au contact d’autres écoles de piano
            </p>
        </div>
    </section>
    <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
        <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <div class="h-[1px] w-1/5 bg-white me-5"></div>
            <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Les composantes du concours</h2>
        </div>
        <div class="w-5/6 m-auto min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[65vh]">
            <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
                <img loading="lazy" class="w-full h-full" src="{{ asset('Images/ConditionDeParticipation.webp') }}" alt="EventBanner">
            </div>
            <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d]">Compétition:</span> Éliminatoires - Finale - Cérémonie de clôture - Masterclass</p>
            <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d]">Expositions:</span> Histoire du piano</p>
            <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d]">L’Afte:</span> Cérémonie de réception en l’honneur des partenaires</p>
        </div>
    </section>
    <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
        <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <div class="h-[1px] w-1/5 bg-white me-5"></div>
            <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Programme</h2>
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
    <section class="mb-20 sm:mt-5 md:mt-10 lg:mt-15 xl:mt-20">
        <button class="block mx-auto text-center py-3 px-5 bg-orange-600 rounded-xl xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><a class="text-decoration-none" href="{{ route('paris.inscription') }}">Inscrivez-vous</a></button>
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
