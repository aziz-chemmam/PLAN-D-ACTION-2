<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
   
    public function store(Request $request)
    {
        $reservation =  Reservation::where(['annonceId' => $request->annonceId])->get();
        return view('seller.reservation',compact('reservation'));
        
     }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        $user_id = auth()->user()->id;
        $reservation = Reservation::where('user_id', $user_id)->get();
        return view('/seller.reservation',compact('reservation'));
    }


    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
