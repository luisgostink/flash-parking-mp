@extends('layouts/layout_centered')

        @section('content')
        <section class="flex-container">
            <h1 class="parking-title">Congratulations {{$user->name}}</h1>
            <p class="description">Your parking spot is reserved!</p>

            <img src="{{ asset('icons/verified.svg') }}" class="verified" alt="">


            <div class="description">
                <p>Adress: </p>
                <p>EV Charging:</p>
            </div>
            
            <div>
                <a href="{{ route('confirm_booking') }}">
                    <button class="reserve">Navigate!</button>
                </a>
            </div>
        </section>
        @endsection