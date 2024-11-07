<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarrakechInscription extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'lieu_naissance',
        'nationalite',
        'type_document',
        'numero_document',
        'adresse',
        'code_postal',
        'ville',
        'tele',
        'email',
        'langues_parlees',
        'nom_professeur',
        'etablissement_musical',
        'categorie',
        'oeuvre',
    ];
}
