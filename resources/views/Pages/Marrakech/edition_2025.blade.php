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

@section('title', 'Edition 2025')

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
  <section id="composantes" class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
      <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
          <div class="flex relative z-[-2] items-center mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
            <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Les composantes du concours</h2>
          </div>
          <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
              <img loading="lazy" class="w-full h-full object-cover object-top" src="{{ asset("Images/Galerie Piano/galerie-7.png") }}" alt="Les Composantes">
          </div>
          <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d]">Compétition:</span> Éliminatoires - Finale - Cérémonie de clôture - Masterclass</p>
          <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d]">Expositions:</span> Histoire du piano</p>
          <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]"><span class="font-bold text-[#bc8c2d]">L’Afte:</span> Cérémonie de réception en l’honneur des partenaires</p>
      </div>
  </section>
  <section id="programme" class="w-full mt-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
      <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
          <div class="flex relative z-[-2] items-center mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
            <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Programme</h2>
          </div>
          <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
            Découvrez le programme passionnant du Concours International de Piano Mouvement Contraire 2024 ! Au fil de cette édition, nous vous offrirons une série de moments forts : la cérémonie d’ouverture, les concours de piano, le récital des lauréats, ainsi que la cérémonie de clôture. Vous pourrez également profiter des hommages, des street performances, d'un afterwork convivial et de l'exposition Un Storie du Piano. Un programme riche en émotions et en découvertes vous attend !
          </p>
          <p class="font-semibold text-stone-50 my-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Moments forts du concours</p>
          <ul class="text-[#a3a3a3] ps-10 list-disc xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
            <li>Cérémonie d’ouverture</li>
            <li>Concours de piano</li>
            <li>Récital des lauréats</li>
            <li>Cérémonie de clôture</li>
            <li>Hommages</li>
            <li>Street performance</li>
            <li>Afterwork</li>
            <li>Exposition "Histoire du Piano"</li>
          </ul>
      </div>
  </section>
  <section class="sm:w-5/6 xs:mx-5 xs:mt-20 sm:ms-auto sm:me-8 lg:w-5/6 lg:ms-auto lg:me-14 md:mt-32 lg:mt-0">
      <button class="block mx-auto text-center bg-orange-600 rounded-xl xs:py-1 xs:px-3 xs:-mt-14 xs:text-[10px] sm:py-2 sm:px-4 sm:text-[12px] md:py-3 md:px-5 md:text-[14px] lg:text-[16px] xl:text-[18px]"><a class="text-decoration-none" href="" download="">Telecharger Programme</a></button>
  </section>
  <section id="classe-categories" class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] overflow-x-hidden">
    <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:w-5/6 lg:ms-auto lg:me-14">
        <div class="flex relative z-[-2] items-center mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
          <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
          <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Les classes et categories</h2>
        </div>
        <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
            <img loading="lazy" class="w-full h-full object-cover object-top" src="{{ asset("Images/Galerie Piano/galerie-9.png") }}" alt="les Classes">
        </div>
        <div class="grid grid-cols-3 grid-rows-1">
          <ul class="ps-5 list-disc text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
            <p class="font-[500] text-gold my-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Débutant</p>
            <li>Initiation</li>
            <li>Débutant 1</li>
            <li>Débutant 2</li>
            <li>Préparatoire 1</li>
            <li>Préparatoire 2</li>
          </ul>
          <ul class="ps-5 list-disc text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
            <p class="font-[500] text-gold my-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Moyen</p>
            <li>Élémentaire 1</li>
            <li>Élémentaire 2</li>
            <li>Moyen 1</li>
            <li>Moyen 2</li>
          </ul>
          <ul class="ps-5 list-disc text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
            <p class="font-[500] text-gold my-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Supérieur</p>
            <li>Supérieur 1</li>
            <li>Supérieur 2</li>
            <li>Excellence</li>
            <li>Virtuosité</li>
            <li>Diplôme de Concert</li>
          </ul>
        </div>
    </div>
  </section>
  <section id="partitions" class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] overflow-x-hidden">
    <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:w-5/6 lg:ms-auto lg:me-14">
        <div class="flex relative z-[-2] items-center mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
          <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
          <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Partitions</h2>
        </div>
        <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
            <img loading="lazy" class="w-full h-full object-cover object-top" src="{{ asset("Images/Galerie Piano/galerie-8.png") }}" alt="Partitions">
        </div>
        <table class="table-auto w-full text-left text-sm text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
          <thead>
            <tr class="table-row">
              <th class="table-cell border px-4 py-2 text-gold text-center">Niveau</th>
              <th class="table-cell border px-4 py-2 text-gold text-center">Eliminatoire</th>
              <th class="table-cell border px-4 py-2 text-gold text-center">Finale</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-row">
              <td class="table-cell border font-semibold text-white xs:px-2 xs:py-1 md:px-4 md:py-2">Initiation</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Étude, Bella Bartok <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Nuage blanc, C. Fauchet</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Lapin blanc, B. Kirkby-Mason <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Le chant des bergers, Beatrice Quoniam <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Gouttes d’eau, C. Fauchet</td>
            </tr>
            <tr class="table-row">
              <td class="table-cell border font-semibold text-white xs:px-2 xs:py-1 md:px-4 md:py-2">Débutant 1</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Carillon, Méthode « Beau comme un piano » <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Berceuse, C. Fauchet</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Il neige !, Méthode « Beau comme un piano » <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Rhinocéros, Méthode « Beau comme un piano » <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Jolies flaques d’eau, C. Fauchet</td>
            </tr>
            <tr class="table-row">
              <td class="table-cell border font-semibold text-white xs:px-2 xs:py-1 md:px-4 md:py-2">Débutant 2</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Après le bal, A. Gretchaninoff <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Menuet, C. Fauchet</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">La danse du feu, Méthode « Beau comme un piano » <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Mikrokosmos n.40, B. Bartok <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Petite fleur, C. Fauchet</td>
            </tr>
            <tr class="table-row">
              <td class="table-cell border font-semibold text-white xs:px-2 xs:py-1 md:px-4 md:py-2">Préparatoire 1</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Sonate en do majeur, Scarlatti <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Fête des lutins, C. Fauchet</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Valse mélancolique, A. Goedike <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> La vieille chanson française, Tchaïkovski <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Escalade, C. Fauchet</td>
            </tr>
            <tr class="table-row">
              <td class="table-cell border font-semibold text-white xs:px-2 xs:py-1 md:px-4 md:py-2">Préparatoire 2</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Menuet, Magdalena Bach <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Bagatelle, C. Fauchet</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Chanson triste, Tchaikovsky <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Le petit nègre, Debussy <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Circus, C. Fauchet</td>
            </tr>
            <tr class="table-row">
              <td class="table-cell border font-semibold text-white xs:px-2 xs:py-1 md:px-4 md:py-2">Élémentaire 1</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Suite allemande, Haendel <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Sonatina, C. Fauchet</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Sur les près, la lune se promène, Prokofiev <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Valse de printemps, Chostakovitch <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Donald’s Rumba, C. Fauchet</td>
            </tr>
            <tr class="table-row">
              <td class="table-cell border font-semibold text-white xs:px-2 xs:py-1 md:px-4 md:py-2">Élémentaire 2</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Le soir, Hofman <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Nocturne, C. Fauchet</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Quatre pièces pour piano, n. 1, Liszt <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Valse en la mineur, Chopin <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Des rires éclatent dans la nuit, C. Fauchet</td>
            </tr>
            <tr class="table-row">
              <td class="table-cell border font-semibold text-white xs:px-2 xs:py-1 md:px-4 md:py-2">Moyen 1</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Capriccio, Scarlatti</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Prélude n.4, Scriabine <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Valse de l’adieu, Chopin</td>
            </tr>
            <tr class="table-row">
              <td class="table-cell border font-semibold text-white xs:px-2 xs:py-1 md:px-4 md:py-2">Moyen 2</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Danse espagnole, Édouard Lalo</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Allegretto D915, Schubert <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Nocturne n.1, Field</td>
            </tr>
            <tr class="table-row">
              <td class="table-cell border font-semibold text-white xs:px-2 xs:py-1 md:px-4 md:py-2">Supérieur 1</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Étude op. 20 n. 3, Friedrich Kalbrenner</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Nocturne en fa majeur, Chopin <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Adagio en sol majeur, Schubert</td>
            </tr>
            <tr class="table-row">
              <td class="table-cell border font-semibold text-white xs:px-2 xs:py-1 md:px-4 md:py-2">Supérieur 2</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Sonate en mi majeur K531, Scarlatti</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Romance, op.21 n.3, Clara Schumann <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Arabesque, Clara Schumann</td>
            </tr>
            <tr class="table-row">
              <td class="table-cell border font-semibold text-white xs:px-2 xs:py-1 md:px-4 md:py-2">Excellence</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Concerto italien, 1er mouvement, Bach</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Ballade, op.118 n.3, Brahms <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> Polonaise héroïque, Chopin</td>
            </tr>
            <tr class="table-row">
              <td class="table-cell border font-semibold text-white xs:px-2 xs:py-1 md:px-4 md:py-2">Virtuosité</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">1 prélude et fugue de Bach parmi les BWV 848, 874, 890 <span class="block text-center text-red-600 font-[500] md:py-2"> OU </span> 2 sonates de Scarlatti à jouer ensemble K208/K209</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Sonate fantaisie en do mineur, 1er mouvement, Mozart <br> ou Sonate en la majeur, Schubert <span class="block text-center text-red-600 font-[500] md:py-2"> ET </span> Black bird, Dutilleux <br> ou Barcarolle n.4, Fauré</td>
            </tr>
            <tr class="table-row">
              <td class="table-cell border font-semibold text-white xs:px-2 xs:py-1 md:px-4 md:py-2">Diplôme de concert</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">Suite française au choix parmi les 6</td>
              <td class="table-cell border xs:px-2 xs:py-1 md:px-4 md:py-2 text-center">1 étude au choix parmi : Chopin (sauf op.10 n.3, 6 et op.25 n.7) <br> Scriabine dans les opus 8 (sauf n.8) <br> Rachmaninoff op.39 (sauf n.2) <br> Stravinsky (étude pour piano) <span class="block text-center text-red-600 font-[500] md:py-2"> ET </span> 1 sonate au choix parmi : <br> Mozart <br> Haydn <br> Beethoven <span class="block text-center text-red-600 font-[500] md:py-2"> ET </span> 1 morceau moderne au choix parmi : <br> Masques, Debussy <br> Les jeux d’eau, Ravel <br> Prélude et fugue en mi mineur, Chostakovitch</td>
            </tr>
          </tbody>
        </table>
    </div>
  </section>
  <section id="recompenses" class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] overflow-x-hidden">
    <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:w-5/6 lg:ms-auto lg:me-14">
        <div class="flex relative z-[-2] items-center mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
          <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
          <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Récompenses</h2>
        </div>
        <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
            <img loading="lazy" class="w-full h-full object-cover object-center" src="{{ asset('Images/Galerie Piano/galerie-30.png') }}" alt="Récompenses">
        </div>
        <div class="grid grid-cols-3 grid-rows-1">
          <ul class="ps-5 list-disc text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
            <p class="font-[500] text-gold my-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Débutant</p>
            <li><span class="text-white font-semibold">Initiation:</span> 000 MAD</li>
            <li><span class="text-white font-semibold">Débutant 1:</span> 000 MAD</li>
            <li><span class="text-white font-semibold">Débutant 2:</span> 000 MAD</li>
            <li><span class="text-white font-semibold">Préparatoire 1:</span> 000 MAD</li>
            <li><span class="text-white font-semibold">Préparatoire 2:</span> 000 MAD</li>
          </ul>
          <ul class="ps-5 list-disc text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
            <p class="font-[500] text-gold my-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Moyen</p>
            <li><span class="text-white font-semibold">Élémentaire 1:</span> 000 MAD</li>
            <li><span class="text-white font-semibold">Élémentaire 2:</span> 000 MAD</li>
            <li><span class="text-white font-semibold">Moyen 1:</span> 000 MAD</li>
            <li><span class="text-white font-semibold">Moyen 2:</span> 000 MAD</li>
          </ul>
          <ul class="ps-5 list-disc text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
            <p class="font-[500] text-gold my-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Supérieur</p>
            <li><span class="text-white font-semibold">Supérieur 1:</span> 000 MAD</li>
            <li><span class="text-white font-semibold">Supérieur 2:</span> 000 MAD</li>
            <li><span class="text-white font-semibold">Excellence:</span> 000 MAD</li>
            <li><span class="text-white font-semibold">Virtuosité:</span> 000 MAD</li>
            <li><span class="text-white font-semibold">Diplôme de Concert:</span> 000 MAD</li>
          </ul>
        </div>
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
