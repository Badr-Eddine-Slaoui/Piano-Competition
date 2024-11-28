<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParisReservation extends Model
{
    protected $fillable = ['nom','prenom','email','tel','billet'];
}
