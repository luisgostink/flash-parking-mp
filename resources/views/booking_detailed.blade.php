@extends('layouts/layout_centered')

        @section('content')
        <section class="flex-container">

            <h1 class="title">{{$parkingSpots->name}}</h1>

            <iframe src={{$parkingSpots->map_frame}}" width="600" height="450" style="border: 3px solid #FFC61B; border-radius: 6.45px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>

            <p class="description">Address: {{$parkingSpots->address}}</p>
            <p class="description">Distance: TBD </p> 
            <p class="description">EV Charging: {{$parkingSpots->ev_charging}}</p>
            
            <div>
                <a href="{{ route('confirm_booking') }}">
                    <button class="reserve">Confirm now!</button>
                </a>
            </div>
        </section>
        @endsection

 