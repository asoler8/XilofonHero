<?php
require('conection.php');
if (isset($_POST['username']) and isset($_POST['pass'])){
   
// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `login` WHERE username='$username' and Password='$password'";

$result = mysqli_query($conn, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count > 0){

    //if user exists send to dashboard
    $_SESSION['username'] = $username;
    $_SESSION['logged-in'] = true;
    header("Location: ../index.php");

    }else{
    //echo "Invalid Login Credentials";
    $_SESSION['logged-in'] = false;
    header("Location: ../index.php");
}
}
?>