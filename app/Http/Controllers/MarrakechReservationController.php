<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarrakechReservationRequest;
use App\Models\MarrakechReservation;
use Illuminate\Http\Request;

class MarrakechReservationController extends Controller
{
    public function store(MarrakechReservationRequest $marrakechReservationRequest){
        $validRequest = $marrakechReservationRequest->validated();
        MarrakechReservation::create($validRequest);
        return redirect()->back()->with('success','Reservation passé avec succès');
    }
}
