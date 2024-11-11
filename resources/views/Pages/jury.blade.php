<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jury</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css','resources/css/jury.css', 'resources/js/carousel.js', 'resources/js/app.js'])

    </head>
    <body class="text-white bg-[#231F20]">
        <header class="w-full h-[20vh]">
            <nav class="w-full h-[20vh] fixed top-0 left-0 z-10 bg-[#231F20] flex justify-between">
                <div class="w-1/6 flex justify-center items-center">
                    <a href="{{ route('home') }}"><img class="w-[90%] ms-auto" src="{{ asset('Images/Logo.png')  }}" alt="Logo"></a>
                </div>
                <div class="w-4/6 grid grid-cols-1 grid-rows-2 mr-12">
                    <ul class="w-1/6 ml-auto mt-5 flex items-center justify-between text-white font-bold text-xl">
                    <li><a href="{{ route('presentation_paris') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Paris</a></li>
                    <li><a href="{{ route('presentation_marrakech') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Marrakesh</a></li>
                </ul>
                    <ul class="w-full ml-auto mb-5 flex items-center justify-between text-white font-bold text-xl">
                    <li><a href="{{ route('home') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Accueil</a></li>
                    <li><a href="{{ route('presentation_marrakech') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Presentation</a></li>
                    <li><a href="{{ route('galerie') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Galerie</a></li>
                    <li><a href="{{ route('edition_2025_marrakech') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Edition 2025</a></li>
                    <li><a href="{{ route('inscription_marrakech') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Inscription</a></li>
                    <li><a href="{{ route('jury') }}" class="text-decoration-none border-b-4 border-orange-600">Jury</a></li>
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
                <h2 class="text-[36px] font-[400] text-center">Jury</h2>
            </div>
            <div class="w-4/5 min-h-screen mb-5 m-auto grid grid-cols-2 grid-rows-1 gap-x-10 gap-y-20">
                <div class="jury relative h-[65vh]">
                    <p class="title text-[26px] font-bold text-[#bc8c2d] mb-10">Racha Arodaky</p>
                    <div class="h-full info-container block grid-rows-1 grid-cols-2 gap-5  mb-5">
                        <img class="w-full h-full" src="{{ asset('Images/Racha-Arodaky.png') }}" alt="Racha Arodaky">
                        <div class="infos hidden">
                            <p class="text-[26px] font-bold text-[#bc8c2d]">Racha Arodaky</p>
                            <p class="text-[22px] italic">Présidente du jury</p>
                            <p class="text-[22px] text-gray-400 my-3">Pianiste - Compositeur . France</p>
                        </div>
                    </div>
                    <p class="description text-justify hidden">Chevalier des Arts et des Lettres  en 2015
                        Prix « Révélation classique » de l'ADAMI au MIDEM en 2001
                        Premier Prix et le prix spécial du jury en trio au concours international de musique de chambre (Pologne en 1997)
                        Etudes au Conservatoire national supérieur de musique et de danse de Paris dans la classe de Dominique Merlet.
                        Prix de piano à seize ans puis continue sa formation au conservatoire Tchaïkovski de Moscou.
                        Racha Arodaky mène une carrière internationale de concertiste. Elle a été invitée à jouer avec de nombreux orchestres, comme l'orchestre National de France, Belgrade,Moscou, Prague.
                        Racha Arodaky est directrice artistique du festival de musique des Fêtes Musicales du Château de Pionsat et directrice générale du label de musique Air-Note.</p>
                </div>
                <div class="jury relative h-[65vh]">
                    <p class="title text-[26px] font-bold text-[#bc8c2d] mb-10">Joshua LAFFONT-COHEN</p>
                    <div class="h-full info-container block grid-rows-1 grid-cols-2 gap-5 mb-5">
                        <img class="w-full h-full" src="{{ asset('Images/Joshu- LAFFONT-COHEN.png') }}" alt="Joshu LAFFONT-COHEN">
                        <div class="infos hidden">
                            <p class="text-[26px] font-bold text-[#bc8c2d]">Joshua LAFFONT-COHEN</p>
                            <p class="text-[22px] text-gray-400 my-3">Pianiste - Compositeur . France</p>
                        </div>
                    </div>
                    <p class="description text-justify hidden">Docteur ès lettres, professeur de français et de piano, écrivain, Joshua Laffont- Cohen reçoit en 2011 le prix littéraire André Ferran de l'Académie de Toulouse pour sa thèse sur George Sand et la musique et publie plusieurs ouvrages (roman, théâtre, poésie, essai). Comédien et auteur-compositeur- interprète connu sous le nom de Joshua Lawrence, il est aussi le créateur et le directeur du Concours International de Piano Mouvement Contraire (Paris, Marrakech).</p>
                </div>
                <div class="jury relative h-[65vh]">
                    <p class="title text-[26px] font-bold text-[#bc8c2d] mb-10">Lamia BOUKAA</p>
                    <div class="h-full info-container block grid-rows-1 grid-cols-2 gap-5 mb-5">
                        <img class="w-full h-full" src="{{ asset('Images/Lamia-BOUKAA.png') }}" alt="Lamia BOUKAA">
                        <div class="infos hidden">
                            <p class="text-[26px] font-bold text-[#bc8c2d]">Lamia BOUKAA</p>
                            <p class="text-[22px] text-gray-400 my-3">Pianiste - Musicothérapeute. Maroc</p>
                        </div>
                    </div>
                    <p class="description text-justify hidden">Directrice du Concours Mouvement Contraire Maroc, professeur de piano au conservatoire de Casablanca , professeur de piano art académie , formation de coaching et membre de jury de concours nationaux. Lamia Boukaa a commencé le piano a l’âge de 5 ans auprès de Madame Milian, diplômée de Paris.
                        Après son diplôme de piano au conservatoire de Casablanca, elle quitte le Maroc pour différentes formations  entre Paris et Nice , auprès de grands noms de la scène musicale française tel que Jacques Rouvier. En 1995, elle obtient le premier prix de conservatoire.
                        Après cela, elle décide de se perfectionner tout en suivant une formation en Pédagogie d’enseignement, suite à cela elle ajoute une formation en coaching ainsi qu’en musicothérapie.</p>
                </div>
                <div class="jury relative h-[65vh]">
                    <p class="title text-[26px] font-bold text-[#bc8c2d] mb-10">Caroline Fauchet</p>
                    <div class="h-full info-container block grid-rows-1 grid-cols-2 gap-5 mb-5">
                        <img class="w-full h-full" src="{{ asset('Images/Caroline-Fauchet.png') }}" alt="Caroline Fauchet">
                        <div class="infos hidden">
                            <p class="text-[26px] font-bold text-[#bc8c2d]">Caroline Fauchet</p>
                            <p class="text-[22px] text-gray-400 my-3">Pianiste. France</p>
                        </div>
                    </div>
                    <p class="description text-justify hidden">Elle remporte de nombreux prix et récompenses, dont deux médailles d’or (piano et musique de chambre) à l’âge de 14 ans, le deuxième prix du Concours international de Sofia et le Prix d'interprétation Albert Roussel.
                        En 2023 elle remporte le Diamond Prize du concours Royal Music Competition, le Platinum Prize  du Royal Sound music compétition, et le Grand Prize Winner des World classical music awards dans la catégorie « concerto », en interprérant le Concerto pour piano "Ariana" d'Yves Levêque, produit par Indésens Calliope Records.
                        Diplômée d’Etat, professeur titulaire en conservatoire et directrice de Piano Academy, elle partage sa carrière entre les concerts, les enregistrements, l’enseignement (notamment dans des Universités aux USA et en Ecosse) et l’édition.</p>
                </div>
                <div class="jury relative w-1/2 h-[65vh] col-span-2 m-auto">
                    <p class="title text-[26px] font-bold text-[#bc8c2d] mb-10">Mounia Dadi</p>
                    <div class="h-full info-container block grid-rows-1 grid-cols-2 gap-5 mb-5">
                        <img class="w-full h-full" src="{{ asset('Images/Mounia-Dadi.png') }}" alt="Mounia Dadi">
                        <div class="infos hidden">
                            <p class="text-[26px] font-bold text-[#bc8c2d]">Mounia Dadi</p>
                            <p class="text-[22px] text-gray-400 my-3">Présence scénique. Peintre - Chorégraphe. Maroc</p>
                        </div>
                    </div>
                    <p class="description text-justify hidden">Mounia Dadi, passionnée d'art et de danse depuis son enfance, a débuté la danse à 5 ans à l'institut Paule Moreau et chez Vivian Pizzagalli, explorant le classique et le moderne jazz. Après des cours avec Cino Bradley Miller, elle déménage à New York pour obtenir un Bachelor of arts a Hofstra university tout en continuant a se former au Broadway Dance Center. Parallèlement, une de ces œuvres fait l’affiche au festival international du film africain et créole en 2006 à Montréal. Suite a cette reconnaissance , elle expose dans divers pays, avant de rentrer à Marrakech en 2006 et de fonder l'Art Academy en 2010, la première académie d'art pluridisciplinaire de la ville, réputée pour son dynamisme et son approche innovante de l'enseignement des arts de la scène et reconnu depuis 2015 par le conseil international de la danse reconnu par l’Unesco.</p>
                </div>
            </div>
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
                            <label class="text-[22px] text-[#a3a3a3]" for="nom_complet">Nom Complet: <span class=" text-red-600">*</span></label>
                            <input class="text-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 rounded-md" placeholder="Entrer votre nom" id="nom_complet" name="nom_complet" type="text" value="{{ old('nom_complet') }}">
                            @error('nom_complet')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[22px] text-[#a3a3a3]" for="email">Email: <span class=" text-red-600">*</span></label>
                            <input class="text-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 rounded-md" placeholder="Entrer votre email" id="email" name="email" type="email" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-600 mt-5">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-1">
                            <label class="text-[22px] text-[#a3a3a3] mb-4" for="message">Message: <span class=" text-red-600">*</span></label>
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
            <div class="w-4/5 mx-auto grid grid-rows-1 grid-cols-2 py-4">
                <div>
                    <a href="{{ route('home') }}">
                      <img class="block w-1/2 my-10" src="{{ asset('Images/logo.png') }}" alt="logo">
                    </a>
                </div>
                <div>
                    <p class="text-[26px] text-[#bc8c2d] font-bold mb-5">Media</p>
                    <div class="grid grid-cols-4 gap-5 w-5/6">
                        <a href="#" target="_blank"><img class="hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/Fb.png') }}" alt="FB"></a>
                        <a href="#" target="_blank"><img class="hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/Insta.png') }}" alt="Insta"></a>
                        <a href="#" target="_blank"><img class="hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/X.png') }}" alt="X"></a>
                        <a href="#" target="_blank"><img class="hover:scale-110 hover:-translate-y-2 transition-all" src="{{ asset('Images/Gmail.png') }}" alt="Gmail"></a>
                    </div>
                </div>
                <div>
                    <p class="text-[26px] text-[#bc8c2d] font-bold my-4">Contacts</p>
                    <a href="mailto:competpianosafi@gmail.com"><p class="text-[22px] text-white hover:text-[#bc8c2d] mb-3">competpianosafi@gmail.com</p></a>
                    <a href="tel:+212612345789"><p class="text-[22px] text-white hover:text-[#bc8c2d] mb-3">+212 612345789</p></a>
                    <p class="text-[26px] text-[#bc8c2d] font-bold my-4">Lieus</p>
                    <a href="#map"><p class="text-[22px] text-white hover:text-[#bc8c2d] mb-3">Rue Ibnou Badis, Safi, Morocco</p></a>
                    <p class="text-[26px] text-[#bc8c2d] font-bold my-4">Horaires</p>
                    <p class="text-[22px] text-white hover:text-[#bc8c2d] mb-3">Lundi – Samedi: 8h – 20h</p>
                    <p class="text-[22px] text-white hover:text-[#bc8c2d] mb-3">Dimanche: Fermé</p>
                </div>
                <div>
                    <p class="text-[26px] text-[#bc8c2d] font-bold mt-4 my-6">Les Pages</p>
                    <div class="grid grid-cols-2 grid-rows-1 gap-y-10">
                        <p><a href="{{ route('presentation_marrakech') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Presentation</a></p>
                        <p><a href="{{ route('galerie') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Galerie</a></p>
                        <p><a href="{{ route('edition_2025_marrakech') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Edition 2025</a></p>
                        <p><a href="{{ route('inscription_marrakech') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Inscription</a></p>
                        <p><a href="{{ route('jury') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Jury</a></p>
                        <p><a href="{{ route('comite_honneur') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Comite d’Honneur</a></p>
                        <p><a href="{{ route('laureats') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Laureats</a></p>
                        <p><a href="{{ route('contact') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Contactez-nous</a></p>
                        <p><a href="{{ route('presentation_paris') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Paris</a></p>
                        <p><a href="{{ route('presentation_marrakech') }}" class="text-decoration-none text-[22px] text-white hover:text-[#bc8c2d]">Marrakesh</a></p>
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
