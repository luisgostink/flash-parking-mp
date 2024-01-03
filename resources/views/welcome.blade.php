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

            <a class="reserve" href="{{ route('login') }}" >
                <img src="{{ asset('icons/car.svg') }}" class="car" alt="car">
                <span>Reserve now!</span>
            </a>

            <div class="features" id="features">
                <div class="column">
                    <!-- Content for the first column, first row -->
                    <h2>Instant Spot Locator</h2>
                    <img src="{{ asset('icons/lightning-1.svg') }}" class="" alt="">
                    <p>Say goodbye to endless searching! Flash Parking pinpoints the closest available parking spots within seconds, saving you time and stress.</p>
                </div>
        
                <div class="column">
                    <!-- Content for the second column, first row -->
                    <h2>User-Friendly Interface</h2>
                    <img src="{{ asset('icons/user.svg') }}" class="" alt="">
                    <p>Our intuitive app is designed with your convenience in mind. Whether you're a tech pro or a newbie, you'll navigate Flash Parking effortlessly.</p>
                </div>
        
                <div class="column">
                    <!-- Content for the third column, first row -->
                    <h2>Accessible Parking Assistance</h2>
                    <img src="{{ asset('icons/accessibility.svg') }}" class="" alt="">
                    <p>Centered in people with reduced mobility. </p>
                </div>
        
                <div class="column">
                    <!-- Content for the first column, second row -->
                    <h2>Reservation System</h2>
                    <img src="{{ asset('icons/calendar.svg') }}" class="" alt="">
                    <p>Introduce a reservation system that enables users to book parking spots in advance. This is particularly useful for events, busy city areas, or high-demand locations. Users can secure their parking space, reducing stress and ensuring they have a spot waiting for them when they arrive.</p>
                </div>
        
                <div class="column">
                    <!-- Content for the second column, second row -->
                    <h2>Security First</h2>
                    <img src="{{ asset('icons/secure.svg') }}" class="" alt="">
                    <p>We take your privacy and data protection seriously. Your information is safe and secure with Fast Parking.</p>
                </div>
        
                <div class="column">
                    <!-- Content for the third column, second row -->
                    <h2>Multilingual Support</h2>
                    <img src="{{ asset('icons/multi.svg') }}" class="" alt="">
                    <p>It includes a multilingual interface. Users can choose their preferred language between English, Spanish and German. 
                    Accessible to a global audience, commited with inclusivity. </p>
                </div>
            </div>
            
            <div class="description" style="font-size: 5rem" id="description">
                <p>Still not convinced?</p>
            </div>

            <a class="reserve" href="{{ route('login') }}" >
                <img src="{{ asset('icons/car.svg') }}" class="car" alt="car">
                <span>Try it out!</span>
            </a>
            
        </section>
            @endsection

            
            

