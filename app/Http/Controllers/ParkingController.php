<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parking;
use Carbon\Carbon; 

use Illuminate\Validation\ValidationException;

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

    public function confirm_booking (Request $request, $id){

    // dd('Reached confirm_booking method'); DEV ONLY Confirm booking route is working. 

   $request->merge([
    'reservation_time' => Carbon::createFromFormat('H:i', $request->reservation_time)->format('Y-m-d H:i:s')
   ]);

     
    // DEV ONLY App is handling the request. 

    //  Request validation
     $request->validate([
     'reservation_time' => 'required|date|date_format:Y-m-d H:i:s|after_or_equal:now'
     ]);

    $user = auth()->user(); 
    $parkingSpots = Parking::find($id);

    // 
    //  // Check if the user has already reserved two parking spots
    //     if ($user->reservations()->count() >= 2) {
    //         throw ValidationException::withMessages(['overbooked' => 'You can only reserve a maximum of two parking spots at the same time.']);
    //     }


    // Write data from the form in the DB. 
    $parkingSpots->blocked_until = $request->reservation_time; 
    $parkingSpots->user_id = $user->id; 
    $parkingSpots->save();

 //   dd($request->reservation_time);

    // Redirect to Google Maps to Navigate
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


