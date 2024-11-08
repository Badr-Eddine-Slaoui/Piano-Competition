<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MarrakechInscriptionController;
use App\Http\Controllers\ParisInscriptionController;
use Illuminate\Support\Facades\Route;


Route::get(uri:'/', action: function (): Illuminate\View\View {
    return view(view:'index');
})->name(name:'home');

Route::view(uri:'presentation-marrakech', view:'Pages.presentation_marrakech')->name(name:'presentation_marrakech');

Route::view(uri:'presentation-paris', view:'Pages.presentation_paris')->name(name:'presentation_paris');

Route::view(uri:'galerie', view:'Pages.galerie')->name(name:'galerie');

Route::view(uri:'edition-2025-marrakech', view:'Pages.edition_2025_marrakech')->name(name:'edition_2025_marrakech');

Route::view(uri:'edition-2025-paris', view:'Pages.edition_2025_paris')->name(name:'edition_2025_paris');

Route::view(uri:'contact', view:'Pages.contact')->name(name:'contact');

Route::post(uri:'contact/store', action:[ContactController::class ,'store'])->name(name:'contact.store');

Route::view(uri:'inscription-marrakech', view:'Pages.inscription_marrakech')->name(name:'inscription_marrakech');

Route::post(uri:'inscription-marrakech/store', action:[MarrakechInscriptionController::class ,'store'])->name(name:'inscription_marrakech.store');

Route::view(uri:'inscription-paris', view:'Pages.inscription_paris')->name(name:'inscription_paris');

Route::post(uri:'inscription-paris/store', action:[ParisInscriptionController::class ,'store'])->name(name:'inscription_paris.store');

Route::view(uri:'jury', view:'Pages.jury')->name(name:'jury');

Route::view(uri:'laureats', view:'Pages.laureats')->name(name:'laureats');
