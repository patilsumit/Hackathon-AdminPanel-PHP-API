<?php
    
    $x1=23.15605;
    $x2=23.15765;
    $x3=23.15451;
    $y1=72.65831;
    $y2=72.66123;
    $y3=72.66389;
    $s1=30.00;
    $s2=20.00;
    $s3=40.00;
    $sum=$s1+$s2+$s3;
    $w1=$s1/$sum;
    $w2=$s2/$sum;
    $w3=$s3/$sum;
    
    $rx=($w1*$x1)+($w2*$x2)+($w3*$x3);
    $ry=($w1*$y1)+($w2*$y2)+($w3*$y3);
   echo  "latitude : ".$rx."  ";
   echo "longitude : ".$rx."  ";
    ?>
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
    </style>

<div class="col-md-12" style="margin-bottom: 20px"></div>

<div id="map" class="col-md-offset-1 col-md-10" style="height:600px;border:1px solid black;box-shadow:2px 2px 5px #888888;">
      
</div>

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        
        var myLatLng1 = {lat: <?php echo $rx ?>, lng:<?php echo $ry ?>};
     
        var map = new google.maps.Map(document.getElementById('map'), {
          center:{lat: <?php echo $rx ?>, lng: <?php echo $ry ?>},
          zoom: 15
        });
        
        var marker = new google.maps.Marker({
          position:{ lat: <?php echo $rx ?>, lng: <?php echo $ry ?>},
          map: map,
          title: 'Hello World!'
        });
        
        
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEYmPBZE6NdCj1b0c2X307J_ARkVAFT8Y
&callback=initMap">
    </script>



</div><!--roe 2nd comp -->

<!--map over-->
