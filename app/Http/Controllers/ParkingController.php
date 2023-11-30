<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parking;
use Carbon\Carbon; 

class ParkingController extends Controller
{
    // show list of all parking spots.

    // where clause to filter only the available parking spots (unblocked)

    public function show_parking(){
        $user = auth()->user(); 
        $parkingSpots = Parking::all();
        return view('book_parking', ['parkingSpots' => $parkingSpots, 'user' => $user]);

    }

    // show selected parking spot.
    public function show($id){
        $user = auth()->user(); 
        $parkingSpots = Parking::find($id);
        return view('booking_detailed', ['parkingSpots' => $parkingSpots]);
    }

    public function confirm_booking (Request $request, $id){
    //   dd($request);

    //Parse the reservation_time input from the user. 
    $request->reservation_time = Carbon::createFromFormat('Y-m-d H:i', Carbon::now()->toDateString(). " " .$request->reservation_time)->toDateTimeString();
    // dd($request->reservation_time); 

    // Request validation
    // $request->validate([
    // 'reservation_time' => 'required|date_format:Y-m-d H:i:s'

// ]);
    $user = auth()->user(); 
    $parkingSpots = Parking::find($id);

    // Write a new entry or overwrite the entry in the DB. 
    $parkingSpots->blocked_until = $request->reservation_time; 
    $parkingSpots->save(); 
    return view('confirm_booking', ['parkingSpots' => $parkingSpots, 'user' => $user, 'id' => $id]);
}



}
