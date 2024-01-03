@extends('layouts/layout_centered')

        @section('content')
        <section class="flex-container">
            <h1 class="parking-title">Congratulations {{$user->name}}</h1>
            <p class="description">Your parking spot is reserved!</p>

            <img src="{{ asset('icons/verified.svg') }}" class="verified" alt="">

            <p class="description"> Adress: {{$parkingSpots->address}} </p>
            
            <a class="reserve" href="{{$navLink}}" target="_blank">
                <img src="{{ asset('icons/car.svg') }}" class="car" alt="car">
                <span>Navigate</span>
            </a>

        </section>
        @endsection