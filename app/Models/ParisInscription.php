<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParisInscription extends Model
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
        'incription_email',
        'langues_parlees',
        'nom_professeur',
        'etablissement_musical',
        'categorie',
        'oeuvre',
    ];
}
