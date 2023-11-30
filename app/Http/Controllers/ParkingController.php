<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parking;

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
        // dd('show');
        return view('booking_detailed', ['parkingSpots' => $parkingSpots]);
    }

    public function confirm_booking($id){
        $user = auth()->user(); 
        $parkingSpots = Parking::find($id);
        return view('confirm_booking', ['parkingSpots' => $parkingSpots, 'user' => $user, 'id' => $id]);
    }
    


}
