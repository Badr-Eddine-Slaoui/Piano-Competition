<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edition Marrakech 2025</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="text-white bg-[#231F20]">
        <header class="w-full min-h-screen">
            <nav class="w-full h-[20vh] fixed top-0 left-0 z-10 bg-HeaderBg grid bg-no-repeat bg-cover grid-cols-1 grid-rows-2">
                <ul class="w-1/6 mr-12 ml-auto mt-5 flex items-center justify-between text-white font-bold text-xl">
                    <li><a href="{{ route('edition_2025_paris') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Paris</a></li>
                    <li><a href="{{ route('edition_2025_marrakech') }}" class="text-decoration-none border-b-4 border-orange-600">Marrakesh</a></li>
                </ul>
                <ul class="w-4/6 mr-12 ml-auto mb-5 flex items-center justify-between text-white font-bold text-xl">
                    <li><a href="{{ route('home') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Accueil</a></li>
                    <li><a href="{{ route('presentation_marrakech') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Presentation</a></li>
                    <li><a href="{{ route('galerie') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Galerie</a></li>
                    <li><a href="{{ route('edition_2025_marrakech') }}" class="text-decoration-none border-b-4 border-orange-600">Edition 2025</a></li>
                    <li><a href="{{ route('inscription_marrakech') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Inscription</a></li>
                    <li><a href="{{ route('jury') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Jury</a></li>
                    <li><a href="{{ route('comite_honneur') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Comite d’Honneur</a></li>
                    <li><a href="{{ route('laureats') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Laureats</a></li>
                    <li><a href="{{ route('contact') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Contactez-nous</a></li>
                </ul>
            </nav>
            <img class="w-full mt-[20vh] h-[80vh]" src="{{ asset('Images/home-header-img.png') }}">
        </header>
        <aside class=" fixed left-0 top-[25vh] w-1/12 z-[-1]">
            <img class="w-full" src="{{ asset('Images/SideImg.png')  }}" alt="SideImg">
        </aside>
        <section class="w-full min-h-screen my-5">
            <div class="flex h-[20vh] relative z-[-2] items-center my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center">Objectifs</h2>
            </div>
            <div class="w-4/5 min-h-[80vh] m-auto">
                <div class="w-full h-[35vh] my-10">
                    <img class="w-full h-full" src="{{ asset('Images/ConditionDeParticipation.png') }}" alt="EventBanner">
                </div>
                <p class="text-[#a3a3a3] text-[22px]">Stimuler l’apprentissage  et permettre à tous les pianistes d’exprimer leurs talents et leurs sensibilités,
                    Révéler et promouvoir des personnalités musicales d’intérêt, de favoriser les échanges entre candidats, formateurs et pianistes membres du jury, dans un esprit bienveillant et constructif.
                    C’est aussi une rencontre avec le public et une expérience pour les jeunes pianistes au contact d’autres écoles de piano
                </p>
            </div>
        </section>
        <section class="w-full min-h-screen my-5">
            <div class="flex h-[20vh] relative z-[-2] items-center my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center">Fiche technique du concours</h2>
            </div>
            <div class="w-4/5 min-h-[80vh] m-auto">
                <div class="w-full h-[35vh] my-10">
                    <img class="w-full h-full" src="{{ asset('Images/ConditionDeParticipation.png') }}" alt="EventBanner">
                </div>
                <p class="text-[#a3a3a3] text-[22px]"><span class="text-[24px] font-bold text-[#bc8c2d]">Nom:</span> Mouvement Contraire</p>
                <p class="text-[#a3a3a3] text-[22px]"><span class="text-[24px] font-bold text-[#bc8c2d]">Genre:</span> Concours International de Piano</p>
                <p class="text-[#a3a3a3] text-[22px]"><span class="text-[24px] font-bold text-[#bc8c2d]">Thème:</span> Vibrations</p>
                <p class="text-[#a3a3a3] text-[22px]"><span class="text-[24px] font-bold text-[#bc8c2d]">Portée:</span> Internationale</p>
                <p class="text-[#a3a3a3] text-[22px]"><span class="text-[24px] font-bold text-[#bc8c2d]">Lieu:</span> Marrakech, Maroc (Meydene- M Avenue)</p>
                <p class="text-[#a3a3a3] text-[22px]"><span class="text-[24px] font-bold text-[#bc8c2d]">Durée - Date:</span> 4 jours - (du 1 au 4 mai 2025)</p>
                <p class="text-[#a3a3a3] text-[22px]"><span class="text-[24px] font-bold text-[#bc8c2d]">Organisateur:</span> Association Cultures sans frontières - Mouvement contraire - Maroc</p>
                <p class="text-[#a3a3a3] text-[22px]"><span class="text-[24px] font-bold text-[#bc8c2d]">Partenaires institutionnels:</span> Ministère de la jeunesse, de la Culture et de la Communication, Maroc - Conseil de la Région Marrakech Safi - Mairie du 7è arrondissement de Paris</p>
                <p class="text-[#a3a3a3] text-[22px]"><span class="text-[24px] font-bold text-[#bc8c2d]">Partenaires:</span> Poly plumes - Meydene - M Avenue - Re ‘ Belle communication</p>
                <p class="text-[#a3a3a3] text-[22px]"><span class="text-[24px] font-bold text-[#bc8c2d]">Sponsors:</span> Audi - Kenzi Menara Palace - Mifa Musique - Yamaha</p>

            </div>
        </section>
        <section class="w-full min-h-screen my-5">
            <div class="flex h-[20vh] relative z-[-2] items-center my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center">Les composantes du concours</h2>
            </div>
            <div class="w-4/5 min-h-[80vh] m-auto">
                <div class="w-full h-[35vh] my-10">
                    <img class="w-full h-full" src="{{ asset('Images/ConditionDeParticipation.png') }}" alt="EventBanner">
                </div>
                <p class="text-[#a3a3a3] text-[22px]"><span class="text-[24px] font-bold text-[#bc8c2d]">Compétition:</span> Éliminatoires - Finale - Cérémonie de clôture - Masterclass</p>
                <p class="text-[#a3a3a3] text-[22px]"><span class="text-[24px] font-bold text-[#bc8c2d]">Expositions:</span> Histoire du piano</p>
                <p class="text-[#a3a3a3] text-[22px]"><span class="text-[24px] font-bold text-[#bc8c2d]">L’Afte:</span> Cérémonie de réception en l’honneur des partenaires</p>
            </div>
        </section>
        <section class="w-full min-h-screen my-5">
            <div class="flex h-[20vh] relative z-[-2] items-center my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center">Condition de participation</h2>
            </div>
            <div class="w-4/5 min-h-[80vh] m-auto">
                <div class="w-full h-[35vh] my-10">
                    <img class="w-full h-full" src="{{ asset('Images/ConditionDeParticipation.png') }}" alt="EventBanner">
                </div>
                <p class="text-[#a3a3a3] text-[22px]">
                    Le concours est ouvert à tous les pianistes ayant atteint l’âge de 18 ans au 23 Octobre 2023, date de début du concours.
                    Avoir 6 ans révolus et
                    N’ont pas encore atteint l’âge de 19 ans.
                    Sont exclus du concours les jeunes inscrits à plein temps dans des études de musique. Les jeunes étudiants sont admis. Les personnes ayant eu une relation d’enseignement permanente, publique ou privée, avec un membre du jury au cours des deux dernières années ne sont pas autorisées à participer.
                    Le concours est public dans tous ses aspects. La collecte et le traitement de données personnelles sont obligatoires pour la planification et l’organisation du concours. L’organisateur assure le respect des dispositions correspondantes en matière de protection des données.
                    Les enregistrements vidéo et audio privés ne sont pas autorisés pendant le concours. L’organisateur procédera à des enregistrements visuels et sonores dont chaque participant cède gratuitement les droits d’utilisation à l’organisateur. Les demandes d’honoraires sont irrecevables.
                    L’organisateur n’est pas responsable des dommages corporels ou matériels survenant dans le cadre des manifestations du concours.
                </p>
            </div>
        </section>
        <section class="w-full min-h-screen my-5">
            <div class="flex h-[20vh] relative z-[-2] items-center my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center ">Programme</h2>
            </div>
            <div class="w-4/5 min-h-[80vh] m-auto">
                <div class="w-full h-[35vh] my-10">
                    <img class="w-full h-full" src="{{ asset('Images/ConditionDeParticipation.png') }}" alt="EventBanner">
                </div>
                <p class="text-[#a3a3a3] text-[22px]">
                    Le concours est ouvert à tous les pianistes ayant atteint l’âge de 18 ans au 23 Octobre 2023, date de début du concours.
                    Avoir 6 ans révolus et
                    N’ont pas encore atteint l’âge de 19 ans.
                </p>
                <div class="grid grid-rows-1 grid-cols-2 my-20 gap-10">
                    <div>
                        <img src="{{ asset('Images/programme finale.jpg') }}" alt="Programme">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('Images/programme-finale2.jpg') }}" alt="Programme">
                    </div>
                </div>
            </div>
        </section>
        <section class="my-20">
            <button class="block mx-auto text-[22px] text-center py-3 px-5 bg-orange-600 rounded-xl"><a class="text-decoration-none" href="{{ route('inscription_marrakech') }}">Inscrivez-vous</a></button>
        </section>
        <section class="w-full min-h-screen mt-5 m-auto grid grid-cols-2 grid-rows-1 ">
            <div class="flex h-[20vh] relative z-[-2] items-center col-span-2 my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center">Contactez-nous</h2>
            </div>
            <form class="w-full py-5 mb-5" action="{{ route('contact.store') }}" method="post">
                @csrf
                <div class="w-3/5 mx-auto">
                    <div class="grid grid-cols-1 grid-rows-1 gap-10">
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[22px] text-[#a3a3a3]" for="nom">Nom:</label>
                            <input class="text-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 rounded-md" placeholder="Entrer votre nom" id="nom" name="nom" type="text" value="{{ old('nom') }}">
                            @error('nom')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[22px] text-[#a3a3a3]" for="email">Email:</label>
                            <input class="text-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 rounded-md" placeholder="Entrer votre email" id="email" name="email" type="email" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-1">
                            <label class="text-[22px] text-[#a3a3a3] mb-4" for="message">Message</label>
                            <textarea class="text-black focus:outline-0 px-4 py-1 rounded-md resize-none" name="message" id="message" cols="30" rows="10" placeholder="Entrer votre message">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <input class="cursor-pointer bg-blue-400 py-3 px-10 rounded-md my-10 text-white text-[22px]" type="submit" value="Envoyer">
                </div>
            </form>
            <div class="flex items-center justify-center">
                <div class="w-4/5 mx-auto my-auto">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9539.909954918676!2d-9.236782905252008!3d32.2885398619593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sma!4v1730801757056!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <footer class="w-full min-h-80 bg-[#231F20]">
            <img class="w-full" src="{{ asset('Images/footer-bg-piano.png') }}" alt="Footer Bg Piano">
            <div class="w-3/4 mx-auto grid grid-rows-1 grid-cols-2 py-4">
                <div>
                    <img src="{{ asset('Images/logo.png') }}" alt="logo">
                </div>
                <div>
                    <p class="text-[26px] text-orange-600 font-bold mb-5 mt-3">Media</p>
                    <div class="grid grid-cols-4 gap-5 w-5/6">
                        <img src="{{ asset('Images/Fb.png') }}" alt="FB">
                        <img src="{{ asset('Images/Insta.png') }}" alt="Insta">
                        <img src="{{ asset('Images/X.png') }}" alt="X">
                        <img src="{{ asset('Images/Gmail.png') }}" alt="Gmail">
                    </div>
                </div>
                <div>
                    <p class="text-[26px] text-orange-600 font-bold my-4">Infos</p>
                    <p class="text-[22px] text-white">competpianosafi@gmail.com</p>
                    <p class="text-[22px] text-white">+212 612345789</p>
                    <p class="text-[22px] text-white">Rue Ibnou Badis, Safi, Morocco</p>
                </div>
                <div>
                    <p class="text-[26px] text-orange-600 font-bold my-4">Horaires</p>
                    <p class="text-[22px] text-white">Lundi – Samedi: 8h – 20h</p>
                    <p class="text-[22px] text-white">Dimanche: Fermé</p>
                </div>
            </div>
        </footer>
        @if (session()->has('success'))
            <div id="alert" class="w-1/4 h-[8vh] items-center z-20 fixed right-10 bottom-8 bg-green-600 text-white font-bold rounded-md">
                <p class="ms-5">{{ session('success') }}</p>
                <div class="alert-time-bar w-full bg-white opacity-50 h-2 absolute bottom-0 rounded-bl-3xl"></div>
            </div>
        @endif
    </body>
</html>
