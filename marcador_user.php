<?php
session_start();
    if((isset($_SESSION['username']))){
        $html = 
        '
            <html>
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Xilofon Hero</title>
                    <link rel="stylesheet" href="css/styles.css">
                </head>
                <body>
                    <div class="header">
                        <a href="index_user.php" id="company">EA COMPANY</a>
                        <nav>
                            <a href="marcador_user.php">Marcador</a>
                            <a class="user" href="#desplegableUser">'. $_SESSION['username'] .'</a>
                            <img class="userImg" src="lib/img/img_avatar.png">
                        </nav>
                    </div>
                    <div id="desplegableUser" class="popup">
                        <div class="popupContent">
                            <a href="#">x</a>
                            <form id="login-form" method="post" action="php/auth_login.php" >
                                <label for="username">Iniciar Session</label>
                                <input type="text" name="username" id="username" placeholder=" Nom Usuari" required><br>
                                <input type="password" name="pass" id="pass" placeholder=" Contrasenya" required><br><br>
                                <span>Tu cuenta fue creada previamente?</span>
                                <input type="checkbox" id="exist" name="exist" value="exist"><br>
                                <input type="submit" value="Enviar">
                            </form>
                            
                        </div>
                    </div>   
                    <div id="menu-lateral">
                        <img class="desplegable-lateral" onclick="desplegar()" src="lib/img/simbolo_desplegable.png">  
                        <select name="Tipus" hidden>
                            <option>Rock</option>
                            <option>Clasic</option>
                        </select>
                        <select hidden>
                            <option>Canço 1</option>
                            <option>Canço 2</option>
                        </select>
                    </div>
                    <div class="joc">
                        <iframe id="taulaMarcador" src="marcadorTaula.php"></iframe>
                    </div>
                    <div class="footer">

                    </div>
                </body>
            </html>
        ';
        echo $html;
    }else{
        header('Location: marcador.html');
    }

?>