@extends('layouts/layout_centered')

        @section('content')
        <section class="flex-container">
            <div id="background-img">
                <img src="{{ asset('icons/parking-bg-def.png') }}" class="" alt="">
            </div>
            <div>
                <img src="{{ asset('icons/title-logo.svg') }}" class="title-logo" alt="title-logo">
            </div>
            <div class="slogan"> 
                The future of parking convenience
            </div>
            <div class="description" id="description">
                <p>Say goodbye to parking hassles and long searches.  Find the perfect  spot quickly and easily.</p>
            </div>
            <div>
                <a href="{{ route('login') }}">
                    <button class="reserve">Reserve now!</button>
                </a>
            </div>
            @endsection

