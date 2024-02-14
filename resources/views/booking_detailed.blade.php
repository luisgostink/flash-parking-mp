@extends('layouts/layout_centered')
@section('pageTitle', 'details')
    @section('content')
        <section class="flex-container">

            <h1 class="parking-title">{{$parkingSpots->name}}</h1>

            <iframe src={{$parkingSpots->map_frame}}" width="600" height="450" style="border: 3px solid #FFC61B; border-radius: 6.45px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>

            <div class="parking-description">
                <p >Address: {{$parkingSpots->address}}</p>
                {{-- <p >Distance: </p> --}}
                <p > EV Charging:
                    @if($parkingSpots->ev_charging)
                    <img src="{{ asset('icons/ticket.svg') }}" alt="available">
                    <span class="ev">Available</span>
                    @else
                    <img src="{{ asset('icons/ticket.svg') }}" alt="not available">
                    <span class="ev">Not Available</span>
                    @endif
                </p>
            </div>

          
            <div class="flex-container container-2"> 
                <form method="post" action="{{ route('confirm_booking', ['id' => $parkingSpots->id]) }}"> {{-- Send the time and the ID of the selected parking spot--}}
                    @csrf

                    <div class="reservation">
                        <label for="reservation_time">Reservation Time:</label>
                        <input class="time" type="time" name="reservation_time" value="{{ old('reservation_time') }}" required>
                        @error('reservation_time')
                            <div>{{$message}}</div>
                        @enderror
                        
                    </div>    

                    <button class="reserve" type="submit">
                        <img src="{{ asset('icons/car.svg') }}" class="car" alt="car">
                        <span>Confirm now!</span>
                    </button>
                </form>
            </div>
        </section>
        @endsection


        