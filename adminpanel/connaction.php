<?php
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "womendb";
 
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 echo $conn;
 
 //mysql_connect("localhost","root","") or die("Connection Failed");
 //mysql_select_db("womendb");



 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
  
?>