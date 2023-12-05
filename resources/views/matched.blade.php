@extends('master-clean')

@section('title', 'ArtPlacer - Play')

@section('content')
<div class="container-fluid position-relative text-white">
  <div class="position-absolute top-0 end-0">
    <div class="d-flex justify-content-end">
      <div class="small-bg rounded px-4">
        <p style="font-size: 1.5rem;font-family: 'Days One', sans-serif;">Streak:</p>
        <p style="font-size: 1.5rem;font-family: 'Days One', sans-serif;">0</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-8 p-0">
      <div class="query-container text-center">
        <h1 class="font-weight-bold mb-4 outlined-text-small" style="font-family: 'Squada One', sans-serif; font-size: 4rem;">Guess!</h1>
        <div class="image-container">
          <img src="{{ $imageName }}" alt="Painter's Painting" class="responsive-image">
        </div>
        <p>Selected Country: <span id="selectedCountryName"></span></p>
      </div>
    </div>
    <div class="col-sm-4 text-center" style="padding-top: 10rem;">
      <div class="small-bg rounded px-4">
        <p style="font-size: 1.5rem;font-family: 'Days One', sans-serif;">Correct!</p>
        <p style="font-size: 1rem;font-family: 'Inter', sans-serif;">Correct!</p>
      </div>
    </div>
  </div>
</div>
<div id="map-container">
  <div id="map" style="height: 100vh;"></div>
</div>

<script>
    // Function to initialize the map
    function initMap() {
                const center = { lat: -50.915336, lng: 24.247445 };
                const zoom = 2;
                mapTypeId: google.maps.MapTypeId.ROADMAP
                
                // Initialize the map
                const map = new google.maps.Map(document.getElementById('map'), {
                    center: center,
                    zoom: zoom,
                });

                var styles = [
                    {
                    stylers: [
                        { hue: "#00ffe6" },
                        { saturation: -20 }
                    ]
                    },
                    {
                    featureType: "landscape",
                    stylers: [
                        { hue: "#ffff66" },
                        { saturation: 100 }
                    ]
                    },{
                    featureType: "road",
                    stylers: [
                        { visibility: "off" }
                    ]
                    },{
                    featureType: "administrative.land_parcel",
                    stylers: [
                        { visibility: "off" }
                    ]
                    },{
                    featureType: "administrative.locality",
                    stylers: [
                        { visibility: "off" }
                    ]
                    },{
                    featureType: "administrative.neighborhood",
                    stylers: [
                        { visibility: "off" }
                    ]
                    },{
                    featureType: "administrative.province",
                    stylers: [
                        { visibility: "off" }
                    ]
                    },{
                    featureType: "landscape.man_made",
                    stylers: [
                        { visibility: "off" }
                    ]
                    },{
                    featureType: "landscape.natural",
                    stylers: [
                        { visibility: "off" }
                    ]
                    },{
                    featureType: "poi",
                    stylers: [
                        { visibility: "off" }
                    ]
                    },{
                    featureType: "transit",
                    stylers: [
                        { visibility: "off" }
                    ]
                    }
                ];

                map.setOptions({styles: styles});

                var countryLayer = new google.maps.Data();
                countryLayer.loadGeoJson('/tables/ne_50m_admin_0_countries.geojson'); // Adjust the path as needed
                countryLayer.setStyle({
                    fillOpacity: 0,
                    strokeWeight: 0,
                    strokeColor: '#ffffff', // Outline color
                    strokeOpacity: 1,
                    fillColor: '#000000' // Default fill color
                });

                countryLayer.setMap(map);

                // Event listeners for mouseover and mouseout
                countryLayer.addListener('mouseover', function(event) {
                    countryLayer.overrideStyle(event.feature, { fillOpacity: 0.4 });
                });

                countryLayer.addListener('mouseout', function(event) {
                    countryLayer.revertStyle();
                });

                // Add a click event listener to the country feature
                countryLayer.addListener('click', function(event) {
                    var selectedCountry = event.feature.getProperty('ADMIN');
                    alert('Clicked on: ' + selectedCountry);
                    // Perform actions based on the clicked country
                    document.getElementById('selectedCountryName').innerText = selectedCountry;
                    compare(selectedCountry)
                });
                
                map.controls[google.maps.ControlPosition.BOTTOM_RIGHT].push(document.getElementById('map-container'));

                var selectedCountry = document.getElementById('selectedCountryName').textContent;
            }
</script>
@endsection