<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Pathway+Gothic+One&display=swap" rel="stylesheet">

    @vite(['resources/css/main.scss', 'resources/js/app.js' ])

</head>

<body>
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
                        <div><a href="{{'about_me'}}" style= "text-decoration: none" >About me</a></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" style="text-decoration: none;"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        <div><a href="{{'book_parking'}}" style= "text-decoration: none">Reserve</a></div>
                    </div>

                    <footer class="footer">
                        <hr>
                        <div class="footer-container">
                            <img src="{{ asset('icons/copyright.svg') }}" class="copyright" alt="copyright">
                            <img src="{{ asset('icons/fast_parking_white.svg') }}" class="footer-logo" alt="footer-logo">
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
            <hr>
            <div class="footer-container">
                <img src="{{ asset('icons/copyright.svg') }}" class="copyright" alt="copyright">
                <img src="{{ asset('icons/fast_parking.svg') }}" class="footer-logo" alt="footer-logo">
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
</body>
</html>