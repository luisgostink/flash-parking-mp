<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Pathway+Gothic+One&display=swap" rel="stylesheet">
        
        @vite(['resources/css/main.scss', 'resources/js/app.js'])
  
        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
    <main>
       @include('header')

        <section class="flex-container">
            <div>
                <img src="{{ asset('icons/title-logo.svg') }}" class="title-logo" alt="title-logo">
            </div>
            <div class="slogan"> 
                The future of parking convenience
            </div>
            <div class="description">
                Say goodbye to parking hassles and long searches.  Find the perfect  spot quickly and easily.
            </div>
            <div>
                <button class="reserve">
                    Reserve now! 
                </button>
            </div>
          @include('footer')
        </section>
        
    </main>
    </body>
</html>
