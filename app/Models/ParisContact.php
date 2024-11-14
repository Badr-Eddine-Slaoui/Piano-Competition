<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParisContact extends Model
{
    protected $fillable = ['nom_complet','email','message'];
}
