@extends('layouts/layout_centered')

<script {{--src = "https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyCDKuPS4DK2CDWaA1ZuEbVJmHiGqGFjr7g"--}}>

// const  getLocation = document.getElementById('location');

// getLocation.addEventListener("click", () => {
//     navigator.geolocation.getCurrentPosition(
//         data => {
//             console.log(data); 
//         },
//         error => console.log(error)
//     );
// }); 

function getLocation() {
const successCallback = (position) => {
  console.log(position);
};

const errorCallback = (error) => {
  console.log(error);
}
}

navigator.geolocation.getCurrentPosition(successCallback, errorCallback);

</script>

        @section('content')
        <section class="flex-container">
            <h1 class="title">Welcome {{$user->name}}</h1>

            <div class="location" >
                <form id="locationForm">
                    <div class="flex-container">
                        <button id="location" class="available-btn" onclick="getLocation"> Get Location </button>
                       {{-- <input class="inputloc"type="text" name="location" placeholder="Current Location" required>--}}   
                        <img src="{{ asset('icons/location.svg') }}" class="location-logo" alt="location-logo">
                        <button class="available-btn " type="submit">View availability</button>
                    </div>
                </form>
            </div>

            @foreach($parkingSpots as $parking)

            <div class="parking-container">
                <h1 class="parking-title">{{$parking->name}}</h1>
                <p class="description">Address: {{$parking->address}}</p>
                <p class="description">Distance: TBD </p> 
                <p class="description"> EV Charging:
                    <label for="ev_charging">
                        <input type="checkbox" {{ $parking->ev_charging ? 'checked' : '' }} disabled>
                        {{ $parking->ev_charging ? 'Yes' : 'No' }}
                    </label>
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
