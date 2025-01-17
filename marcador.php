<?php
    require("php/conection.php");
    if((isset($_SESSION['username']))){
        echo 
        '
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Xilofon Hero</title>
            <link rel="stylesheet" href="css/styles.css">
            <script src="js/instrument.js"></script>
            <script src="php/checkuser.php"></script>
        </head>
        <body>
            <div class="header">
                <a href="index.php" id="company">EA COMPANY</a>
                <nav>
                    <a href="marcador.php">Marcador</a>
                    <a class="user" href="#desplegableUser">'. $_SESSION['username'] .'</a>
                    <img class="userImg" src="lib/img/img_avatar.png">
                </nav>
            </div>
            <div id="desplegableUser" class="popup">
                <div class="popupContent">
                    <div class="menuForm">
                        <h3>Iniciar Sessió</h3>
                        <a href="#">&#8617;</a>
                    </div>
                    <form id="login-form" method="post" action="php/auth_login.php" >
                        <input type="text" name="username" id="username" placeholder=" Nom Usuari" required><br>
                        <input type="password" name="pass" id="pass" placeholder=" Contrasenya" required><br><br>
                        <input type="submit" value="Enviar">
                        <a href="php/logout.php">Tancar Sessio</a>
                        <br><a href="#desplegableForm">No tens cap compte?</a>
                    </form>
                </div>
            </div>
            <div id="desplegableForm" class="popup">
            <div class="popupContent">
                <div class="menuForm">
                    <h3>Crear Compte</h3>
                    <a href="#">&#8617;</a>
                </div>
                <form id="login-form" method="post" action="php/auth_login.php" >
                    <input type="text" name="username" id="username" placeholder=" Nom Usuari" required><br>
                    <input type="password" name="pass" id="pass" placeholder=" Contrasenya" required><br><br>
                    <input type="submit" value="Enviar">
                </form>
                </div>
            </div>   
            <div class="joc">
                <iframe id="taulaMarcador" src="marcadorTaula.php"></iframe>
            </div>
            <div class="footer">

            </div>
        </body>
        </html>
        ';
    }else{
        echo '
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Xilofon Hero</title>
            <link rel="stylesheet" href="css/styles.css">
        </head>
        <body>
            <div class="header">
                <a href="index.php" id="company">EA COMPANY</a>
                <nav>
                    <a href="marcador.php">Marcador</a>
                    <a class="user" href="#desplegableUser">LogIn</a>
                    <img class="userImg" src="lib/img/unknown.jpg">
                </nav>
            </div>
            <div id="desplegableUser" class="popup">
                <div class="popupContent">
                    <div class="menuForm">
                        <h3>Iniciar Sessió</h3>
                        <a href="#">&#8617;</a>
                    </div>
                    <form id="login-form" method="post" action="php/auth_login.php" >
                        <input type="text" name="username" id="username" placeholder=" Nom Usuari" required><br>
                        <input type="password" name="pass" id="pass" placeholder=" Contrasenya" required><br><br>
                        <input type="submit" value="Enviar">
                        <br><a href="#desplegableForm">No tens cap compte?</a>
                    </form>
                </div>
            </div>
            <div id="desplegableForm" class="popup">
            <div class="popupContent">
                <div class="menuForm">
                    <h3>Crear Compte</h3>
                    <a href="#">&#8617;</a>
                </div>
                <form id="login-form" method="post" action="php/auth_login.php" >
                    <input type="text" name="username" id="username" placeholder=" Nom Usuari" required><br>
                    <input type="password" name="pass" id="pass" placeholder=" Contrasenya" required><br><br>
                    <input type="submit" value="Enviar">
                </form>
                </div>
            </div>     
            <div id="menu-lateral">
            </div>
            <div class="joc">
                <iframe id="taulaMarcador" src="marcadorTaula.php"></iframe>
            </div>
            <div class="footer">

            </div>
        </body>
        </html>
        ';
    }

?>