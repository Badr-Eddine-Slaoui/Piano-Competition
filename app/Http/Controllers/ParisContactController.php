<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParisContactRequest;
use App\Models\ParisContact;
use Illuminate\Http\Request;

class ParisContactController extends Controller
{
    public function store(ParisContactRequest $parisContactRequest){
        $validRequest = $parisContactRequest->validated();
        ParisContact::create($validRequest);
        return redirect()->back()->with('success','Message envoyé avec succès');
    }
}
