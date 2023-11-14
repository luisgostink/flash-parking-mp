<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Pathway+Gothic+One&display=swap" rel="stylesheet">

        @vite(['resources/css/main.scss', 'resources/js/app.js'])
  
        
        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
    <main>
        <header class="header">
            <div class="nav-wrapper">
                <img src="{{ asset('icons/fast_parking.svg') }}" class="logo" alt="logo">
                <div class="spacer"></div>
                <img src="{{ asset('icons/menu.svg')}}" class="menu" alt="menu">
            </div>
            <div>
                <h1>Welcome to FastParking</h1>
            </div>
        </header>
    </main>
    </body>
</html>
