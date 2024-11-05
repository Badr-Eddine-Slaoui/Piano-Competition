<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accueil</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <header class="w-full">
            <nav class="w-full h-40 bg-HeaderBg grid bg-no-repeat bg-cover grid-cols-1 grid-rows-2">
                <ul class="w-1/6 mr-20 ml-auto mt-5 flex items-center justify-between text-white font-bold text-xl">
                    <li><a href="" class="text-decoration-none hover:border-b-4 border-orange-600">Paris</a></li>
                    <li><a href="" class="text-decoration-none hover:border-b-4 border-orange-600">Marrakesh</a></li>
                </ul>
                <ul class="w-1/2 mr-20 ml-auto mb-5 flex items-center justify-between text-white font-bold text-xl">
                    <li><a href="{{ route('home') }}" class="text-decoration-none border-b-4 border-orange-600">Accueil</a></li>
                    <li><a href="{{ route('presentation') }}" class="text-decoration-none hover:border-b-4 border-orange-600">Presentation</a></li>
                    <li><a href="" class="text-decoration-none hover:border-b-4 border-orange-600">Galerie</a></li>
                    <li><a href="" class="text-decoration-none hover:border-b-4 border-orange-600">Edition 2025</a></li>
                    <li><a href="" class="text-decoration-none hover:border-b-4 border-orange-600">Contactez-nous</a></li>
                </ul>
            </nav>
            <video class="w-full h-screen" src="{{ asset('Images/v2.mp4') }}" muted autoplay loop></video>

        </header>
        <section class="w-5/6 h-screen my-5 m-auto grid grid-cols-2 grid-rows-1">
            <div class="flex items-center justify-center">
                <div class="w-2/3 h-2/5 my-auto">
                    <h1 class="text-5xl font-extrabold w-2/3 mb-5">Concours International de Piano</h1>
                    <p class="text-[22px] text-gray-400">La 3ème édition<br> Du 23 Octobre 2023<br> au 30 Octobre 2023</p>
                </div>
            </div>
            <div class="h-3/4 my-auto">
                <img src="{{ asset('Images/EventBanner.png') }}" alt="EventBanner">
            </div>
        </section>
        <section class="w-5/6 h-screen my-5 m-auto grid grid-cols-2 grid-rows-1">
            <div class="h-full my-auto">
                <img class="h-full" src="{{ asset('Images/ConditionDeParticipation.png') }}" alt="EventBanner">
            </div>
            <div class="flex items-center justify-center">
                <div class="w-full my-auto">
                    <h1 class="text-[26px] text-orange-600 font-extrabold text-center mb-5">Condition de participation</h1>
                    <p class="w-full text-[22px]">
                        Le concours est ouvert à tous les pianistes ayant atteint l’âge de 18 ans au 23 Octobre 2023, date de début du concours. 
                        Avoir 6 ans révolus et 
                        N’ont pas encore atteint l’âge de 19 ans. 
                        Sont exclus du concours les jeunes inscrits à plein temps dans des études de musique. Les jeunes étudiants sont admis. Les personnes ayant eu une relation d’enseignement permanente, publique ou privée, avec un membre du jury au cours des deux dernières années ne sont pas autorisées à participer. 
                        Le concours est public dans tous ses aspects. La collecte et le traitement de données personnelles sont obligatoires pour la planification et l’organisation du concours. L’organisateur assure le respect des dispositions correspondantes en matière de protection des données. 
                        Les enregistrements vidéo et audio privés ne sont pas autorisés pendant le concours. L’organisateur procédera à des enregistrements visuels et sonores dont chaque participant cède gratuitement les droits d’utilisation à l’organisateur. Les demandes d’honoraires sont irrecevables. 
                        L’organisateur n’est pas responsable des dommages corporels ou matériels survenant dans le cadre des manifestations du concours. 
                    </p>
                </div>
            </div>
        </section>
        <section class="w-full h-screen mt-5 m-auto grid grid-cols-2 grid-rows-1 bg-gray-300">
            <form class="w-3/4 mx-auto py-5" action="" method="post">
                @csrf
                <p class="text-5xl mb-8">Contactez-nous</p>
                <div class="grid grid-cols-1 grid-rows-1 gap-10">
                    <div class="grid grid-cols-1 grid-rows-2 gap-4">
                        <label class="text-[22px]" for="nom">Nom:</label>
                        <input class="focus:outline-0 px-4 py-1 rounded-md" id="nom" name="nom" type="text">
                    </div>
                    <div class="grid grid-cols-1 grid-rows-2 gap-4">
                        <label class="text-[22px]" for="email">Email:</label>
                        <input class="focus:outline-0 px-4 py-1 rounded-md" id="email" name="email" type="email">
                    </div>
                    <div class="grid grid-cols-1 grid-rows-1">
                        <label class="text-[22px] mb-4" for="message">Message</label>
                        <textarea class="focus:outline-0 px-4 py-1 rounded-md resize-none" name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <input class=" bg-blue-400 py-3 px-10 rounded-md my-5 text-white text-[22px]" type="submit" value="Envoyer">
            </form>
            <div class="flex items-center justify-center">
                <div class="w-4/5 mx-auto my-auto">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9539.909954918676!2d-9.236782905252008!3d32.2885398619593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sma!4v1730801757056!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <footer class="w-full min-h-80 bg-[#231F20]">
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
    </body>
</html>
