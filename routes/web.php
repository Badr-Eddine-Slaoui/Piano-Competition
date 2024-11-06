<?php

use Illuminate\Support\Facades\Route;


Route::get(uri:'/', action: function (): Illuminate\View\View {
    return view(view:'index');
})->name(name:'home');

Route::view(uri:'presentation',view:'Pages.presentation')->name(name:'presentation');

Route::view(uri:'galerie',view:'Pages.galerie')->name(name:'galerie');

Route::view(uri:'edition-2025-marrakech',view:'Pages.edition_2025_marrakech')->name(name:'edition_2025_marrakech');

Route::view(uri:'edition-2025-paris',view:'Pages.edition_2025_paris')->name(name:'edition_2025_paris');
