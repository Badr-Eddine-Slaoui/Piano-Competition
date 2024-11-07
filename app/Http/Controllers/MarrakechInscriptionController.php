<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarrakechInscriptionRequest;
use App\Models\MarrakechInscription;
use Illuminate\Http\Request;

class MarrakechInscriptionController extends Controller
{
    public function store(MarrakechInscriptionRequest $marrakechInscriptionRequest){
        $validRequest = $marrakechInscriptionRequest->validated();
        MarrakechInscription::create($validRequest);
        return redirect()->back()->with('success','Votre inscription a réussi');
    }
}
