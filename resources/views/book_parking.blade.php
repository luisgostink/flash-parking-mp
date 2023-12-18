@extends('layouts/layout_centered')

<script>
    // JavaScript code to fetch and display coordinates
    function displayCoordinates(position) {
        const latitudeElement = document.getElementById("latitude");
        const longitudeElement = document.getElementById("longitude");

        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;

        latitudeElement.textContent = latitude.toFixed(6);
        longitudeElement.textContent = longitude.toFixed(6);
    }

    function displayError(error) {
        const latitudeElement = document.getElementById("latitude");
        const longitudeElement = document.getElementById("longitude");

        latitudeElement.textContent = "Error fetching latitude";
        longitudeElement.textContent = "Error fetching longitude";
    }

    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(displayCoordinates, displayError);
    } else {
        const latitudeElement = document.getElementById("latitude");
        const longitudeElement = document.getElementById("longitude");

        latitudeElement.textContent = "Geolocation is not available in this browser.";
        longitudeElement.textContent = "Geolocation is not available in this browser.";
    }
</script>

        @section('content')
        <section class="flex-container">
            <h1 class="title">Welcome {{$user->name}}</h1>

            <div class="description">
                <h1 class="parking-title">Your Coordinates</h1>
                <p>Latitude: <span id="latitude">Loading...</span></p>
                <p>Longitude: <span id="longitude">Loading...</span></p>
            </div>


            @foreach($parkingSpots as $parking)

            <div class="parking-container">
                <h1 class="parking-title">{{$parking->name}}</h1>
                <p class="description">Address: {{$parking->address}}</p>
                <p class="description">Distance: TBD </p> 
                <p class="description"> EV Charging:
                    @if($parking->ev_charging)
                    <img src="{{ asset('icons/ticket.svg') }}" alt="yes">
                    <span class="ev">Available</span>
                    @else
                    <img src="{{ asset('icons/ticket.svg') }}" alt="yes">
                    <span class="ev">Not Available</span>
                    @endif
                </p>

                <div>
                    <a class="details-btn flex-container" href="booking_detailed/{{$parking->id}}">
                        View details
                    </a>
                </div>
            </div>
            @endforeach
            </section>
        @endsection
