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
                // output data of each row
                echo "
                <html>
                    <head>
                        <link rel='stylesheet' href='css/styles.css'> 
                    </head>
                    <body>";
                        $query = "SELECT `username`,`points` FROM `login` ORDER BY `points` DESC ";
                        $result = mysqli_query($conn, $query);
                        if (mysqli_num_rows($result) > 0) {
                            echo "<h2 style='text-align:center;text-decoration:underline;'>Ranking</h2>";
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<div class='taula'><p>".$row['username']."</p><p>".$row['points']."</p></div>";
                            }
                        }else{
                            echo "0 results";
                        }
                        echo "
                    </body>
                </html>
        ";
    }
?>