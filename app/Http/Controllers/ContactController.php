<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(ContactRequest $contactRequest){
        $validRequest = $contactRequest->validated();
        Contact::create($validRequest);
        return redirect()->back()->with('success','Message envoyé avec succès');
    }
}
