<?php
session_start();
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db = "xilofonhero";

 // Create connection
 $conn = mysqli_connect($servername, $username, $password,$db);
 
 // Check connection
 if (!$conn) {
   die("<p>Connection failed: </p>" . mysqli_connect_error());
 }
?> 