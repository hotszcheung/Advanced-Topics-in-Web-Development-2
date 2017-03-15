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
		
		var directionsService = new google.maps.DirectionsService();
		var directionsDisplay = new google.maps.DirectionsRenderer();
		
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: SHAPE
        });
    
        addMarker(SHAPE, map,'marker-pin-google-SHAPE.svg');
		addMarker(newloc, map);
		directionsDisplay.setMap(map);
		calcRoute(SHAPE, newloc, directionsService, directionsDisplay);
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
	  
	  function calcRoute(start, end, directionsService, directionsDisplay ) {		 
		  var request = {
			origin:start,
			destination:end,
			travelMode: 'DRIVING'
		  };
		  directionsService.route(request, function(result, status) {
			if (status == 'OK') {
			  directionsDisplay.setDirections(result);
			}else{
				alert('Error:' +status);
			}
		  });
	  }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkhdEApVkYNLXoP3BZWIP9avrBqOkSkZc&callback=initMap">
    </script>
  </body>
</html>