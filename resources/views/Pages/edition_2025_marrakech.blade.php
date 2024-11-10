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
        @vite(['resources/css/app.css', 'resources/js/carousel.js', 'resources/js/app.js'])

    </head>
    <body class="text-white bg-[#231F20]">
        <header class="w-full h-[20vh]">
            <nav class="w-full h-[20vh] fixed top-0 left-0 z-10 bg-[#231F20] flex justify-between">
                <div class="w-1/6 flex justify-center items-center">
                    <a href="{{ route('home') }}"><img class="w-[90%] ms-auto" src="{{ asset('Images/Logo.png')  }}" alt="Logo"></a>
                </div>
                <div class="w-4/6 grid grid-cols-1 grid-rows-2 mr-12">
                    <ul class="w-1/6 ml-auto mt-5 flex items-center justify-between text-white font-bold text-xl">
                    <li><a href="{{ route('edition_2025_paris') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Paris</a></li>
                    <li><a href="{{ route('edition_2025_marrakech') }}" class="text-decoration-none border-b-4 border-orange-600">Marrakesh</a></li>
                </ul>
                    <ul class="w-full ml-auto mb-5 flex items-center justify-between text-white font-bold text-xl">
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
        </header>
        <main id="carousel" class="w-full h-[80vh] relative overflow-x-hidden">
            <div id="carousel-track" class="w-full h-full flex ">
                <img class="w-full h-full flex-shrink-0" src="{{ asset('Images/home-header-img.png') }}">
                <img class="w-full h-full flex-shrink-0" src="{{ asset('Images/Re-Belle-Communication.png') }}">
            </div>
        </main>
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
            <div class="w-5/6 min-h-[65vh] m-auto grid grid-cols-2 grid-rows-1">
                <div class="flex items-center justify-center">
                    <div class="w-2/3">
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
                </div>
                <div class="h-full ms-10">
                    <img src="{{ asset('Images/PosterMarrakech.png') }}" alt="PosterMarrakech">
                </div>
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
        <section id="map" class="w-full min-h-screen mt-5 m-auto grid grid-cols-2 grid-rows-1 gap-x-10">
            <div class="flex h-[20vh] relative z-[-2] items-center col-span-2 my-10 slide-text">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="text-[36px] font-[400] text-center text-[#bc8c2d]">Contactez-nous</h2>
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
            <div  class="flex items-center justify-center">
                <div class="w-4/5 mx-auto my-auto">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9539.909954918676!2d-9.236782905252008!3d32.2885398619593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sma!4v1730801757056!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <footer class="w-full min-h-80 bg-[#231F20] py-5">
            <img class="w-full" src="{{ asset('Images/footer-bg-piano.png') }}" alt="Footer Bg Piano">
            <div class="w-3/4 mx-auto grid grid-rows-1 grid-cols-2 py-4">
                <div>
                    <a href="{{ route('home') }}">
                      <img class="block w-1/2 my-10" src="{{ asset('Images/logo.png') }}" alt="logo">
                    </a>
                </div>
                <div>
                    <p class="text-[26px] text-orange-600 font-bold mb-5">Media</p>
                    <div class="grid grid-cols-4 gap-5 w-5/6">
                        <a href="#" target="_blank"><img class="hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/Fb.png') }}" alt="FB"></a>
                        <a href="#" target="_blank"><img class="hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/Insta.png') }}" alt="Insta"></a>
                        <a href="#" target="_blank"><img class="hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/X.png') }}" alt="X"></a>
                        <a href="#" target="_blank"><img class="hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/Gmail.png') }}" alt="Gmail"></a>
                    </div>
                </div>
                <div>
                    <p class="text-[26px] text-orange-600 font-bold my-4">Contacts</p>
                    <a href="mailto:competpianosafi@gmail.com"><p class="text-[22px] text-white hover:text-[#bc8c2d] mb-3">competpianosafi@gmail.com</p></a>
                    <a href="tel:+212612345789"><p class="text-[22px] text-white hover:text-[#bc8c2d] mb-3">+212 612345789</p></a>
                    <a href="#map"><p class="text-[22px] text-white hover:text-[#bc8c2d] mb-3">Rue Ibnou Badis, Safi, Morocco</p></a>
                    <p class="text-[26px] text-orange-600 font-bold my-4">Horaires</p>
                    <p class="text-[22px] text-white hover:text-[#bc8c2d] mb-3">Lundi – Samedi: 8h – 20h</p>
                    <p class="text-[22px] text-white hover:text-[#bc8c2d] mb-3">Dimanche: Fermé</p>
                </div>
                <div>
                    <p class="text-[26px] text-orange-600 font-bold mt-4 my-6">Pages</p>
                    <div class="grid grid-cols-2 grid-rows-1 gap-y-10">
                        <p><a href="{{ route('presentation_marrakech') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Presentation</a></p>
                        <p><a href="{{ route('galerie') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Galerie</a></p>
                        <p><a href="{{ route('edition_2025_marrakech') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Edition 2025</a></p>
                        <p><a href="{{ route('inscription_marrakech') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Inscription</a></p>
                        <p><a href="{{ route('jury') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Jury</a></p>
                        <p><a href="{{ route('comite_honneur') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Comite d’Honneur</a></p>
                        <p><a href="{{ route('laureats') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Laureats</a></p>
                        <p><a href="{{ route('contact') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Contactez-nous</a></p>
                    </div>
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
