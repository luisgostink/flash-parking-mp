<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/main.scss', 'resources/js/app.js'])
    @yield('head')
</head>
<body>
    
        <header class="header">
            <div class="nav-wrapper">
                <img src="{{ asset('icons/fast_parking.svg') }}" class="logo" alt="logo">
                <div class="spacer"></div>
                <img src="{{ asset('icons/menu.svg')}}" class="menu" alt="menu">
            </div>
        </header>

        @yield('content')
        
        <footer class="flex-container footer">
            <img src="{{ asset('icons/copyright.svg') }}" class="menu" alt="copyright">
            <img src="{{ asset('icons/fast_parking.svg') }}" class="logo" alt="logo">
        </footer>


</body>
</html>