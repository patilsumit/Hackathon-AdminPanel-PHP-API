<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Page</title>
           <?php
				include("header_link.php");

			?>
			
			<?php

                $servername = "localhost";
                $username = "id4996493_sumit";
                $password = "sumit";
                $dbname = "id4996493_womendb";

            // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);

            }
            ?>

			
			
    </head>

<body class="hold-transition skin-blue sidebar-mini">
<form method="POST">
  <div class="wrapper">
          
		<?php
			include("header.php");
			include("slidebar.php");
		?>


  
<div class="content-wrapper">
    

  
<!--map start-->


<div class="row" id="rw2">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      
      /* div coords. */
    
    
      #coords
      {
         background-color: black;color: white;padding: 5px; 
      }
      
        
    </style>

<div class="col-md-12" style="margin-bottom: 20px"></div>

<div id="map" class="col-md-offset-1 col-md-10" style="height:600px;border:1px solid black;box-shadow:2px 2px 5px #888888;">
    
</div>

<div id="coords"></div> 

    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          
          center: {lat: 21.1277814, lng: 72.8368742 }
        });
    


        map.addListener('click', function(e) {
              placeMarkerAndPanTo(e.latLng, map);
        });
        
         
        /* Show the lat and lng under the mouse cursor.
        var coordsDiv = document.getElementById('coords');
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(coordsDiv);
        map.addListener('mousemove', function(event) {
          coordsDiv.textContent =
              'lat: ' + Math.round(event.latLng.lat()) + ', ' +
              'lng: ' + Math.round(event.latLng.lng());
        });
        
        */ //lang-long over
        
      }

      function placeMarkerAndPanTo(latLng, map) {
         
        var marker = new google.maps.Marker({
          position: latLng,
          map: map
          
        });
        map.panTo(latLng);
       }
      
    

    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEYmPBZE6NdCj1b0c2X307J_ARkVAFT8Y
&callback=initMap">
    </script>
      
     
</section> <!-- /.over section class content -->
    


   <!-- /.over class content-wrapper -->
</div>

<?php
include("footer.php");
?>

</div> 


<?php
include("footer_link.php");
?>
</form>
</body>
</html>