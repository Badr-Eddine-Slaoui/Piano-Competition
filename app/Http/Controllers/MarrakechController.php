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
        return view("Pages.Marrakech.galerie");
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
}
