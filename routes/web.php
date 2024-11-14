<?php

use App\Http\Controllers\MarrakechContactController;
use App\Http\Controllers\MarrakechInscriptionController;
use App\Http\Controllers\ParisContactController;
use App\Http\Controllers\ParisInscriptionController;
use Illuminate\Support\Facades\Route;


Route::view(uri: '/', view: 'index')->name(name: 'home');

Route::prefix('marrakech')->as('marrakech.')->group(function () {
    Route::view('/', 'Pages.Marrakech.accueil')->name('home');
    Route::view('presentation', 'Pages.Marrakech.presentation')->name('presentation');
    Route::view('galerie', 'Pages.Marrakech.galerie')->name('galerie');
    Route::view('edition-2025', 'Pages.Marrakech.edition_2025')->name('edition_2025');
    Route::view('inscription', 'Pages.Marrakech.inscription')->name('inscription');
    Route::post('inscription/store', [MarrakechInscriptionController::class, 'store'])->name('inscription.store');
    Route::view('jury', 'Pages.Marrakech.jury')->name('jury');
    Route::view('comite-honneur', 'Pages.Marrakech.comite_honneur')->name('comite_honneur');
    Route::view('laureats', 'Pages.Marrakech.laureats')->name('laureats');
    Route::view(uri:'contact', view:'Pages.contact')->name(name:'contact');
    Route::post(uri:'contact/store', action:[MarrakechContactController::class ,'store'])->name(name:'contact.store');
});

Route::prefix('paris')->as('paris.')->group(function () {
    Route::view('/', 'Pages.Paris.accueil')->name('home');
    Route::view('presentation', 'Pages.Paris.presentation')->name('presentation');
    Route::view('galerie', 'Pages.Paris.galerie')->name('galerie');
    Route::view('edition-2025', 'Pages.Paris.edition_2025')->name('edition_2025');
    Route::view('inscription', 'Pages.Paris.inscription')->name('inscription');
    Route::post('inscription/store', [ParisInscriptionController::class, 'store'])->name('inscription.store');
    Route::view('jury', 'Pages.Paris.jury')->name('jury');
    Route::view('comite-honneur', 'Pages.Paris.comite_honneur')->name('comite_honneur');
    Route::view('laureats', 'Pages.Paris.laureats')->name('laureats');
    Route::view(uri:'contact', view:'Pages.contact')->name(name:'contact');
    Route::post(uri:'contact/store', action:[ParisContactController::class ,'store'])->name(name:'contact.store');
});
