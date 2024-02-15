@extends('layouts.layout_centered')
@section('pageTitle', 'About Me')
@section('content')
        <section class="flex-container">
            <div>
                <img src="{{ asset('icons/logo-aboutme.svg') }}" class="about-me-logo" alt="title-logo">
            </div>
            <div class="about-me">
                <img class="profile-img" src="{{ asset('icons/profile-pic.png') }}"alt="profile-img">
                <h1 >Luis Gostin</h1>
            </div>
            
            <div class="description container-2">
                <p> Hello!  My name is Luis Gostin. 
                    I always define myself first as a musician 
                    because it's my first love, 
                    but I have also been interested in technology, 
                    due to my experience working as a freelance computer technician.  
                    This app is my masterpiece project for my 6 months apprenticeship I did at Opportunity Zurich. 
                </p>
            </div>

            <div class="description container-2">
                <p> FlashParking is a parking reservation service provided by Luis Gostin Krämer.
                    All content, including text, graphics, logos, and images, are property of Luis Gostin Krämer.
                    This app was developed using Laravel, a free, open-source PHP web framework and also HTML, SCSS and JavaScript.
                </p>
            </div>


            <div class="contact">
                <h3 style="font-family: 'Inter', sans-serif">Contact me: </h3>

                <a href="https://github.com/luisgostink" target="_blank">
                    <img src="{{ asset('icons/github.svg') }}" class="github-logo" alt="github-logo" >
                </a>
        
                 <a href="https://www.linkedin.com/in/luis-alberto-gost%C3%ADn-kr%C3%A4mer-a8129b188/" target="_blank">
                    <img src="{{ asset('icons/linkedin-2.svg') }}" class="linkedin-logo" alt="linkedin-logo">
                </a>
            </div>
            

        </section>
@endsection


