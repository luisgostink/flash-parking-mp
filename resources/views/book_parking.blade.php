
@extends('layouts/layout_centered')
@section('pageTitle', 'Reserve')
@section('content')
        
        <section class="flex-container">
            <h1 class="title">Welcome {{$user->name}}</h1>

            @foreach($parkingSpots as $parking)

            <div class="parking-container" data-latitude="{{$parking->latitude}}" data-longitude="{{$parking->longitude}}">
                <h1 class="parking-title">{{$parking->name}}</h1>
                <p class="description">Address: {{$parking->address}}</p>
                <p class="description">Distance: </p>

                <p class="description"> EV Charging:
                    @if($parking->ev_charging)
                    <img src="{{ asset('icons/ticket.svg') }}" alt="available">
                    <span class="ev">Available</span>
                    @else
                    <img src="{{ asset('icons/ticket.svg') }}" alt="not available">
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

