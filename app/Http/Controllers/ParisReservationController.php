<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParisReservationRequest;
use App\Models\ParisReservation;
use Illuminate\Http\Request;

class ParisReservationController extends Controller
{
    public function store(ParisReservationRequest $parisReservationRequest){
        $validRequest = $parisReservationRequest->validated();
        ParisReservation::create($validRequest);
        return redirect()->back()->with('success','Reservation passé avec succès');
    }
}
