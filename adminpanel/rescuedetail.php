<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Women Page</title>
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



/*if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        
        $lang = $row["name"];
        $lat = $row["contact"];
    }        
}
    //echo $lang;
    //echo $lat;*/
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
             <h1>ADMIN<small style="color:white">Resque Details</small></h1>
             
            </section>
     
    
    <!-- Contain Part start -->  
    
    <!-- Main content -->
    <section class="content">
      <div id="rw1" class="row">
          
       <form id="frmwoman1" action="" method="get">   
        <div class="col-md-12">
          
<!-- Start Data Table -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table</h3>
           
             
          </div>
            <!-- /.box-header -->
            <div class="box-body">
               <table id="example1" class="table table-bordered table-striped">
                     <thead>
                    <tr>

                  <th>Name</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>State</th>
                  <th>Langitute</th>
                  <th>Latitute</th>
                  <th>Rescue Contact</th>
                  <th>Status</th> 
                </tr>
                </thead>
                <tbody>
                
              
          <?php
             
              $sql = "SELECT * FROM rescue";
              $result = mysqli_query($conn,$sql);
              while($rw=mysqli_fetch_array($result))
             {
                echo "<tr>"; 
                echo "<td>".$rw['rname']."</td>";
                echo "<td>".$rw['address']."</td>";
                echo "<td>".$rw['city']."</td>";
                echo "<td>".$rw['state']."</td>";
                echo "<td>".$rw['lang']."</td>";
                echo "<td>".$rw['lati']."</td>";
                echo "<td>".$rw['contact']."</td>";
                echo "<td>".$rw['status']."</td>";
                echo "</tr>";
             }
              
             
            ?>   
               </tbody>
               <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>State</th>
                  <th>Langitute</th>
                  <th>Latitute</th>
                  <th>Rescue Contact</th>
                  <th>Status</th> 
                
                </tr>
                </tfoot>
            </table>
              
                         </div>
            <!-- /.box-body -->
            
            
          </div>
<!-- Emd Data Table -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
       </form>  
      </div>
      <!-- /.row -->
     
    
    
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