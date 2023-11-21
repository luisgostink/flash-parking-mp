@extends('layouts/layout_centered')

        @section('content')
        <section class="flex-container">
            <h1 class="title">Parking Title</h1>

            <iframe src="" frameborder="0"></iframe>
            
            <div class="description">
                <p class=>Adress: </p>
                <p>EV Charging: </p>
            </div>
            
            <div>
                <a href="{{ route('confirm_booking') }}">
                    <button class="reserve">Confirm now!</button>
                </a>
            </div>
        </section>
        @endsection
