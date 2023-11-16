<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Parking list
Route::get('/book_parking',  function () {
    return view('book_parking');
})->name ('book_parking');

// Booking_detailed
Route::get('/booking_detailed',  function () {
    return view('booking_detailed');
})->name ('booking_detailed');

// Confirm Booking 
Route::get ('/confirm_booking', function (){
    return view('booking_detailed');
})->name('confirm_booking');

// About me
Route::get('/about_me',  function () {
    return view('about_me');
})->name ('about_me');

/* 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
