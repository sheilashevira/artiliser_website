<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title}}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Asap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    {{-- Alpine JS --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    {{-- Flickity CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    {{-- Flickity JS --}}
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/selector.css') }}">

    <style>
        body {
            /* font-family: 'Asap', sans-serif; */
            background-color: #F8F0F8;
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
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer ></script>
</head>
<body>
  <div class="w-screen h-screen flex justify-center items-center">
    <div class="w-96 flex flex-col justify-center items-center">
        <img class="w-48 h-48 mb-4" src="https://cdn.iconscout.com/icon/free/png-512/404-page-not-found-456876.png" >
        <div class="flex flex-col h-full w-full justify-center items-center">
            <h1 class=" text-center text-artiliser font-bold text-2xl mb-4" style="font-family:'Asap';">
                Page not found
            </h1>
            <p class="text-xs text-center leading-loose mx-2 " style="color:#6C656C; font-family: 'Montserrat';">
                We're sorry, the page you requested could not be found. Please go back to the homepage or contact us at artiliser@gmail.com.
            </p>
        </div>
    </div>
  </div>
</body>
</html>