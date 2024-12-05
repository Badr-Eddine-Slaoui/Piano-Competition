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

@section('title', 'Inscription')

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
            <h2 class="font-[400] font-Against text-center text-[#bc8c2d] xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Condition de participation</h2>
          </div>
          <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
              <img loading="lazy" class="w-full h-full object-cover object-top" src="{{ asset('Images/Galerie Piano/galerie-36.png') }}" alt="Condition De Participation">
          </div>
          <p class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
              Le concours est ouvert à tous les pianistes ayant atteint l’âge de 18 ans au 1 Mai 2025, date de début du concours.
              Avoir 6 ans révolus et
              N’ont pas encore atteint l’âge de 19 ans.
              Sont exclus du concours les jeunes inscrits à plein temps dans des études de musique. Les jeunes étudiants sont admis. Les personnes ayant eu une relation d’enseignement permanente, publique ou privée, avec un membre du jury au cours des deux dernières années ne sont pas autorisées à participer.
              Le concours est public dans tous ses aspects. La collecte et le traitement de données personnelles sont obligatoires pour la planification et l’organisation du concours. L’organisateur assure le respect des dispositions correspondantes en matière de protection des données.
              Les enregistrements vidéo et audio privés ne sont pas autorisés pendant le concours. L’organisateur procédera à des enregistrements visuels et sonores dont chaque participant cède gratuitement les droits d’utilisation à l’organisateur. Les demandes d’honoraires sont irrecevables.
              L’organisateur n’est pas responsable des dommages corporels ou matériels survenant dans le cadre des manifestations du concours.
          </p>
      </div>
    </section>
    <section class="sm:w-5/6 xs:mx-5 sm:ms-auto sm:me-8 lg:w-5/6 lg:ms-auto lg:me-14 sm:mt-5 md:mt-10 lg:mt-15 xl:mt-20">
    <button class="block mx-auto text-center bg-orange-600 rounded-xl xs:py-1 xs:px-3 xs:mt-10 xs:text-[10px] sm:py-2 sm:px-4 sm:mt-14 sm:text-[12px] md:py-3 md:px-5 md:mt-20 md:text-[14px] lg:text-[16px] xl:text-[18px]"><a class="text-decoration-none" href="{{ route('marrakech.reglement') }}">Lire le règlement</a></button>
    </section>
    <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
      <div class="xs:min-h-[20vh] xs:mx-5 sm:min-h-[30vh] sm:w-5/6 sm:ms-auto sm:me-8 md:min-h-[40vh] lg:min-h-[65vh] lg:w-5/6 lg:ms-auto lg:me-14">
          <div class="flex relative z-[-2] items-center mt-10 slide-text xs:h-[5vh] sm:h-[20vh]">
            <h2 class="font-[400] font-Against text-center text-[#bc8c2d] xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Inscription</h2>
          </div>
          <div class="w-full my-10 xs:h-[15vh] sm:h-[20vh] md:h-[25vh] lg:h-[30vh] xl:h-[35vh]">
              <img loading="lazy" class="w-full h-full object-cover object-top" src="{{ asset('Images/Galerie Piano/galerie-33.png') }}" alt="Inscription">
          </div>
          <p class="text-[#a3a3a3] my-10 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
            Rejoignez le Concours International de Piano Mouvement Contraire et révélez votre talent sur une scène prestigieuse dédiée à l'excellence musicale. Que vous soyez amateur ou professionnel, cette compétition unique vous offre l'opportunité de partager votre passion, de vous mesurer à des pianistes du monde entier et de bénéficier de l’expertise d’un jury renommé. Inscrivez-vous dès maintenant pour vivre une expérience inoubliable, marquée par l'innovation, la créativité et l'amour de la musique.
          </p>
            <form class="w-full py-5 my-5" action="{{ route('paris.inscription.store') }}" method="post">
                @csrf
                <div class="mx-auto border border-gold xs:w-full xs:py-5 xs:px-3 xs:rounded-xl sm:w-11/12 sm:py-16 sm:px-10 sm:rounded-3xl xl:w-4/5">
                    <div class="grid grid-cols-1 grid-rows-1 gap-10">
                        <div class="grid grid-cols-2 grid-rows-1 gap-4">
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="nom">Nom:</label>
                                <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre nom" id="nom" name="nom" type="text" value="{{ old('nom') }}">
                            </div>
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="prenom">Prenom:</label>
                                <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre prenom" id="prenom" name="prenom" type="text" value="{{ old('prenom') }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 grid-rows-1 gap-4">
                            <div>
                                @error('nom')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                @error('prenom')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-3 grid-rows-1 gap-4">
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="date_naissance">Date de naissance:</label>
                                <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre date de naissance" id="date_naissance" name="date_naissance" type="date" value="{{ old('date_naissance') }}">
                            </div>
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="lieu_naissance">Lieu de naissance:</label>
                                <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre lieu de naissance" id="lieu_naissance" name="lieu_naissance" type="text" value="{{ old('lieu_naissance') }}">
                            </div>
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="nationalite">Nationalite:</label>
                                <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre nationalite" id="nationalite" name="nationalite" type="text" value="{{ old('nationalite') }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-3 grid-rows-1 gap-4">
                            <div>
                                @error('date_naissance')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                @error('lieu_naissance')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                @error('nationalite')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-2 grid-rows-1 gap-4">
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="type_document">Type de document:</label>
                                <select class="bg-slate-400 text-gray-800 focus:outline-0 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" id="type_document" name="type_document" value="{{ old('type_document') }}">
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="Passport" selected>Passport</option>
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="CIN">CIN</option>
                                </select>
                            </div>
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="numero_document">N° de Passeport ou CIN:</label>
                                <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre n° de passeport ou CIN" id="numero_document" name="numero_document" type="text" value="{{ old('numero_document') }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 grid-rows-1 gap-4">
                            <div>
                                @error('type_document')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                @error('numero_document')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-3 grid-rows-1 gap-4">
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="adresse">Adresse:</label>
                                <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre adresse" id="adresse" name="adresse" type="text" value="{{ old('adresse') }}">
                            </div>
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="code_postal">Code postal:</label>
                                <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre code postal" id="code_postal" name="code_postal" type="text" value="{{ old('code_postal') }}">
                            </div>
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="ville">Ville:</label>
                                <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre ville" id="ville" name="ville" type="text" value="{{ old('ville') }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-3 grid-rows-1 gap-4">
                            <div>
                                @error('adresse')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                @error('code_postal')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                @error('ville')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-2 grid-rows-1 gap-4">
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="tele">Numero du telephone:</label>
                                <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre numero du telephone" id="tele" name="tele" type="tel" value="{{ old('tele') }}">
                            </div>
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="incription_email">Email:</label>
                                <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre email" id="incription_email" name="incription_email" type="email" value="{{ old('incription_email') }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 grid-rows-1 gap-4">
                            <div>
                                @error('tele')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                @error('incription_email')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-3 grid-rows-1 gap-4">
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="langues_parlees">Langues Parlees:</label>
                                <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre langues parlees" id="langues_parlees" name="langues_parlees" type="text" value="{{ old('langues_parlees') }}">
                            </div>
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="nom_professeur">Nom du Professeur:</label>
                                <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre nom du professeur" id="nom_professeur" name="nom_professeur" type="text" value="{{ old('nom_professeur') }}">
                            </div>
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="etablissement_musical">L'etablissement musical:</label>
                                <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre etablissement musical" id="etablissement_musical" name="etablissement_musical" type="text" value="{{ old('etablissement_musical') }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-3 grid-rows-1 gap-4">
                            <div>
                                @error('langues_parlees')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                @error('nom_professeur')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                @error('etablissement_musical')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-2 grid-rows-1 gap-4">
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="categorie">Categorie:</label>
                                <select class="bg-slate-400 text-gray-800 focus:outline-0 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" id="categorie" name="categorie" value="{{ old('categorie') }}">
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">--Choisissez votre niveau--</option>
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="initiation">Initiation</option>
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="debutant-1">Débutant 1</option>
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="debutant-2">Débutant 2</option>
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="preparatoire-1">Préparatoire 1</option>
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="preparatoire-2">Préparatoire 2</option>
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="elementaire-1">Élémentaire 1</option>
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="elementaire-2">Élémentaire 2</option>
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="moyen-1">Moyen 1</option>
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="moyen-2">Moyen 2</option>
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="superieur-1">Supérieur 1</option>
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="superieur-2">Supérieur 2</option>
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="excellence">Excellence</option>
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="virtuosite">Virtuosité</option>
                                    <option class="xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" value="diplome-de-concert">Diplôme de Concert</option>
                                </select>
                            </div>
                            <div class="grid grid-cols-1 grid-rows-2 gap-4">
                                <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="oeuvre">Œuvre du choix:</label>
                                <input class="bg-slate-400 text-black focus:outline-0 placeholder:text-gray-800 px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre œuvre du choix" id="oeuvre" name="oeuvre" type="text" value="{{ old('oeuvre') }}">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 grid-rows-1 gap-4">
                            <div>
                                @error('categorie')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                @error('oeuvre')
                                    <p class="text-red-600 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <input class="cursor-pointer bg-blue-400 rounded-md text-white xs:text-[10px] xs:py-2 xs:px-5 xs:mt-2 sm:mt-10 sm:py-3 sm:px-10 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" type="submit" value="Inscrit">
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
