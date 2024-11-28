<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarrakechController extends Controller
{
    public function index(){
        return view("Pages.Marrakech.accueil");
    }

    public function presentation(){
        return view("Pages.Marrakech.presentation");
    }

    public function galerie(){
        $galerie = [
            "Galerie 1" => "Images/Galerie Piano/galerie-1.png",
            "Galerie 2" => "Images/Galerie Piano/galerie-2.png",
            "Galerie 3" => "Images/Galerie Piano/galerie-3.png",
            "Galerie 4" => "Images/Galerie Piano/galerie-4.png",
            "Galerie 5" => "Images/Galerie Piano/galerie-5.png",
            "Galerie 6" => "Images/Galerie Piano/galerie-6.png",
            "Galerie 7" => "Images/Galerie Piano/galerie-7.png",
            "Galerie 8" => "Images/Galerie Piano/galerie-8.png",
            "Galerie 9" => "Images/Galerie Piano/galerie-9.png",
            "Galerie 10" => "Images/Galerie Piano/galerie-10.png",
            "Galerie 11" => "Images/Galerie Piano/galerie-11.png",
            "Galerie 12" => "Images/Galerie Piano/galerie-12.png",
            "Galerie 13" => "Images/Galerie Piano/galerie-13.png",
            "Galerie 14" => "Images/Galerie Piano/galerie-14.png",
            "Galerie 15" => "Images/Galerie Piano/galerie-15.png",
            "Galerie 16" => "Images/Galerie Piano/galerie-16.png",
            "Galerie 17" => "Images/Galerie Piano/galerie-17.png",
            "Galerie 18" => "Images/Galerie Piano/galerie-18.png",
            "Galerie 19" => "Images/Galerie Piano/galerie-19.png",
            "Galerie 20" => "Images/Galerie Piano/galerie-20.png",
            "Galerie 21" => "Images/Galerie Piano/galerie-21.png",
            "Galerie 22" => "Images/Galerie Piano/galerie-22.png",
            "Galerie 23" => "Images/Galerie Piano/galerie-23.png",
            "Galerie 24" => "Images/Galerie Piano/galerie-24.png",
            "Galerie 25" => "Images/Galerie Piano/galerie-25.png",
            "Galerie 26" => "Images/Galerie Piano/galerie-26.png",
            "Galerie 27" => "Images/Galerie Piano/galerie-27.png",
            "Galerie 28" => "Images/Galerie Piano/galerie-28.png",
            "Galerie 29" => "Images/Galerie Piano/galerie-29.png",
            "Galerie 30" => "Images/Galerie Piano/galerie-30.png",
            "Galerie 31" => "Images/Galerie Piano/galerie-31.png",
            "Galerie 32" => "Images/Galerie Piano/galerie-32.png",
            "Galerie 33" => "Images/Galerie Piano/galerie-33.png",
            "Galerie 34" => "Images/Galerie Piano/galerie-34.png",
            "Galerie 35" => "Images/Galerie Piano/galerie-35.png",
            "Galerie 36" => "Images/Galerie Piano/galerie-36.png",
            "Galerie 37" => "Images/Galerie Piano/galerie-37.png",
        ];
        return view("Pages.Marrakech.galerie",compact('galerie'));
    }

    public function edition_2025(){
        return view("Pages.Marrakech.edition_2025");
    }

    public function inscription(){
        return view("Pages.Marrakech.inscription");
    }

    public function jury(){
        return view("Pages.Marrakech.jury");
    }

    public function comite_honneur(){
        return view("Pages.Marrakech.comite_honneur");
    }

    public function laureats(){
        return view("Pages.Marrakech.laureats");
    }

    public function contact(){
        return view("Pages.Marrakech.contact");
    }

    public function reglement(){
        return view("Pages.Marrakech.reglement");
    }

    public function reservation(){
        return view("Pages.Marrakech.reservation");
    }
}
