<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 500px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo SHAPE(Tsing Yi)</h3>
    <div id="map"></div>
    <script>
      function initMap() {
    
        var SHAPE = {lat: 22.342200, lng: 114.106777};
		var newloc = {lat: 22.342172, lng: 114.110358};
	
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: SHAPE
        });
    
        addMarker(SHAPE, map,'marker-pin-google-SHAPE.svg');
		addMarker(newloc, map);
      }

      function addMarker(location, map) {
        var marker = new google.maps.Marker({     
		  position: location,
		  
          // prevent the user move the marker
          draggable: false,
          map: map
		  //icon: 'marker-pin-google-SHAPE.svg'
        });
      }
	  function addMarker(location, map, image) {
        var marker = new google.maps.Marker({     
		  position: location,
		  
          // prevent the user move the marker
          draggable: false,
          map: map,
		  icon: image
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkhdEApVkYNLXoP3BZWIP9avrBqOkSkZc&callback=initMap">
    </script>
  </body>
</html>