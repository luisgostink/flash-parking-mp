<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Pathway+Gothic+One&display=swap" rel="stylesheet">

@vite(['resources/css/main.scss', 'resources/js/app.js'])

<body>
    <main>
      
        <section class="flex-container">
            <section class="flex-container">
                <div id="background-img"></div>
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
            <div>
                @include('footer')
                <div class="spacer"></div>
            </div>
        
        </section>
    </main>
    </body>