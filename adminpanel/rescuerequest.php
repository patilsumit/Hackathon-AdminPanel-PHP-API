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
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding: 10px; background-color: gray">
      <h1>ADMIN<small style="color:white">Rescue Request Page</small></h1>
      
    </section>

 <section class="content">
      <!-- Small boxes (Stat box) -->
      
        <!-- ./col -->
        
   
  
<!--map start-->


<div class="row" style="margin-left:10px;margin-right:10px">
     <form id="frmwoman1" action="" method="get">   
        <div class="col-md-12" id="rw2">
            
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

                  <th>Assign Id</th>
                  <th>Woman Contact</th>
                  <th>Resque Contact</th>
                  <th>Otp</th>
                  <th>Status</th> 
                  <th>Button</th>
                </tr>
                </thead>
                <tbody>
                
              
          <?php
             
              $sql = "SELECT * FROM assign";
              $result = mysqli_query($conn,$sql);
              while($rw=mysqli_fetch_array($result))
             {
                echo "<tr>"; 
                echo "<td>".$rw['aid']."</td>";
                echo "<td>".$rw['wcontact']."</td>";
                echo "<td>".$rw['rcontact']."</td>";
                echo "<td>".$rw['otp']."</td>";
                echo "<td>".$rw['status']."</td>";
                $id = $rw['aid'];
                echo '<form method="post" action="showmap.php?smid='.$id.'">';
                echo '<td><input type="submit"  value="show map" class="btn btn-info"></td>';
                echo '</form>';
                echo "</tr>";
                    
             }
              
             
            ?>   
             
               
                 
             </tbody>
             <tfoot>
                <tr>
                   <th>Assign Id</th>
                  <th>Woman Contact</th>
                  <th>Resque Contact</th>
                  <th>Otp</th>
                  <th>Status</th> 
                 <th>Button</th>
                </tr>
                </tfoot>
            </table>
              
                         </div>
            <!-- /.box-body -->
            
            
          </div>
<!-- End Data Table -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
       </form>
       
    
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