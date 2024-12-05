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

@section('title', 'Règlement')

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
    <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
        <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
          <div class="flex relative z-[-2] items-center mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <h2 class="font-[400] text-center text-[#bc8c2d] xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Règlement du concours</h2>
          </div>
          <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
              <img loading="lazy" class="w-full h-full object-cover object-top" src="{{ asset('Images/Galerie Piano/galerie-8.png') }}" alt="Règlement Du Concours Piano 2025">
          </div>
          <p class="text-[#a3a3a3] xs:text-[10px] xs:mb-5 sm:mb-20 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
            Avant de participer au Concours International de Piano Mouvement Contraire, il est essentiel de prendre connaissance du règlement. Ce document détaille toutes les conditions de participation, les catégories, les critères de sélection et les étapes de la compétition. En le lisant attentivement, vous vous assurez de vivre une expérience sereine et enrichissante, tout en respectant les règles qui garantissent l'équité et la transparence du concours.
          </p>
          <ul class="ps-5 list-disc text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
            <li><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Article 1</span> - Le Concours International de Piano Mouvement Contraire aura lieu les 1,2,3 et 4 mai 2025 à Marrakech et les 28 juin 2025 à Paris. Organisé par Mouvement Contraire, Association Cultures Sans Frontières il est ouvert aux pianistes de toutes nationalités, et il est sans limite d'âge.</li>
            <li><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Article 2</span> - La demi-finale et finale( appelées épreuves éliminatoires) concernent uniquement les classes supérieures, qui se dérouleront le même jour.</li>
            <li><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Article 3</span> - Le candidat peut s’inscrire dans plusieurs degrés à condition de remplir un bulletin d’inscription pour chaque degré.</li>
            <li><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Article 4</span> - Les œuvres doivent être exécutées sans reprise et se jouent de mémoire.</li>
            <li><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Article 5</span> - Le jury se réserve le droit d’interrompre le candidat en cours d’exécution. </li>
            <li><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Article 6</span> - Les décisions du jury sont sans appel.</li>
            <li><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Article 7</span> - Les résultats sont donnés à la fin du concours. </li>
            <li><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Article 8</span> - Les diplômes et prix sont remis à la fin du concours.</li>
            <li><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Article 9</span> - Le déroulement des épreuves est public et l’entrée est libre.</li>
            <li><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Article 10</span> - Toute inscription au concours implique l’acceptation du règlement et la présence du candidat au jour et à l’heure de la convocation. Le formulaire d'inscription et les documents requis doivent parvenir au Bureau du Président un mois avant la date définitive du concours. La convocation au Concours sera envoyée deux semaines avant le concours et mentionnera l'heure exacte de passage du candidat ; elle sert d'accusé de réception et permet l'accès à la salle.</li>
            <li><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Article 11</span> - Le droit d’inscription ne sera remboursé en aucun cas.</li>
            <li><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Article 12</span> - Échelle des récompenses : Les jurys peuvent décerner des Premiers Deuxièmes Prix, Troisième Prix. Ils ont en outre la possibilité d’attribuer un Prix d'honneur, un Prix du Jury ou un Prix d’interprétation. </li>
            <li><span class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Article 13</span> - Tout candidat autorise la direction de Mouvement Contraire à utiliser à titre gracieux les enregistrements audio et vidéo ainsi que les photographies recueillis lors du Concours.</li>
          </ul>
        </div>
    </section>
    <section class="sm:w-5/6 xs:mx-5 sm:ms-auto sm:me-8 lg:w-5/6 lg:ms-auto lg:me-14 sm:mt-5 md:mt-10 lg:mt-15 xl:mt-20">
      <button class="block mx-auto text-center bg-orange-600 rounded-xl xs:py-1 xs:px-3 xs:mt-10 xs:text-[10px] sm:py-2 sm:px-4 sm:mt-14 sm:text-[12px] md:py-3 md:px-5 md:mt-20 md:text-[14px] lg:text-[16px] xl:text-[18px]"><a class="text-decoration-none" href="{{ route('marrakech.inscription') }}">Inscrivez-vous</a></button>
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
