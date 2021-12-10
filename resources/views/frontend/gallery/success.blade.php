<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success !</title>

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
        <img class="w-36 h-32 mb-8" src="https://s3-alpha-sig.figma.com/img/9538/665f/59627ee72f526f80e63e84ec3681e9f0?Expires=1626652800&Signature=K0BkbLO9wrYeu9ET4lCAdgv56XYkpHwKxcFHFbmN7gYMVcAGhqnzMxGtQ86uNR-uifyEm04utBfB7Gpdh8rc06Xd4U~jQCmNovoUGxFiJEb2cUfHZSxn3wlUzuaWET4Bqw29rdQb2MbAaVAhc7modKRbJruhL9cMnRXJz2o5Y-Mjo-zFMKkDWZVlEJBBaAtvEPjMLXQb2fR4xJ4ssXeU0m6Aw0r~eAC8znhxhPmI-AX5f-A47t7qoaHfKMcXDPt05VdkVAwG7lj42yg8B1r52AIOclsgGMoVBeqL9R-57wkaS1U6Dj0dzUDxFHxmn2Ig9NkBi95lrysQ1QhrirEJRQ__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA" >
        <div class="flex flex-col h-full w-full justify-center items-center">
            <h1 class=" text-center text-artiliser font-bold text-2xl mb-4" style="font-family:'Asap';">
                Order success
            </h1>
            <p class="text-xs text-center leading-loose mx-2 " style="color:#6C656C; font-family: 'Montserrat';">
                We have received your order, your order will be processed, and the details will be sent to your email.
            </p>
        </div>
        <div class="flex flex-col w-24 ">
            <a href="/gallery" type="button" style="border-color:#670067; " class="mt-4 hover:bg-artiliserdark justify-center items-center hover:text-white text-white border-artiliser bg-artiliser rounded  text-center py-1 text-xs lg:text-xs border-2 rounded-md shadow-sm">
                Done
            </a>
        </div>
    </div>
  </div>
</body>
</html>