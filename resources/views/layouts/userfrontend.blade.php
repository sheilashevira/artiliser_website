<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('favicons.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Asap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    {{-- Flickity CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    {{-- Flickity JS --}}
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- COBA -->
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,700,700italic,100italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,300italic,400italic,600italic|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    
    <!-- Mobile viewport optimized -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Internet Explorer Compatibility string -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    
    <!-- JS -->       
    <script   src="https://code.jquery.com/jquery-3.0.0.min.js"   integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0="   crossorigin="anonymous"></script>
    <!-- /COBA -->

    <!-- Select2 CSS --> 
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />  -->

    <!-- jQuery --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

    <!-- Select2 JS --> 
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Profile Dropdown -->
    <style>
        .dropbtn {
        padding: 16px;
        }

        .dropdown {
        position: relative;
        display: inline-block;
        
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 100%;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
        }
    </style>

    <!-- Carousel -->
    <style>
        body {
            /* font-family: 'Asap', sans-serif; */
            background-color: #F8F0F8;
        }

        html{
            scroll-behavior: smooth;
        }

        #menu-toggle:checked + #menu {
            display: block;
        }

        .carousel-cell {
        width: 100%;
        }

        /* cell number */
        .carousel-cell:before {
        display: block;
        }

        .flickity-page-dots {
        bottom: -40px;
        }

        /* white circles */
        .flickity-page-dots .dot {
        width: 6px;
        height: 6px;
        opacity: 1;
        background: #D1D5DB;
        }
        /* fill-in selected dot */
        .flickity-page-dots .dot.is-selected {
        background: #670067;
        }
        .carousel-image {
        margin-right: 10px;
        }
    </style>
    
    <style>
        html,
        body {
            height: 100%;
        }

        @media (min-width: 640px) {
            table {
            display: inline-table !important;
            }

            thead tr:not(:first-child) {
            display: none;
            }
        }

        td:not(:last-child) {
            border-bottom: 0;
        }

        th:not(:last-child) {
            
        }
    </style>

</head>
<body >
    <div class="w-full text-gray-700 bg-transparent dark-mode:text-gray-200 dark-mode:bg-gray-800" style="font-family: 'Montserrat', sans-serif;">
        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 py-4 mx-auto lg:items-center lg:justify-between lg:flex-row lg:px-6 lg:px-8">
            <div class="flex flex-row items-center justify-between p-4">
                <a href="/home" ><img src="{{ asset('logo/logo2.png') }}" alt=""></a>
                <button class="rounded-lg text-artiliser lg:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-0 lg:pb-0 lg:flex lg:justify-end lg:flex-row">
                <!-- Authentication Links -->
                @guest
                    <a class="block px-4 py-1 border-b-2 border-transparent lg:p-4 hover:border-artiliser" href="/home">Home</a>
                    <a class="block px-4 py-1 border-b-2 border-transparent lg:p-4 hover:border-artiliser" href="/gallery">Gallery</a>
                    <a class="block px-4 py-1 border-b-2 border-transparent lg:p-4 hover:border-artiliser" href="/about">About</a>
                    <a class="block px-4 py-1 border-b-2 border-transparent lg:p-4 hover:border-artiliser lg:mb-0" href="#contact">Contact</a>
                    @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="flex items-center justify-start px-4 mb-3 lg:ml-4 lg:mb-0 lg:px-0 pointer-cursor">
                        <button class="px-3 py-1 bg-transparent border rounded-lg text-artiliser border-artiliser">Login</button>
                    </a>
                    @endif

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="flex items-center justify-start px-4 mb-4 lg:ml-4 lg:mb-0 lg:px-0 pointer-cursor">
                        <button class="px-3 py-1 text-white border rounded-lg bg-artiliser border-artiliser">Register</button>
                    </a>
                    @endif
                    <div class="hidden h-8 mt-3 mb-4 lg:flex lg:items-center lg:justify-start lg:border-l-2 lg:border-gray-300 lg:ml-4 lg:mb-0 pointer-cursor "></div>
                    <a href="#" class="flex items-center justify-start px-4 mb-4 lg:ml-4 lg:mb-0 lg:px-0 pointer-cursor text-artiliser">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                        </svg>
                    </a>
                @else
                    <a class="block px-4 py-1 border-b-2 border-transparent lg:p-4 hover:border-artiliser" href="/home">Home</a>
                    <a class="block px-4 py-1 border-b-2 border-transparent lg:p-4 hover:border-artiliser" href="/gallery">Gallery</a>
                    <a class="block px-4 py-1 border-b-2 border-transparent lg:p-4 hover:border-artiliser" href="/about">About</a>
                    <a class="block px-4 py-1 border-b-2 border-transparent lg:p-4 hover:border-artiliser lg:mb-0 " href="#contact">Contact</a>
                    <div class="dropdown" >
                        <button class="dropbtn flex flex-row" >
                            <a id="navbarDropdown" class="flex items-center justify-start pointer-cursor font-bold text-black "  href="/profile/{{ Auth::user()->id }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Hello, {{ Auth::user()->name }}
                            </a>
                            <img alt="..." src="https://i.pinimg.com/474x/f9/61/30/f961306179ce606db7bedb1d731436b6.jpg" class="rounded-full h-10 w-10 flex items-center justify-start ml-4 -mt-2" style="max-width: 150px;" >
                        </button>
                        <div class="dropdown-content">
                            <a href="/profile/{{ Auth::user()->id }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            </form>
                        </div>
                    </div>
                    <div class="hidden h-8 mt-3 mb-4 lg:flex lg:items-center lg:justify-start lg:border-l-2 lg:border-gray-300 lg:mb-0 pointer-cursor "></div>
                    <div class="cart flex items-center justify-start px-4 mb-4 lg:ml-4 lg:mb-0 lg:px-0 pointer-cursor text-artiliser">
                        <button onclick="myFunction5()" class="cart flex flex row">
                            <span class=" -mt-2 text-xs text-center items-center rounded-full bg-red-500 w-4 h-4 text-white">0</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                            </svg>
                        </button>
                    </div>
                @endguest   
            </nav>
        </div>
    </div>

    <div x-data="{show:false}" x-bind:class="{ 'model-open': show }" class="w-full text-gray-700 bg-transparent dark-mode:text-gray-200 dark-mode:bg-gray-800" >
            @yield('content')
    </div>

</body>
</html>