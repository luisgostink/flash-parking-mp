@extends('layouts/layout_centered')

        @section('content')
        <section class="flex-container">
            <h1 class="title">Welcome {{$user->name}}</h1>

            <div class="location" id="location" >
                <form id="locationForm">
                    <div class="flex-container">
                        <input class="inputloc"type="text" id="location" name="location" placeholder="Current Location" required>   
                        <button class="available-btn " type="submit">View availability</button>
                    </div>
                </form>
            </div>

            @foreach($parkingSpots as $parking)

            @if ($parking->blocked_until == null)
            
            <div class="parking-container">
                <h1 class="parking-title">{{$parking->name}}</h1>
                <p class="description">Address: {{$parking->address}}</p>
                <p class="description">Distance: TBD </p> 
                <p class="description">EV Charging: {{$parking->ev_charging}}</p>
                <div>
                    <a href="booking_detailed/{{$parking->id}}">
                        <button class="details-btn flex-container">View details</button>
                    </a>
                </div>
            </div>
            @else
            @endif
                @endforeach
            </section>
        @endsection
