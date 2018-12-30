<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Show Map Page</title>
           <?php
				include("header_link.php");
				$smid=$_GET['smid'];
               
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
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding: 10px; background-color: gray">
      <h1>ADMIN<small style="color:white">Show Map Page</small></h1>
      
    </section>

 <section class="content">
     
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
        
        var myLatLng1 = {lat: 21.1277814, lng: 72.8368742};
     
        var map = new google.maps.Map(document.getElementById('map'), {
          center:{lat: 21.1277814, lng: 72.8368742},
          zoom: 15
        });
        
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

$sql = "SELECT r.lati,r.lang FROM request r ,assign a where r.wcontact=a.wcontact  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $i = 1;
    while($row = $result->fetch_assoc()) {
        
        $lang = $row["lang"];
        $lat = $row["lati"];
        
        
        ?>
        var marker<?php echo $i ?> = new google.maps.Marker({
          position: {lat: <?php echo $lat ?>, lng: <?php echo $lang ?>},
          map: map,
          title: 'Need Help!'
        });
        
        <?php
        $i = $i + 1;
        //echo $lang; echo $lat;
        
        
            
    }
} else {
    //echo "0 results";
}
//echo $lang;

$sql1 = "SELECT lang,lati FROM rescue group by rid=52";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    $i = 1;
    while($row = $result->fetch_assoc()) {
        
        $lang = $row["lang"];
        $lat = $row["lati"];
        
        
        ?>
        var marker<?php echo $i ?> = new google.maps.Marker({
          position: {lat: <?php echo $lat ?>, lng: <?php echo $lang ?>},
          map: map,
          title: 'Resque Team!'
        });
        
        <?php
        $i = $i + 1;
        //echo $lang; echo $lat;
        
        
            
    }
} else {
    //echo "0 results";
}



$conn->close();
?>

        
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