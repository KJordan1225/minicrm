<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GA TEST CRM</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Favicon -->
        <link rel="shortcut-icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon"/>

        
         <!-- Bootstrap 5.0.2 CDN  -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


        

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
    </head>
    <style>
        .slot-container {
            margin: 0;
            padding: 0;
            background-image: url('assets/images/omega-shield-1.png');
            background-repeat: repeat;
            background-size: auto; 
            background-position-y: top;
            background-position-x: left; 
        }
    </style>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 slot-container">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                        }

                        .navbar {
                            background-color: #6D2077;
                        }

                        .nav-menu {
                            list-style-type: none;
                            margin: 0;
                            padding: 0;
                            display: flex;
                        }

                        .nav-menu li {
                            position: relative;
                        }

                        .nav-menu li a {
                            display: block;
                            color: #B7A57A;
                            padding: 14px 20px;
                            text-decoration: none;
                        }

                        .nav-menu li a:hover {
                            background-color: #B7A57A;
                            color: #6D2077;
                        }

                        .dropdown {
                            cursor: pointer;
                        }

                        .dropdown-content {
                            display: none;
                            position: absolute;
                            background-color: #6D2077;
                            min-width: 180px;
                            z-index: 1;
                        }

                        .dropdown-content a {
                            padding: 12px 16px;
                        }

                        .dropdown-content a:hover {
                            background-color: #B7A57A;
                            color: #6D2077;
                        }

                        .dropdown:hover .dropdown-content {
                            display: block;
                        }
                    
                    </style>

                    <div class="navbar">
                        <ul class="nav-menu">
                            <li><a href="{{ url('/') }}">
                                            Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropbtn">Programs</a>
                                <div class="dropdown-content">
                                    <a href="{{ route('achievementWeek') }}">Mandated Progams</a>
                                </div>
                            </li>                            
                            <li><a href="#event">Events</a></li>
                            <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                        </ul>  
                        <ul class="nav-menu">                         
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropbtn">Brothers Only</a>
                                    @auth
                                    <div class="dropdown-content">
                                        <a href="{{ url('/dashboard') }}">
                                            Dashboard
                                        </a>
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </div>
                                    @endauth

                                    @guest
                                    <div class="dropdown-content">
                                        <a href="{{ route('login') }}">Login</a>
                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                        @endif
                                    </div>
                                    @endguest
                            </li>
                        </ul>
                    </div>




                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">                           
                        </div>                       

                        
                    </header>
                    <main class="mt-6 flex justify-center items-center slot-container">

                    <style>
                        .image-container {
                            position: relative;
                            width: 100%;
                            height: 410px;
                            overflow: hidden;
                        }
                        .image-container img {
                            width: 100%;
                            height: 100%;
                            object-fit: fill;
                        }
                        .overlay-text {
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            color: white;
                            text-align: center;
                            font-size: 1.5rem;
                            font-weight: bold;
                            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
                        }                        
                    </style>

                        
                        <div class="image-container">
                            <img src="{{ asset('assets/images/founders-png.png') }}" alt="Founders Image">
                            <div class="overlay-text">
                                <p style="font-size: 3.0rem;">First Line of Text</p>
                                <p>Second Line of Text</p>
                            </div>
                        </div> 

                        <div class="slot-container">
                            
                            {{$slot}}
                        
                        </div>                        

                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70" style="background-color: #ffffff;">
                        GAMMA ALPHA v1.0.0
                    </footer>
                </div>
            </div>
        </div>
       
        <!-- Bootstrap 5.0.2 JS Script  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>
