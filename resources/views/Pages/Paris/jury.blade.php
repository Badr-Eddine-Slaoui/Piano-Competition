<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Paris - Jury</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('Images/ParisIcon.webp') }}" type="image/x-icon">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css','resources/css/jury.css', 'resources/js/carousel.js', 'resources/js/app.js'])

    </head>
    <body class="text-white bg-[#231F20]">
        <header class="w-full xs:h-[10vh] md:h-[15vh] xl:h-[20vh]">
            <nav class="w-full fixed top-0 left-0 z-10 bg-[#231F20] flex justify-between xs:h-[10vh] xs:p-[1vh] sm:p-[2vh] md:h-[15vh] xl:h-[20vh] xl:p-[3vh]">
                <div class="flex justify-center items-center xs:w-5/12 sm:w-3/12">
                    <a href="{{ route('home') }}"><img loading="lazy" class="w-[90%] ms-auto" src="{{ asset('Images/Logo.webp')  }}" alt="Logo"></a>
                </div>
                <div class="w-1/12 flex justify-center items-center sm:hidden">
                    <i id="menuBar" class="fa-solid fa-bars text-[#bc8c2d]"></i>
                </div>
                <div id="menu" class="xs:transition-all xs:opacity-0 xs:duration-500 xs:translate-x-[100%] xs:fixed xs:right-0 xs:top-[10vh] xs:z-20 xs:bg-[#231F20] xs:h-screen xs:py-10 xs:px-10 sm:transition-none sm:translate-x-0 sm:opacity-100 sm:relative sm:p-0 sm:right-[unset] sm:top-[unset] sm:z-[unset] sm:bg-[unset] sm:h-[unset] sm:grid sm:gap-y-2 sm:w-7/12 sm:grid-cols-1 sm:grid-rows-2 sm:mr-5">
                    <ul class="w-full text-white sm:ml-auto sm:flex sm:items-center sm:justify-between sm:font-semibold sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
                        <li><a href="{{ route('paris.home') }}" class="text-decoration-none xs:block xs:mb-5  sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Accueil</a></li>
                        <li><a href="{{ route('paris.presentation') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Presentation</a></li>
                        <li><a href="{{ route('paris.edition_2025') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Edition 2025</a></li>
                        <li><a href="{{ route('paris.jury') }}" class="text-decoration-none xs:text-[#bc8c2d] xs:block xs:mb-5 sm:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:border-b-[3px] lg:border-b-4">Jury</a></li>
                        <li><a href="{{ route('paris.comite_honneur') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Comite d’Honneur</a></li>
                    </ul>
                    <ul class="w-full text-white sm:ml-auto sm:flex sm:items-center sm:justify-between sm:font-semibold sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
                        <li><a href="{{ route('paris.inscription') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Inscription</a></li>
                        <li><a href="{{ route('paris.galerie') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-4 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Galerie</a></li>
                        <li><a href="{{ route('paris.laureats') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Laureats</a></li>
                        <li><a href="{{ route('paris.contact') }}" class="text-decoration-none xs:block xs:mb-5 sm:hover:border-b-2 sm:border-[#bc8c2d] sm:mb-0 md:hover:border-b-[3px] lg:hover:border-b-4">Contactez-nous</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main id="carousel" class="w-full xs:h-[30vh] sm:h-[50vh] md:h-[60vh] lg:h-[80vh] relative overflow-x-hidden">
            <div id="carousel-track" class="w-full h-full flex ">
                <img loading="lazy" class="w-full h-full flex-shrink-0" src="{{ asset('Images/home-header-img.webp') }}">
                <img loading="lazy" class="w-full h-full flex-shrink-0" src="{{ asset('Images/Re-Belle-Communication.webp') }}">
            </div>
        </main>
        <aside class="fixed left-0 top-[25vh] w-1/12 z-[-1] xs:hidden sm:block">
            <img loading="lazy" class="w-full" src="{{ asset('Images/SideImg.webp')  }}" alt="SideImg">
        </aside>
        <section class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:min-h-[40vh] lg:min-h-[50vh] overflow-x-hidden">
            <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh]">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Jury</h2>
            </div>
            <div class="w-4/5 min-h-screen mb-5 m-auto md:grid md:grid-cols-2 md:grid-rows-1 md:gap-x-10 md:gap-y-20">
                <div class="jury relative xs:h-[65vh] md:h-[70vh] lg:h-[80vh]">
                    <p class="title font-bold text-[#bc8c2d] mb-10 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Racha Arodaky</p>
                    <div class="info-container xs:grid xs:grid-rows-1 xs:grid-cols-2 xs:gap-5 mb-5 xs:w-[90%] xs:h-[40%] xs:opacity-100 md:h-[20%] lg:w-full lg:h-full lg:block">
                        <img loading="lazy" class="w-full xs:h-full" src="{{ asset('Images/Racha-Arodaky.webp') }}" alt="Racha Arodaky">
                        <div class="infos lg:hidden">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Racha Arodaky</p>
                            <p class="italic xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Présidente du jury</p>
                            <p class="text-gray-400 my-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste - Compositeur . France</p>
                        </div>
                    </div>
                    <p class="description text-justify xs:text-[10px] sm:text-[12px] md:text-[14px] lg:hidden lg:text-[16px] xl:text-[18px]">Chevalier des Arts et des Lettres  en 2015
                        Prix « Révélation classique » de l'ADAMI au MIDEM en 2001
                        Premier Prix et le prix spécial du jury en trio au concours international de musique de chambre (Pologne en 1997)
                        Etudes au Conservatoire national supérieur de musique et de danse de Paris dans la classe de Dominique Merlet.
                        Prix de piano à seize ans puis continue sa formation au conservatoire Tchaïkovski de Moscou.
                        Racha Arodaky mène une carrière internationale de concertiste. Elle a été invitée à jouer avec de nombreux orchestres, comme l'orchestre National de France, Belgrade,Moscou, Prague.
                        Racha Arodaky est directrice artistique du festival de musique des Fêtes Musicales du Château de Pionsat et directrice générale du label de musique Air-Note.</p>
                </div>
                <div class="jury relative xs:h-[65vh] md:h-[70vh] lg:h-[80vh]">
                    <p class="title font-bold text-[#bc8c2d] mb-10 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Joshua LAFFONT-COHEN</p>
                    <div class="info-container xs:grid xs:grid-rows-1 xs:grid-cols-2 xs:gap-5 mb-5 xs:w-[90%] xs:h-[40%] xs:opacity-100 md:h-[20%] lg:w-full lg:h-full lg:block">
                        <img loading="lazy" class="w-full xs:h-full" src="{{ asset('Images/Joshu- LAFFONT-COHEN.webp') }}" alt="Joshu LAFFONT-COHEN">
                        <div class="infos lg:hidden">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Joshua LAFFONT-COHEN</p>
                            <p class="text-gray-400 my-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste - Compositeur . France</p>
                        </div>
                    </div>
                    <p class="description text-justify xs:text-[10px] sm:text-[12px] md:text-[14px] lg:hidden lg:text-[16px] xl:text-[18px]">Docteur ès lettres, professeur de français et de piano, écrivain, Joshua Laffont- Cohen reçoit en 2011 le prix littéraire André Ferran de l'Académie de Toulouse pour sa thèse sur George Sand et la musique et publie plusieurs ouvrages (roman, théâtre, poésie, essai). Comédien et auteur-compositeur- interprète connu sous le nom de Joshua Lawrence, il est aussi le créateur et le directeur du Concours International de Piano Mouvement Contraire (Paris, Marrakech).</p>
                </div>
                <div class="jury relative xs:h-[65vh] md:h-[70vh] lg:h-[80vh]">
                    <p class="title font-bold text-[#bc8c2d] mb-10 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Lamia BOUKAA</p>
                    <div class="info-container xs:grid xs:grid-rows-1 xs:grid-cols-2 xs:gap-5 mb-5 xs:w-[90%] xs:h-[40%] xs:opacity-100 md:h-[20%] lg:w-full lg:h-full lg:block">
                        <img loading="lazy" class="w-full xs:h-full" src="{{ asset('Images/Lamia-BOUKAA.webp') }}" alt="Lamia BOUKAA">
                        <div class="infos lg:hidden">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Lamia BOUKAA</p>
                            <p class="text-gray-400 my-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste - Musicothérapeute. Maroc</p>
                        </div>
                    </div>
                    <p class="description text-justify xs:text-[10px] sm:text-[12px] md:text-[14px] lg:hidden lg:text-[16px] xl:text-[18px]">Directrice du Concours Mouvement Contraire Maroc, professeur de piano au conservatoire de Casablanca , professeur de piano art académie , formation de coaching et membre de jury de concours nationaux. Lamia Boukaa a commencé le piano a l’âge de 5 ans auprès de Madame Milian, diplômée de Paris.
                        Après son diplôme de piano au conservatoire de Casablanca, elle quitte le Maroc pour différentes formations  entre Paris et Nice , auprès de grands noms de la scène musicale française tel que Jacques Rouvier. En 1995, elle obtient le premier prix de conservatoire.
                        Après cela, elle décide de se perfectionner tout en suivant une formation en Pédagogie d’enseignement, suite à cela elle ajoute une formation en coaching ainsi qu’en musicothérapie.</p>
                </div>
                <div class="jury relative xs:h-[65vh] md:h-[70vh] lg:h-[80vh]">
                    <p class="title font-bold text-[#bc8c2d] mb-10 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Caroline Fauchet</p>
                    <div class="info-container xs:grid xs:grid-rows-1 xs:grid-cols-2 xs:gap-5 mb-5 xs:w-[90%] xs:h-[40%] xs:opacity-100 md:h-[20%] lg:w-full lg:h-full lg:block">
                        <img loading="lazy" class="w-full xs:h-full" src="{{ asset('Images/Caroline-Fauchet.webp') }}" alt="Caroline Fauchet">
                        <div class="infos lg:hidden">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Caroline Fauchet</p>
                            <p class="text-gray-400 my-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Pianiste. France</p>
                        </div>
                    </div>
                    <p class="description text-justify xs:text-[10px] sm:text-[12px] md:text-[14px] lg:hidden lg:text-[16px] xl:text-[18px]">Elle remporte de nombreux prix et récompenses, dont deux médailles d’or (piano et musique de chambre) à l’âge de 14 ans, le deuxième prix du Concours international de Sofia et le Prix d'interprétation Albert Roussel.
                        En 2023 elle remporte le Diamond Prize du concours Royal Music Competition, le Platinum Prize  du Royal Sound music compétition, et le Grand Prize Winner des World classical music awards dans la catégorie « concerto », en interprérant le Concerto pour piano "Ariana" d'Yves Levêque, produit par Indésens Calliope Records.
                        Diplômée d’Etat, professeur titulaire en conservatoire et directrice de Piano Academy, elle partage sa carrière entre les concerts, les enregistrements, l’enseignement (notamment dans des Universités aux USA et en Ecosse) et l’édition.</p>
                </div>
                <div class="jury relative m-auto xs:h-[65vh] md:h-[70vh] md:w-1/2 md:col-span-2 lg:md:h-[80vh]">
                    <p class="title font-bold text-[#bc8c2d] mb-10 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mounia Dadi</p>
                    <div class="info-container xs:grid xs:grid-rows-1 xs:grid-cols-2 xs:gap-5 mb-5 xs:w-[90%] xs:h-[40%] xs:opacity-100 md:h-[20%] lg:w-full lg:h-full lg:block">
                        <img loading="lazy" class="w-full xs:h-full" src="{{ asset('Images/Mounia-Dadi.webp') }}" alt="Mounia Dadi">
                        <div class="infos lg:hidden">
                            <p class="font-bold text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Mounia Dadi</p>
                            <p class="text-gray-400 my-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Présence scénique. Peintre - Chorégraphe. Maroc</p>
                        </div>
                    </div>
                    <p class="description text-justify xs:text-[10px] sm:text-[12px] md:text-[14px] lg:hidden lg:text-[16px] xl:text-[18px]">Mounia Dadi, passionnée d'art et de danse depuis son enfance, a débuté la danse à 5 ans à l'institut Paule Moreau et chez Vivian Pizzagalli, explorant le classique et le moderne jazz. Après des cours avec Cino Bradley Miller, elle déménage à New York pour obtenir un Bachelor of arts a Hofstra university tout en continuant a se former au Broadway Dance Center. Parallèlement, une de ces œuvres fait l’affiche au festival international du film africain et créole en 2006 à Montréal. Suite a cette reconnaissance , elle expose dans divers pays, avant de rentrer à Marrakech en 2006 et de fonder l'Art Academy en 2010, la première académie d'art pluridisciplinaire de la ville, réputée pour son dynamisme et son approche innovante de l'enseignement des arts de la scène et reconnu depuis 2015 par le conseil international de la danse reconnu par l’Unesco.</p>
                </div>
            </div>
        </section>
        <section id="map" class="w-full my-5 xs:min-h-[20vh] sm:min-h-[30vh] md:grid md:grid-cols-2 md:grid-rows-1 md:mt-5 md:m-auto md:gap-x-10 md:min-h-[40vh] lg:min-h-[50vh]">
            <div class="flex relative z-[-2] items-center my-10 slide-text xs:h-[5vh] sm:h-[20vh] md:col-span-2">
                <div class="h-[1px] w-1/5 bg-white me-5"></div>
                <h2 class="font-[400] text-center text-[#bc8c2d] capitalize xs:text-[14px] sm:text-[24px] md:text-[28px] lg:text-[32px] xl:text-[36px]">Contactez-nous</h2>
            </div>
            <form class="w-full py-5 mb-5" action="{{ route('paris.contact.store') }}" method="post">
                @csrf
                <div class="xs:w-4/5 xs:mx-auto md:w-4/5 md:ms-auto md:me-0">
                    <div class="grid grid-cols-1 grid-rows-1 gap-10">
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="nom_complet">Nom Complet: <span class=" text-red-600">*</span></label>
                            <input class="text-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre nom" id="nom_complet" name="nom_complet" type="text" value="{{ old('nom_complet') }}">
                            @error('nom_complet')
                                <p class="text-red-600 mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-2 gap-4">
                            <label class="text-[#a3a3a3] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="email">Email: <span class=" text-red-600">*</span></label>
                            <input class="text-black focus:outline-0 placeholder:text-gray-[#a3a3a3] px-4 py-1 rounded-md xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" placeholder="Entrer votre email" id="email" name="email" type="email" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-600 mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1 grid-rows-1">
                            <label class="text-[#a3a3a3] mb-4 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" for="message">Message: <span class=" text-red-600">*</span></label>
                            <textarea class="text-black focus:outline-0 px-4 py-1 rounded-md resize-none xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" name="message" id="message" cols="30" rows="10" placeholder="Entrer votre message">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-600 mt-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <input class="cursor-pointer bg-blue-400 rounded-md my-10 text-white xs:text-[10px] xs:py-2 xs:px-5 sm:py-3 sm:px-10 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]" type="submit" value="Envoyer">
                </div>
            </form>
            <div class="flex items-center justify-center">
                <div class="mx-auto my-auto xs:w-full md:w-[unset]">
                    <iframe class="xs:w-10/12 xs:h-[220px] xs:mx-auto sm:h-[300px] md:w-[250px] md:h-[350px] lg:w-[300px] lg:h-[400px] xl:w-[600px] xl:h-[450px]" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9539.909954918676!2d-9.236782905252008!3d32.2885398619593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sma!4v1730801757056!5m2!1sen!2sma" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <footer class="w-full min-h-80 bg-[#231F20] py-5">
            <img loading="lazy" class="w-full" src="{{ asset('Images/footer-bg-piano.webp') }}" alt="Footer Bg Piano">
            <div class="mx-auto grid grid-rows-1 grid-cols-2 py-4 xs:w-11/12 sm:w-4/5">
                <div>
                    <a href="{{ route('home') }}">
                      <img loading="lazy" class="block my-10 xs:w-3/4 sm:w-1/2" src="{{ asset('Images/logo.webp') }}" alt="logo">
                    </a>
                </div>
                <div>
                    <p class="text-[#bc8c2d] font-bold mb-5 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Media</p>
                    <div class="grid grid-cols-4 gap-5 xs:w-5/6 sm:w-4/6">
                        <a href="#" target="_blank"><img loading="lazy" class="hover:scale-110 hover:-translate-y-2 transition-all xs:w-full sm:w-2/3 " src="{{ asset('Images/Fb.webp') }}" alt="FB"></a>
                        <a href="#" target="_blank"><img loading="lazy" class="hover:scale-110 hover:-translate-y-2 transition-all xs:w-full sm:w-2/3 " src="{{ asset('Images/Insta.webp') }}" alt="Insta"></a>
                        <a href="#" target="_blank"><img loading="lazy" class="hover:scale-110 hover:-translate-y-2 transition-all xs:w-full sm:w-2/3 " src="{{ asset('Images/X.webp') }}" alt="X"></a>
                        <a href="#" target="_blank"><img loading="lazy" class="hover:scale-110 hover:-translate-y-2 transition-all xs:w-full sm:w-2/3 " src="{{ asset('Images/Gmail.webp') }}" alt="Gmail"></a>
                    </div>
                </div>
                <div>
                    <p class="text-[#bc8c2d] font-bold my-4 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Contacts</p>
                    <a href="mailto:competpianosafi@gmail.com"><p class="text-white hover:text-[#bc8c2d] mb-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">competpianosafi@gmail.com</p></a>
                    <a href="tel:+212612345789"><p class="text-white hover:text-[#bc8c2d] mb-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">+212 612345789</p></a>
                    <p class="text-[#bc8c2d] font-bold my-4 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Lieus</p>
                    <a href="#map"><p class="text-white hover:text-[#bc8c2d] mb-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Rue Ibnou Badis, Safi, Morocco</p></a>
                    <p class="text-[#bc8c2d] font-bold my-4 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Horaires</p>
                    <p class="text-white hover:text-[#bc8c2d] mb-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Lundi – Samedi: 8h – 20h</p>
                    <p class="text-white hover:text-[#bc8c2d] mb-3 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Dimanche: Fermé</p>
                </div>
                <div>
                    <p class="text-[#bc8c2d] font-bold mt-4 my-6 xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Les Pages</p>
                    <div class="grid grid-cols-2 grid-rows-1 xs:gap-y-4 sm:gap-y-10">
                        <p><a href="{{ route('paris.presentation') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Presentation</a></p>
                        <p><a href="{{ route('paris.edition_2025') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Edition 2025</a></p>
                        <p><a href="{{ route('paris.jury') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Jury</a></p>
                        <p><a href="{{ route('paris.comite_honneur') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Comite d’Honneur</a></p>
                        <p><a href="{{ route('paris.inscription') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Inscription</a></p>
                        <p><a href="{{ route('paris.galerie') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Galerie</a></p>
                        <p><a href="{{ route('paris.laureats') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Laureats</a></p>
                        <p><a href="{{ route('paris.contact') }}" class="text-decoration-nonetext-white hover:text-[#bc8c2d] xs:text-[10px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">Contactez-nous</a></p>
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
