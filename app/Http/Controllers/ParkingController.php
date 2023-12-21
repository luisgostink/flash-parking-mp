<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parking;

use Carbon\Carbon; 

class ParkingController extends Controller
{
    // show list of all parking spots.

    public function show_parking(){
        $user = auth()->user(); 

        $currentDateTime = now(); // Assuming you have Carbon or similar for working with dates and times

        $parkingSpots = Parking::where(function ($query) use ($currentDateTime) {
            $query->where('blocked_until', '<', $currentDateTime) ->orWhere('blocked_until', null);
        })->get();

        return view('book_parking', ['parkingSpots' => $parkingSpots, 'user' => $user]);

    }

    // show selected parking spot.
    public function show($id){
        $user = auth()->user(); 
        $parkingSpots = Parking::find($id);
        return view('booking_detailed', ['parkingSpots' => $parkingSpots]);
    }

    public function book_parking (Request $request, $id){

    //Parse the reservation_time input from the user. 
    $request->reservation_time = Carbon::createFromFormat('Y-m-d H:i', Carbon::now()->toDateString(). " " .$request->reservation_time)->toDateTimeString();



    //  Request validation
    //  $request->validate([
    //  'reservation_time' => 'required|date_format:Y-m-d H:i:s'
    //  ]);

    $user = auth()->user(); 
    $parkingSpots = Parking::find($id);
    // Write data from the form in the DB. 
    $parkingSpots->blocked_until = $request->reservation_time; 
    $parkingSpots->user_id = $user->id; 
    $user->reservations();
    $parkingSpots->save();

    // Redirect to Google Maps 
    $latitude = $parkingSpots->latitude;
    $longitude = $parkingSpots->longitude;

    $navLink = "https://www.google.com/maps/dir/?api=1&destination=$latitude,$longitude";


    return view('confirm_booking', [
        'parkingSpots' => $parkingSpots,
        'user' => $user,
        'id' => $id,
        'navLink' => $navLink
    ]);
    }
}


