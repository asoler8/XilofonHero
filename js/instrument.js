document.addEventListener(
  "keyup",
  (event) => {
    if (event.key == 1) {
      document.getElementById("notaDo1").click();
    } else if (event.key == 2) {
      document.getElementById("notaRe").click();
    } else if (event.key == 3) {
      document.getElementById("notaMi").click();
    } else if (event.key == 4) {
      document.getElementById("notaFa").click();
    } else if (event.key == 5) {
      document.getElementById("notaSol").click();
    } else if (event.key == 6) {
      document.getElementById("notaLa").click();
    } else if (event.key == 7) {
      document.getElementById("notaSi").click();
    } else if (event.key == 8) {
      document.getElementById("notaDo").click();
    }
  },
  false
);

/**
 * FUNCTIONS
 */
function comprovar(){
    tecla = true;
    
}
function playpausa(){
  
}


function cancion(){
    var cancionPrueba = [1,2,5,4,3];
    for(var j = 0; j < cancionPrueba.length; j++){
        nota = cancionPrueba[j];
        partitura(j);
        
    }
}
function partitura(i) {
var arrayNota = ["Do","Re","Mi","Fa","Sol","La","Si","Do"];
var arrayColor = ["#65469b","#4a569a","#3584c4","1e857b"," #529555","#a9b446","#cca120","#cc5a36"];
var color = document.getElementById("notaClick");
var MNota = document.getElementById("notaClicar");
console.log("NOTA: " + arrayNota[i]);
color.style.backgroundColor = arrayColor[i];
MNota.innerHTML = arrayNota[i];
}

function notaDo1() {
  var audio = new Audio("lib/notas/do-.mp3");
  audio.play();
  document.getElementById("notaDo1").style.background = "#65469b";
  document.getElementById("notaDo1").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaDo1").style.background = "black";
    document.getElementById("notaDo1").style.color = "#65469b";
  }, 2000);
}
function notaRe() {
  var audio = new Audio("lib/notas/re.mp3");
  audio.play();
  document.getElementById("notaRe").style.background = "#4a569a";
  document.getElementById("notaRe").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaRe").style.background = "black";
    document.getElementById("notaRe").style.color = "#4a569a";
  }, 1300);
}
function notaMi() {
  var audio = new Audio("lib/notas/mi.mp3");
  audio.play();
  document.getElementById("notaMi").style.background = "#3584c4";
  document.getElementById("notaMi").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaMi").style.background = "black";
    document.getElementById("notaMi").style.color = "#3584c4";
  }, 1000);
}
function notaFa() {
  var audio = new Audio("lib/notas/fa.mp3");
  audio.play();
  document.getElementById("notaFa").style.background = "#1e857b";
  document.getElementById("notaFa").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaFa").style.background = "black";
    document.getElementById("notaFa").style.color = "#1e857b";
  }, 1000);
}
function notaSol() {
  var audio = new Audio("lib/notas/sol.mp3");
  audio.play();
  document.getElementById("notaSol").style.background = "#529555";
  document.getElementById("notaSol").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaSol").style.background = "black";
    document.getElementById("notaSol").style.color = "#529555";
  }, 1300);
}
function notaLa() {
  var audio = new Audio("lib/notas/la.mp3");
  audio.play();
  document.getElementById("notaLa").style.background = "#a9b446";
  document.getElementById("notaLa").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaLa").style.background = "black";
    document.getElementById("notaLa").style.color = "#a9b446";
  }, 1000);
}
function notaSi() {
  var audio = new Audio("lib/notas/si.mp3");
  audio.play();
  document.getElementById("notaSi").style.background = "#cca120";
  document.getElementById("notaSi").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaSi").style.background = "black";
    document.getElementById("notaSi").style.color = "#cca120";
  }, 1000);
}
function notaDo() {
  var audio = new Audio("lib/notas/do+.mp3");
  audio.play();
  document.getElementById("notaDo").style.background = "#cc5a36";
  document.getElementById("notaDo").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaDo").style.background = "black";
    document.getElementById("notaDo").style.color = "#cc5a36";
  }, 1800);
}

function desplegar() {
  var menuLat = document.getElementById("menu-lateral");
  var x = document.getElementById("despContent");
  if (x.style.display === "none") {
    aparecer();
  } else {
    esconder();
  }
}
function aparecer() {
  var menuLat = document.getElementById("menu-lateral");
  var x = document.getElementById("despContent");
  x.style.display = "flex";
  menuLat.style.width = "20vw";
  console.log("funciona");
}
function esconder() {
  var menuLat = document.getElementById("menu-lateral");
  var x = document.getElementById("despContent");
  x.style.display = "none";
  menuLat.style.width = "5vw";
  console.log("funciona2");
}



var boton = document.getElementById("boton");
boton.addEventListener("click", function(){
 if (cancion) {
   v.play();
   this.innerHTML = "Pause";
    cancion= true;
 } else {
   v.pause();
   this.innerHTML = "Play";
   concion = false;
 }
});

function start(){
  var boton = document.getElementById("boton");
  boton.addEventListener("click", function(){
   if (cancion) {
     v.play();
     this.innerHTML = "Pause";
      cancion= true;
   } else {
     v.pause();
     this.innerHTML = "Play";
     concion = false;
   }
  },
}
