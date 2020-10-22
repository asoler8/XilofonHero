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

    //echo "Login Credentials verified";
    if(isset($rememberme)) {
        //set cookie to last one year
        setcookie('username', $_POST['username'], time()+60*60*24*365, '/', 'localhost');
        setcookie('password', md5($_POST['user_password']), time()+60*60*24*365, '/', 'localhost');
    } else {
        //cookie expires when browser closes
        setcookie('username', $_POST['username'], false, '/', 'localhost');
        setcookie('password', md5($_POST['user_password']), false, '/', 'localhost');   
    }

    //if user exists send to dashboard
    $_SESSION['username'] = $username;
    header("Location: ../index_user.php");

    }else{
    //echo "Invalid Login Credentials";
    header("Location: ../index.html");
}
}
?>