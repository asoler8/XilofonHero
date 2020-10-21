<?php
session_start();
    if((isset($_SESSION['username']))){
        $html = 
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
                    <fieldset>
                        <legend>Iniciar Session</legend>
                        <input type="text" name="username" id="username" placeholder=" Nom Usuari" required><br>
                        <input type="password" name="pass" id="pass" placeholder=" Contrasenya" required><br>
                    </fieldset><br>
                    <span>Tu cuenta fue creada previamente?</span>
                    <input type="checkbox" id="exist" name="exist" value="exist" required><br>
                    <input type="submit" value="Enviar">
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
                <div class="instrument">
                    <button onclick="notaDo1()" id="notaDo1">Do</button>
                    <button onclick="notaRe()" id="notaRe">Re</button>
                    <button onclick="notaMi()" id="notaMi">Mi</button>
                    <button onclick="notaFa()" id="notaFa">Fa</button>
                    <button onclick="notaSol()" id="notaSol">Sol</button>
                    <button onclick="notaLa()" id="notaLa">La</button>
                    <button onclick="notaSi()" id="notaSi">Si</button>
                    <button onclick="notaDo()" id="notaDo">Do</button>
                </div>
                <div class="partitutura">
                    <div id="notaClick">
                        <p id="notaClicar">Nota a Clickar</p>
                    </div>
                </div>
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