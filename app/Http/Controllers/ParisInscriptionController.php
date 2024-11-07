<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParisInscriptionRequest;
use App\Models\ParisInscription;
use Illuminate\Http\Request;

class ParisInscriptionController extends Controller
{
    public function store(ParisInscriptionRequest $parisInscriptionRequest){
        $validRequest = $parisInscriptionRequest->validated();
        ParisInscription::create($validRequest);
        return redirect()->back()->with('success','Votre inscription a réussi');
    }
}
