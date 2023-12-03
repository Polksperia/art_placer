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
        <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
        
        <!-- Scripts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDc7Po3uKrdHo98hjS79JeLaVATbPj_TkA&callback=initMap" async defer></script>
        <script>
            // Function to initialize the map
            function initMap() {
                const center = { lat: -50.915336, lng: 24.247445 };
                const zoom = 2;
                
                // Initialize the map
                const map = new google.maps.Map(document.getElementById('map'), {
                    center: center,
                    zoom: zoom,
                });
                
                map.controls[google.maps.ControlPosition.BOTTOM_RIGHT].push(document.getElementById('map-container'));
            }
        </script>
        <!-- Styles -->
        <style>
            #map-container {
                position: fixed;
                width: 300px; /* Set the width of the map */
                height: 200px; /* Set the height of the map */
                border: 1px solid #ccc;
                border-radius: 5px;
                overflow: hidden;
            }
            
            #map {
                width: 100%;
                height: 100%;
            }   
        </style>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <header>
            @include('layouts.header')
        </header>
        <div>
            @yield('content')
        </div>
        <footer>
        </footer>
    </body>
</html>