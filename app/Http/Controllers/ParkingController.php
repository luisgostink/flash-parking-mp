<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parking;

class ParkingController extends Controller
{
    // show list of all parking spots.

    public function show_parking(){
        $user = auth()->user(); 
        $parkingSpots = Parking::all();
        return view('book_parking', ['parkingSpots' => $parkingSpots, 'user' => $user]);

    }


    


}
