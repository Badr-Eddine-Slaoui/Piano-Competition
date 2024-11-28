<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarrakechReservation extends Model
{
    protected $fillable = ['nom','prenom','email','tel','billet'];
}
