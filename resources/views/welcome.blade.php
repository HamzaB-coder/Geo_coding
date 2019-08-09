<!DOCTYPE html>
<html>

<head>

  <title>laravel Map</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKm_K7jO2TTTohB6AtZ0ih4-oULXftZb8&callback=initMap">
  </script>
  <style>
    /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
    #map {
      height: 90%;
    }

    /* Optional: Makes the sample page fill the window. */
    html,
    body {
      height: 90%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>

<body>
  <div id="map"></div>

  <script>

    var map;

    function initMap() {
      map = new google.maps.Map(
        document.getElementById('map'), {
          center: new google.maps.LatLng(41.397874, 2.168080),
          zoom: 6
        });
      var iconBase =
        'https://developers.google.com/maps/documentation/javascript/examples/full/images/';

      var icons = {
        gyms: {
          icon: iconBase + 'library_maps.png'
        },
      };

      var features = [{
          position: new google.maps.LatLng(38.989969, -1.855305),
          type: 'gyms'
        }, {
          position: new google.maps.LatLng(42.844247, -2.673340),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(38.544342, -0.1319353),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(41.397874, 2.168080),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(43.336601, -8.410823),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(41.645761, -0.877765),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(43.260382, -2.9289251),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(39.494409, -0.362006),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(39.966134, -4.828779),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(28.451519, -16.2909517),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.972128, -5.648112),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(39.4572726, -0.377808),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(39.459207, -0.386294),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(42.2315488, -8.7231096),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(42.811688, -1.645437),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(38.055931, -1.217256),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(37.992181, -1.127069),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(36.545800, -4.620155),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(36.7527246, -4.101164),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.474578, -3.365594),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.431498, -3.633126),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.386061, -3.7420027),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.457177, -3.693067),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.475313, -3.872005),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.405146, -3.707636),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.448713, -3.703438),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.445488, -3.808535),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.406336, -3.668628),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.385659, -3.610456),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.2964454, -3.803256),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.354561, -3.545158),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.442851, -3.686240),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.605416, -3.717393),
          type: 'gyms'
        },
        {
          position: new google.maps.LatLng(40.395668, -3.719933),
          type: 'gyms'
        }

      ];

      // Create markers.
      for (var i = 0; i < features.length; i++) {
        var marker = new google.maps.Marker({
          position: features[i].position,
          icon: icons[features[i].type].icon,
          map: map
        });
      }

      infoWindow = new google.maps.InfoWindow;

      // Try HTML5 geolocation.
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };

          infoWindow.setPosition(pos);
          infoWindow.setContent('Current Location.');
          infoWindow.open(map);
          map.setCenter(pos);
        }, function() {
          handleLocationError(true, infoWindow, map.getCenter());
        });
      } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
      }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      infoWindow.setPosition(pos);
      infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
      infoWindow.open(map);
    }
  </script>
</body>

</html>