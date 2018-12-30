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

     $sql = "SELECT COUNT(wid) FROM women where status='no'";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_row($result);
    echo "number is" .$rows[0];

?>