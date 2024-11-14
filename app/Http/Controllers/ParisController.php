<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParisController extends Controller
{
    public function index(){
        return view("Pages.Paris.accueil");
    }

    public function presentation(){
        return view("Pages.Paris.presentation");
    }

    public function galerie(){
        return view("Pages.Paris.galerie");
    }

    public function edition_2025(){
        return view("Pages.Paris.edition_2025");
    }

    public function inscription(){
        return view("Pages.Paris.inscription");
    }

    public function jury(){
        return view("Pages.Paris.jury");
    }

    public function comite_honneur(){
        return view("Pages.Paris.comite_honneur");
    }

    public function laureats(){
        return view("Pages.Paris.laureats");
    }

    public function contact(){
        return view("Pages.Paris.contact");
    }
}
