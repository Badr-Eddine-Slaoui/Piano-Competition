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

@section('title', 'Jury')

@section('resources')
    @vite(['resources/css/app.css','resources/css/jury.css', 'resources/js/carousel.js', 'resources/js/app.js'])
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
        <div class="grid grid-cols-1 grid-rows-1 xs:gap-y-10 xs:min-h-[20vh] sm:gap-y-16 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] md:gap-y-32 lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14 lg:gap-y-40 xl:gap-y-52">
          <div class="flex relative z-[-2] items-center mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <div class="h-[1px] w-1/5 bg-white xs:me-1 sm:me-5"></div>
            <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Jury</h2>
          </div>
          <div class="message relative xs:min-h-[40vh] xs:mb-10 md:mb-0 lg:min-h-[65vh]">
            <div class="info-container w-4/5 m-auto flex mb-5">
                  <img loading="lazy" class="rounded-full xs:me-5 xs:w-[10vh] xs:h-[10vh] md:w-[15vh] md:h-[15vh] lg:w-[20vh] lg:h-[20vh] xl:w-[30vh] xl:h-[30vh] xl:me-10" src="{{ asset('Images/Racha-Arodaky.webp') }}" alt="Racha ARODAKY">
                  <div class="infos flex items-center">
                    <div>
                      <p class="font-bold text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Racha ARODAKY</p>
                      <p class="italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Présidente du Jury</p>
                      <p class="text-gray-400 my-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste - Compositeur . France</p>
                  </div>
                </div>
              </div>
              <p class="description w-4/5 m-auto mb-10 text-justify text-gray-400 xs:text-[10px] xs:mt-5 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Chevalier des Arts et des Lettres  en 2015
                Prix « Révélation classique » de l'ADAMI au MIDEM en 2001
                Premier Prix et le prix spécial du jury en trio au concours international de musique de chambre (Pologne en 1997)
                Etudes au Conservatoire national supérieur de musique et de danse de Paris dans la classe de Dominique Merlet.
                Prix de piano à seize ans puis continue sa formation au conservatoire Tchaïkovski de Moscou.
                Racha Arodaky mène une carrière internationale de concertiste. Elle a été invitée à jouer avec de nombreux orchestres, comme l'orchestre National de France, Belgrade,Moscou, Prague.
                Racha Arodaky est directrice artistique du festival de musique des Fêtes Musicales du Château de Pionsat et directrice générale du label de musique Air-Note.</p>
          </div>
          <div class="message relative xs:min-h-[40vh] xs:mb-10 md:mb-0 lg:min-h-[65vh]">
            <div class="info-container w-4/5 m-auto flex mb-5">
                  <img loading="lazy" class="rounded-full xs:me-5 xs:w-[10vh] xs:h-[10vh] md:w-[15vh] md:h-[15vh] lg:w-[20vh] lg:h-[20vh] xl:w-[30vh] xl:h-[30vh] xl:me-10" src="{{ asset('Images/Lamia-BOUKAA.webp') }}" alt="Lamia BOUKAA">
                  <div class="infos flex items-center">
                    <div>
                      <p class="font-bold text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Lamia BOUKAA</p>
                      <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste - Musicothérapeute. Maroc</p>
                    </div>
                  </div>
              </div>
              <p class="description w-4/5 m-auto mb-10 text-justify text-gray-400 xs:text-[10px] xs:mt-5 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Directrice du Concours Mouvement Contraire Maroc, professeur de piano au conservatoire de Casablanca , professeur de piano art académie , formation de coaching et membre de jury de concours nationaux. Lamia Boukaa a commencé le piano a l’âge de 5 ans auprès de Madame Milian, diplômée de Paris.
                Après son diplôme de piano au conservatoire de Casablanca, elle quitte le Maroc pour différentes formations  entre Paris et Nice , auprès de grands noms de la scène musicale française tel que Jacques Rouvier. En 1995, elle obtient le premier prix de conservatoire.
                Après cela, elle décide de se perfectionner tout en suivant une formation en Pédagogie d’enseignement, suite à cela elle ajoute une formation en coaching ainsi qu’en musicothérapie.</p>
          </div>
          <div class="message relative xs:min-h-[40vh] xs:mb-10 md:mb-0 lg:min-h-[65vh]">
            <div class="info-container w-4/5 m-auto flex mb-5">
                  <img loading="lazy" class="rounded-full xs:me-5 xs:w-[10vh] xs:h-[10vh] md:w-[15vh] md:h-[15vh] lg:w-[20vh] lg:h-[20vh] xl:w-[30vh] xl:h-[30vh] xl:me-10" src="{{ asset('Images/Joshu- LAFFONT-COHEN.webp') }}" alt="Joshua LAFFONT-COHEN">
                  <div class="infos flex items-center">
                    <div>
                      <p class="font-bold text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Joshua LAFFONT-COHEN</p>
                      <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste - Compositeur . France</p>
                    </div>
                  </div>
              </div>
              <p class="description w-4/5 m-auto mb-10 text-justify text-gray-400 xs:text-[10px] xs:mt-5 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Docteur ès lettres, professeur de français et de piano, écrivain, Joshua Laffont- Cohen reçoit en 2011 le prix littéraire André Ferran de l'Académie de Toulouse pour sa thèse sur George Sand et la musique et publie plusieurs ouvrages (roman, théâtre, poésie, essai). Comédien et auteur-compositeur- interprète connu sous le nom de Joshua Lawrence, il est aussi le créateur et le directeur du Concours International de Piano Mouvement Contraire (Paris, Marrakech).</p>
          </div>
          <div class="message relative xs:min-h-[40vh] xs:mb-10 md:mb-0 lg:min-h-[65vh]">
            <div class="info-container w-4/5 m-auto flex mb-5">
                  <img loading="lazy" class="rounded-full xs:me-5 xs:w-[10vh] xs:h-[10vh] md:w-[15vh] md:h-[15vh] lg:w-[20vh] lg:h-[20vh] xl:w-[30vh] xl:h-[30vh] xl:me-10" src="{{ asset('Images/Caroline-Fauchet.webp') }}" alt="Caroline Fauchet">
                  <div class="infos flex items-center">
                    <div>
                      <p class="font-bold text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Caroline Fauchet</p>
                      <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste. France</p>
                  </div>
                </div>
              </div>
              <p class="description w-4/5 m-auto mb-10 text-justify text-gray-400 xs:text-[10px] xs:mt-5 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Elle remporte de nombreux prix et récompenses, dont deux médailles d’or (piano et musique de chambre) à l’âge de 14 ans, le deuxième prix du Concours international de Sofia et le Prix d'interprétation Albert Roussel.
                En 2023 elle remporte le Diamond Prize du concours Royal Music Competition, le Platinum Prize  du Royal Sound music compétition, et le Grand Prize Winner des World classical music awards dans la catégorie « concerto », en interprérant le Concerto pour piano "Ariana" d'Yves Levêque, produit par Indésens Calliope Records.
                Diplômée d’Etat, professeur titulaire en conservatoire et directrice de Piano Academy, elle partage sa carrière entre les concerts, les enregistrements, l’enseignement (notamment dans des Universités aux USA et en Ecosse) et l’édition.</p>
          </div>
          <div class="message relative xs:min-h-[40vh] xs:mb-10 md:mb-0 lg:min-h-[65vh]">
            <div class="info-container w-4/5 m-auto flex mb-5">
                  <img loading="lazy" class="rounded-full xs:me-5 xs:w-[10vh] xs:h-[10vh] md:w-[15vh] md:h-[15vh] lg:w-[20vh] lg:h-[20vh] xl:w-[30vh] xl:h-[30vh] xl:me-10" src="{{ asset('Images/Louis-Dugué.jpg') }}" alt="Caroline Fauchet">
                  <div class="infos flex items-center">
                    <div>
                      <p class="font-bold text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Louis Dugué</p>
                      <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">COMPOSITEUR - MUSICOLOGUE. France</p>
                  </div>
                </div>
              </div>
              <p class="description w-4/5 m-auto mb-10 text-justify text-gray-400 xs:text-[10px] xs:mt-5 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Certificat d’études musicales au conservatoire de Courbevoie.
                Études de la musicologie et de l’histoire de l’art à La Sorbonne.
                Brevet de concert et Diplôme d’exécution à  l’École Normale de Musique de Paris.
                Passionné de composition, il suit des cours d’écriture de musique de films et d’orchestration avec Patrice Mestral.
                Il suit une formation à la direction d’orchestre avec Laurent Brack.
                Il se produit régulièrement dans diverses formations de musique de chambre ainsi qu’en soliste. Son répertoire s’étend de la musique baroque à la musique contemporaine, en passant par Debussy, son compositeur fétiche. Il travaille d’ailleurs actuellement à la création d’une pièce de théâtre sur la vie du compositeur.</p>
          </div>
          <div class="message relative xs:min-h-[40vh] xs:mb-10 md:mb-0 lg:min-h-[65vh]">
            <div class="info-container w-4/5 m-auto flex mb-5">
                  <img loading="lazy" class="rounded-full xs:me-5 xs:w-[10vh] xs:h-[10vh] md:w-[15vh] md:h-[15vh] lg:w-[20vh] lg:h-[20vh] xl:w-[30vh] xl:h-[30vh] xl:me-10" src="{{ asset('Images/Mounia-Dadi.webp') }}" alt="Caroline Fauchet">
                  <div class="infos flex items-center">
                    <div>
                      <p class="font-bold text-gold xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mounia Dadi</p>
                      <p class="italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Présence scénique</p>
                      <p class="text-gray-400 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">PEINTRE - CHORÉGRAPHE. Maroc</p>
                  </div>
                </div>
              </div>
              <p class="description w-4/5 m-auto mb-10 text-justify text-gray-400 xs:text-[10px] xs:mt-5 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mounia Dadi, passionnée d'art et de danse depuis son enfance, a débuté la danse à 5 ans à l'institut Paule Moreau et chez Vivian Pizzagalli, explorant le classique et le moderne jazz. Après des cours avec Cino Bradley Miller, elle déménage à New York pour obtenir un Bachelor of arts a Hofstra university tout en continuant a se former au Broadway Dance Center. Parallèlement, une de ces œuvres fait l’affiche au festival international du film africain et créole en 2006 à Montréal. Suite a cette reconnaissance , elle expose dans divers pays, avant de rentrer à Marrakech en 2006 et de fonder l'Art Academy en 2010, la première académie d'art pluridisciplinaire de la ville, réputée pour son dynamisme et son approche innovante de l'enseignement des arts de la scène et reconnu depuis 2015 par le conseil international de la danse reconnu par l’Unesco.</p>
          </div>
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
