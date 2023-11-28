<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Welcome
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome2', function () {
    return view('welcome2');
})->name ('welcome2');

// Parking list
Route::get('/book_parking', [ParkingController::class, 'show_parking'])->name('parking_list');

// Booking_detailed
Route::get('/booking_detailed',  function () {
    return view('booking_detailed');
})->name ('booking_detailed');

// show selected parking.
Route::get('/booking_detailed/{id}', [ParkingController::class, 'show'])->name('parking_details');

// Confirm Booking 
Route::get ('/confirm_booking', function (){
    return view('booking_detailed');
})->name('confirm_booking');

// About me
Route::get('/about_me',  function () {
    return view('about_me');
})->name ('about_me');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});







require __DIR__.'/auth.php';
