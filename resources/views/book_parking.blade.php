@extends('layouts/layout_centered')

        @section('content')
        <section class="flex-container">
            <h1 class="title">Welcome USER</h1>


            <div>
                <a href="{{ route('booking_detailed') }}">
                    <button class="reserve">Reserve now!</button>
                </a>
            </div>
        </section>
        @endsection
