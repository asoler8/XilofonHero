<?php
    include('php/conection.php');
    if(!(isset($_SESSION['username'])))
    {
        $html = 
        "<html>
        <head>
            <meta charset='utf8'>
            <link rel='stylesheet' href='css/styles.css'>
        </head>
        <body>
            <div id='loginRequest'>
                <h1>No has iniciat sessió</h1>
            </div>
        </body>
        </html>
    ";
    echo $html;
    }
    if(isset($_SESSION['username'])){
        $query = "SELECT `username`,`points` FROM `login` ";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                echo "<table>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "Usuari: " . $row["username"]. " - Punts: " . $row["points"]. "<br>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
    }
?>