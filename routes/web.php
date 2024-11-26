<?php

use App\Http\Controllers\MarrakechContactController;
use App\Http\Controllers\MarrakechController;
use App\Http\Controllers\MarrakechInscriptionController;
use App\Http\Controllers\ParisContactController;
use App\Http\Controllers\ParisController;
use App\Http\Controllers\ParisInscriptionController;
use Illuminate\Support\Facades\Route;


Route::view(uri: '/', view: 'index')->name(name: 'home');

Route::prefix('marrakech')->as('marrakech.')->group(function () {
    Route::controller(MarrakechController::class)->group(function (){
        Route::get('/', 'index')->name('home');
        Route::get('presentation', 'presentation')->name('presentation');
        Route::get('galerie', 'galerie')->name('galerie');
        Route::get('edition-2025', 'edition_2025')->name('edition_2025');
        Route::get('inscription', 'inscription')->name('inscription');
        Route::get('jury', 'jury')->name('jury');
        Route::get('comite-honneur', 'comite_honneur')->name('comite_honneur');
        Route::get('laureats', 'laureats')->name('laureats');
        Route::get('contact', 'contact')->name('contact');
        Route::get('reglement', 'reglement')->name('reglement');
    });
    Route::post('inscription/store', [MarrakechInscriptionController::class, 'store'])->name('inscription.store');
    Route::post('contact/store', [MarrakechContactController::class ,'store'])->name('contact.store');
});

Route::prefix('paris')->as('paris.')->group(function () {
    Route::controller(ParisController::class)->group(function (){
        Route::get('/', 'index')->name('home');
        Route::get('presentation', 'presentation')->name('presentation');
        Route::get('galerie', 'galerie')->name('galerie');
        Route::get('edition-2025', 'edition_2025')->name('edition_2025');
        Route::get('inscription', 'inscription')->name('inscription');
        Route::get('jury', 'jury')->name('jury');
        Route::get('comite-honneur', 'comite_honneur')->name('comite_honneur');
        Route::get('laureats', 'laureats')->name('laureats');
        Route::get('contact', 'contact')->name('contact');
        Route::get('reglement', 'reglement')->name('reglement');
    });
    Route::post('inscription/store', [ParisInscriptionController::class, 'store'])->name('inscription.store');
    Route::post('contact/store', [ParisContactController::class ,'store'])->name('contact.store');
});
