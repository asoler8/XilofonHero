<?php
    require("php/conection.php");
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
        </div>   
        <div id="menu-lateral">
        <img class="desplegable-lateral" onclick="desplegar()" src="lib/img/simbolo_desplegable.png"/>
        <div id="despContent">
            <h3>Cançons</h3>
            <button onclick="canço(1)">Canço</button>
            <button>Canço</button>
            <button>Canço</button>
            <button>Canço</button>
            <br>
            <h3>AutoPlay</h3>
            <input type="checkbox" checked>
        </div>
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
                <div class="partitura">
                    <div id="notaClick">
                        <p id="notaClicar">Nota a Clickar</p>
                    </div>
                </div>
                <button id="boton" onclick="cancion()">Play</button>
                </div>
                <div class="footer">
        
            </div>
        </body>
        </html>
        ';
        echo $html;
    }else{
        echo '
        <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Xilofon Hero</title>
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/instrument.js"></script>
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
    <img class="desplegable-lateral" onclick="desplegar()" src="lib/img/simbolo_desplegable.png"/>
    <div id="despContent">
        <h3>Cançons</h3>
        <button onclick="canço(1)">Canço</button>
        <button>Canço</button>
        <button>Canço</button>
        <button>Canço</button>
        <br>
        <h3>AutoPlay</h3>
        <input type="checkbox" checked>
    </div>
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
      <div class="partitura">
        <div id="notaClick">
          <p id="notaClicar">Nota a Clickar</p>
        </div>
      </div>
      <button id="boton" onclick="cancion()">Play</button>
    </div>
    <div class="footer">

    </div>
    <div class="footer"></div>
  </body>
</html>

        ';
    }

?>