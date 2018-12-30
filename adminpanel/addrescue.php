<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Rescue Page</title>
       
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
      <div class="wrapper">
             <?php
              include("header.php");
            ?>
            <?php
             include("slidebar.php");
           ?>
           
           
  <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
              <!-- Content Header (Page header) -->
            <section class="content-header" style="padding: 10px; background-color: gray">
             <h1>ADMIN<small style="color:white">Add Resque Team Page</small></h1>
             </section>
     
    
    <!-- Contain Part start -->  
    
    <!-- Main content -->
    <section class="content">
     
      <!-- /.row -->
      <div id="rw1" class="row">
          
      <div class="col-md-12"> 
         <div style="margin-top:30px;"></div>
            
        <div class="col-md-6">
            
            
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Rescue Form</h3>
                 </div>
                
                <form name="frmcity2" class="form-horizontal"  action="insertaddrescue.php" method="GET">
                    <div class="box-body">
                                          
                        
                        <div class="form-group">
                                 <label class="col-md-3 control-label">Name :</label>
                                     <div class="col-md-7">
                                         <input type="text" class="form-control" id="txtrname" name="txtrname" placeholder="Rescue Name">
                                    
                                     </div>
                                       
                        </div>

                        <div class="form-group">
                                 <label class="col-md-3 control-label">Address :</label>
                                     <div class="col-md-7">
                                         <input type="text" class="form-control" id="txtadd" name="txtadd" placeholder="Address" >
                                    
                                     </div>
                                       
                        </div>


                        <div class="form-group">
                                 <label class="col-md-3 control-label">City :</label>
                                     <div class="col-md-7">
                                         <input type="text" class="form-control" id="txtcity" name="txtcity" placeholder="city Name" >
                                    
                                     </div>
                                       
                        </div>

                        <div class="form-group">
                                 <label class="col-md-3 control-label">State :</label>
                                     <div class="col-md-7">
                                         <input type="text" class="form-control" id="txtstate" name="txtstate" placeholder="State Name" >
                                    
                                     </div>
                                       
                        </div>
                       
                       
                       <div class="form-group">
                                 <label class="col-md-3 control-label">Contact :</label>
                                     <div class="col-md-7">
                                         <input type="text" class="form-control" id="txtcontact" name="txtcontact" placeholder="State Name" >
                                    
                                     </div>
                                       
                        </div>

                       <div class="form-group">
                                 <label class="col-md-3 control-label">Lang :</label>
                                     <div class="col-md-7">
                                         <input type="text" class="form-control" id="txtlang" name="txtlang" placeholder="Langitutde">
                                    
                                     </div>
                                       
                        </div>

                        <div class="form-group">
                                 <label class="col-md-3 control-label">Latitude :</label>
                                     <div class="col-md-7">
                                         <input type="text" class="form-control" id="txtlati" name="txtlati" placeholder="Latitude">
                                    
                                     </div>
                                       
                        </div>

                     
                        <div class="box-footer" style="text-align:center; align:center">
                                <input type="submit"  name="btnsave" class="btn btn-info" value="Save">
                                <input type="button" name="btncancel" class="btn btn-info" value="Cancel"> 
                        </div>
                 
                

                    </div> <!--End box body tag-->
                </form> <!--End form tag-->
            </div> <!--End box box info tag-->
        </div> <!--End col-md-6 tag-->
        
        <!--Right Col start-->
        <div class="col-md-6">
            <input id="pac-input" class="controls" type="text" placeholder="Search Box" style="width:300px;height:30px">
             <div id="coords"></div>
            <div id="map" style="height:450px;border:1px solid black;box-shadow:2px 2px 5px #888888;">
                   
            </div>
            
            
            
    <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat:22.853532371872223, lng: 72.60744935625007}, //22.4012603,69.0698517 lat: 20.9437191, lng: 72.9102295
          zoom: 6,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        
      //
      var coordsDiv = document.getElementById('coords');
       map.controls[google.maps.ControlPosition.TOP_CENTER].push(coordsDiv);
        map.addListener('click', function(event) {
          coordsDiv.textContent =
             /* 'lat: ' + (event.latLng.lat()) + ', ' +
              'lng: ' + (event.latLng.lng()),*/
              
               document.getElementById("txtlang").value = event.latLng.lng(); 
               document.getElementById("txtlati").value = event.latLng.lat(); 
        });

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
              
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }


/*
 // Show the lat and lng under the mouse cursor.
      var coordsDiv = document.getElementById('coords');
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(coordsDiv);
        map.addListener('mousemove', function(event) {
          coordsDiv.textContent =
              'lat: ' + Math.round(event.latLng.lat()) + ', ' +
              'lng: ' + Math.round(event.latLng.lng());
        });

*/


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkBGMJmZh1t3HXvfhYd6vFt1ZRzr8piOg&libraries=places&callback=initAutocomplete"
         async defer></script>
     
            
      </div>    
          
        <!--Right End -->
       
        
    </div> 
  </div>
    
    
    </section>
                        
    <!-- /.row -->
     <!-- /.content -->     
      
     </div> 
     
     <?php
     include("footer_link.php");
     include("footer.php");
     ?>
     
     </div>
   
    </body>
</html>
