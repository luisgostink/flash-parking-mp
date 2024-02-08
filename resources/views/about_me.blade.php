@extends('layouts.layout_centered')
@section('pageTitle', 'About Me')
@section('content')
        <section class="flex-container">
            <div>
                <img src="{{ asset('icons/logo-aboutme.svg') }}" class="title-logo" alt="title-logo">
            </div>
            <div class="title">
                <img class="profile-img" src="{{ asset('icons/profile-pic.png') }}"alt="profile-img">
                <h1 >Luis Gostin</h1>
            </div>
            
            <div class="description container-2">
                <p> Hello!  My name is Luis Gostin. 
                    I always define myself first as a musician 
                    because it's my first love, 
                    but I have also been interested in technology, 
                    due to my experience working as a freelance computer technician.  
                    This app is my masterpiece project for my 6 months apprenticeship I did at Opportunity Zurich (...)
                </p>
            </div>

            <div class="description container-2">
                <p> Hello!  My name is Luis Gostin. 
                    I always define myself first as a musician 
                    because it's my first love, 
                    but I have also been interested in technology, 
                    due to my experience working as a freelance computer technician.  
                    This app is my masterpiece project for my 6 months apprenticeship I did at Opportunity Zurich (...)
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


