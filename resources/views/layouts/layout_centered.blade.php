<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle') - Flashparking</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Pathway+Gothic+One&display=swap" rel="stylesheet">

    {{--favicon links--}}
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    @vite(['resources/css/main.scss', 'resources/js/app.js'])

</head>

<body class="@yield('body-class', 'default-background')">
    <main>
        <header class="header">
            <div class="nav-wrapper">
                <div class="menu-dropdown" id="main-nav">
                    <header class="header">
                        <div class="nav-wrapper">
                            <a href="/">
                                <img src="{{ asset('icons/fast_parking_white.svg') }}" class="logo" alt="logo">
                            </a>
                            <div class="spacer"></div>
                            <button class="menu-btn">
                                <img src="{{ asset('icons/menu_white.svg')}}" alt="menu button" onclick="toggle();">
                            </button>
                        </div>
                    </header>
                    <div class="flex-container menu-items">
                        <div><a href="{{'/'}}" class="active" style= "text-decoration: none" >Home</a></div>
                        <div><a href="{{'/about_me'}}" style= "text-decoration: none" >About me</a></div>
                            @guest
                                <a href="{{ route('login') }}" style="text-decoration: none;">{{ __('Log In') }}</a>
                            @else
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" style="text-decoration: none;"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            @endguest
                        <div><a href="{{'/book_parking'}}" style= "text-decoration: none">Reserve</a></div>
                    </div>
                    <div class="spacer"></div>
                    <footer class="footer">
                        <div class="footer-container">
                            <div class="first-row">
                                <p>&copy;{{date("Y")}}</p>
                                <img src="{{ asset('icons/fast_parking_white.svg') }}" class="footer-logo" alt="footer-logo">
                            </div>
                            <div class="second-row">
                                <p style="text-shadow: 2px 2px white ; ">Luis Gostin. All rights reserved.</p>
                            </div>
                        </div>
                    </footer>
                </div>

                <a href="/">
                    <img src="{{ asset('icons/fast_parking.svg') }}" class="logo" alt="logo">
                </a>
                <div class="spacer"></div>
                <button class="menu-btn">
                    <img src="{{ asset('icons/menu.svg')}}" alt="menu button" onclick="toggle();">
                </button>   
            </div>
        </header>

        @yield('content')
        
        <footer class="footer">
            <div class="footer-container">
                <div class="first-row">
                    <p>&copy;{{date("Y")}}</p>
                    <img src="{{ asset('icons/fast_parking.svg') }}" class="footer-logo" alt="footer-logo">
                </div>
                <div class="second-row">
                    <p style="text-shadow: 2px 2px #FFC61B; ">Luis Gostin. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </main>

    <script>
        function toggle() {
            document.getElementById('main-nav').classList.toggle('active')
            // document.getElementById('description').hidden = true
            console.log('toggle')
        }
    </script>

    @vite('resources/js/app.js' )
    
</body>
</html>