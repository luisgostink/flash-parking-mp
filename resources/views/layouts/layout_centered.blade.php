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
                <img src="{{ asset('icons/fast_parking.svg') }}" class="logo" alt="logo">
                <div class="spacer"></div>
                <button class="menu-btn">
                    <img src="{{ asset('icons/menu.svg')}}" class="menu-btn" alt="menu button" onclick="toggle();">
                    Hello
                </button>
                <div class="menu-dropdown" id="main-nav">
                    <a href="#home" class="active">Home</a>
                    <a href="#about">About Me</a>
                    <a href="#login">Login</a>
                    <a href="#reserve">Reserve</a>
                </div>
            </div>
        </header>

        @yield('content')
        
        <footer class="flex-container footer">
            <img src="{{ asset('icons/copyright.svg') }}" class="menu" alt="copyright">
            <img src="{{ asset('icons/fast_parking.svg') }}" class="logo" alt="logo">
        </footer>
    </main>

    <script>
        function toggle() {
        document.getElementById('main-nav').classList.toggle('active')
        console.log('toggle')
    }
    </script>
</body>
</html>