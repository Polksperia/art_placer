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
                const center = { lat: 41.90476224706472, lng: 12.49822074385094 };
                const zoom = 14;

                // Initialize the map
                const map = new google.maps.Map(document.getElementById('map'), {
                    center: center,
                    zoom: zoom,
                });
            }
        </script>
        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <header>

        </header>
        <div>
            @yield('content')
        </div>
        <footer>
        </footer>
    </body>
</html>