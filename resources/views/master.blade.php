<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Inter&family=Squada+One&display=swap" rel="stylesheet">
        <link rel ="icon" href ="\images\artplacer-icon.png" type ="image/x-icon"> 

        <!-- Scripts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            .responsive-image {
                height: auto;
                width: 100vw;
                display: block;
                margin: 0 auto;
            }

            .main-bg {
                background-color: rgba(33, 37, 41, 0.9);
                border-radius: 20px;
            }
        </style>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <header>
            @yield('header')
        </header>
        <body style="background-color:#313538;">
        <div>
            @yield('content')
        </div>
        <footer>
            @include('layouts.footer')
        </footer>
    </body>
</html>