
@extends('layouts/layout_centered')

        @section('content')
        <section class="flex-container">
            <h1 class="title">Welcome {{$user->name}}</h1>

            @foreach($parkingSpots as $parking)

            <div class="parking-container">
                <h1 class="parking-title">{{$parking->name}}</h1>
                <p class="description">Address: {{$parking->address}}</p>
                <p class="description">Distance </p>
                
                <p class="description">{{$parking->latitude}} </p>
                <p class="description">{{$parking->longitude}} </p>

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


        <script>
            // JavaScript code to fetch and display User coordinates
        let latitude;
        let longitude;
        
        // change this function to save the long and lat inside a variable
        function displayCoordinates(position) {
            // remove this stuff - we won't write any lat and long inside html
            const latitudeElement = document.getElementById("latitude");
            const longitudeElement = document.getElementById("longitude");
        
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
        
            // override the outside definded variables
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
        
        
        
        
        // grab all the parkingspots from html (document.querySelectorAll())
        
        // loop over the list of elements
        
        // grab lat and long of the parking spots (maybe write inside a data Attribute)
        
        // inside the loop calculate Distance and write back inside the prefered html element
        
        
        
        
        
        
        
        
        
        // Calculate Distance between the user location and each parking spot. 
          
            function calculateDistance(userLat, userLng, parkingLat, parkingLng) {
            const earthRadius = 6371; // Earth's radius in kilometers
        
            const lat1 = toRadians(userLat);
            const lon1 = toRadians(userLng);
            const lat2 = toRadians(parkingLat);
            const lon2 = toRadians(parkingLng);
        
            const dLat = lat2 - lat1;
            const dLon = lon2 - lon1;
        
            const a =
                Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(lat1) * Math.cos(lat2) * Math.sin(dLon / 2) * Math.sin(dLon / 2);
        
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        
            const distanceInKilometers = earthRadius * c; // Distance in kilometers
            const distanceInMeters = distanceInKilometers * 1000; // Convert to meters
        
            return distanceInMeters.toFixed(2); // Round to 2 decimal places
        }
        
        function toRadians(degrees) {
            return degrees * (Math.PI / 180);
        }
        
         
        alert(calculateDistance(, , 47.375167, 8.534923) + " meters");
        
        </script>
        
