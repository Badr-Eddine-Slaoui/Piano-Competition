<?php

use Illuminate\Support\Facades\Route;


Route::get(uri:'/', action: function (): Illuminate\View\View {
    return view(view:'index');
})->name(name:'home');

Route::view(uri:'presentation',view:'Pages.presentation')->name(name:'presentation');

Route::view(uri:'galerie',view:'Pages.galerie')->name(name:'galerie');
