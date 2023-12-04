@extends('layouts/layout_centered')

        @section('content')
        <section class="flex-container">

            <h1 class="title">{{$parkingSpots->name}}</h1>

            <iframe src={{$parkingSpots->map_frame}}" width="600" height="450" style="border: 3px solid #FFC61B; border-radius: 6.45px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>

            <p class="description">Address: {{$parkingSpots->address}}</p>
            <p class="description">Distance: TBD </p> 
            <p class="description"> EV Charging:
                <label for="ev_charging">
                    <input type="checkbox" {{ $parkingSpots->ev_charging ? 'checked' : '' }} disabled>
                    {{ $parkingSpots->ev_charging ? 'Yes' : 'No' }}
                </label>
            </p>

          
            <div class="flex-container container-2"> 
                <form method="post" action="/confirm_booking/{{$parkingSpots->id}}"> {{-- Send the time and the ID of the selected parking spot--}}
                    @csrf

                    <div class="reservation">
                        <label for="reservation_time">Reservation Time:</label>
                        <input class="time" type="time" name="reservation_time" value="{{ old('reservation_time') }}" required>
                        @error('reservation_time')
                            <div>{{$message}}</div>
                        @enderror
                    </div>    

                    <div>
                        <button class="reserve" type="submit">Confirm now!</button>
                    </div>
                </form>
            </div>
        </section>
        @endsection

 