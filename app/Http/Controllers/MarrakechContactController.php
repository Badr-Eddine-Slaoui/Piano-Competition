<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarrakechContactRequest;
use App\Models\MarrakechContact;
use Illuminate\Http\Request;

class MarrakechContactController extends Controller
{
    public function store(MarrakechContactRequest $marrakechContactRequest){
        $validRequest = $marrakechContactRequest->validated();
        MarrakechContact::create($validRequest);
        return redirect()->back()->with('success','Message envoyé avec succès');
    }
}
