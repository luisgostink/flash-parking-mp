@extends('layouts/layout_centered')

        @section('content')
        <section class="flex-container">
            <h1 class="parking-title">Congratulations {{$user->name}}</h1>
            <p class="description">Your parking spot is reserved!</p>

            <img src="{{ asset('icons/verified.svg') }}" class="verified" alt="">


            <div class="description">
                <p>Adress: {{$parkingSpots->address}}</p>
            </div>
            
            <div>
                <a class="reserve" href="{{$navLink}}" target="_blank">
                    Navigate
                </a>
            </div>
        </section>
        @endsection