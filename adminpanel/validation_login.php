
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
     $name=$_GET["fieldUser"];
     $password=$_GET["fieldPassword"];
     
    //  echo $name;
     
    
/*
   $sql1="SELECT * FROM admin where username= $name";
   $result1 = mysqli_query($conn,$sql1);
    echo $result1;die;
   while($rw = mysqli_fetch_array($result1))
   {
   
   if($rw['username']==$name && $rw['password']==$password)
     {
	    echo 'You are Valid User';
     }
     
   }
   
   */
   
        $sql = "SELECT * FROM admin where username= '$name'";
        // echo $sql;die;
              $result = mysqli_query($conn,$sql);
              while($rw=mysqli_fetch_array($result))
             {
                    if($rw['username']==$name && $rw['password']==$password)
                       {
	                       // echo 'You are Valid User';
	                        ?>
	                        
	                        <meta http-equiv="refresh" content="0;url=index.php">
	                        <script>alert("You are Successfully Login")</script>
	                        <?php
                        }
  
             }
         
   
 
   
   
              
?>