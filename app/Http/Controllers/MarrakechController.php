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
      $pics = [
          "galerie-1" => "Galerie 1",
          "galerie-2" => "Galerie 2",
          "galerie-3" => "Galerie 3",
          "galerie-4" => "Galerie 4",
          "galerie-5" => "Galerie 5",
          "galerie-6" => "Galerie 6",
          "galerie-7" => "Galerie 7",
          "galerie-8" => "Galerie 8",
          "galerie-9" => "Galerie 9",
          "galerie-10" => "Galerie 10",
          "galerie-11" => "Galerie 11",
          "galerie-12" => "Galerie 12",
          "galerie-13" => "Galerie 13",
          "galerie-14" => "Galerie 14",
          "galerie-15" => "Galerie 15",
          "galerie-16" => "Galerie 16",
          "galerie-17" => "Galerie 17",
          "galerie-18" => "Galerie 18",
          "galerie-19" => "Galerie 19",
          "galerie-20" => "Galerie 20",
          "galerie-21" => "Galerie 21",
          "galerie-22" => "Galerie 22",
          "galerie-23" => "Galerie 23",
          "galerie-24" => "Galerie 24",
          "galerie-25" => "Galerie 25",
          "galerie-26" => "Galerie 26",
          "galerie-27" => "Galerie 27",
          "galerie-28" => "Galerie 28",
          "galerie-29" => "Galerie 29",
          "galerie-30" => "Galerie 30",
          "galerie-31" => "Galerie 31",
          "galerie-32" => "Galerie 32",
          "galerie-33" => "Galerie 33",
          "galerie-34" => "Galerie 34",
          "galerie-35" => "Galerie 35",
          "galerie-36" => "Galerie 36",
          "galerie-37" => "Galerie 37",
      ];

      $videos = [
          "galerie-1",
          "galerie-2",
          "galerie-3",
          "galerie-4",
          "galerie-5",
          "galerie-6",
          "galerie-7",
          "galerie-8",
          "galerie-9",
          "galerie-10",
          "galerie-11",
          "galerie-12",
          "galerie-13",
          "galerie-14",
          "galerie-15",
          "galerie-16",
          "galerie-17",
          "galerie-18",
          "galerie-19",
          "galerie-20",
      ];
      
      return view("Pages.Marrakech.galerie",compact('pics','videos'));
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
