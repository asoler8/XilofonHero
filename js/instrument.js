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
function playNote(frequency, type) {
  var context=new AudioContext();
  var o=null;
  var g= null;
    o = context.createOscillator();
    g = context.createGain();
    o.type = type;
    o.connect(g);
    o.frequency.value = frequency;
    g.connect(context.destination);
    o.start(0);
    g.gain.exponentialRampToValueAtTime(0.00001, context.currentTime + 0.5);
}
function notaDo1() {
  //var audio = new Audio("lib/notas/do-.mp3");
  //audio.play();
  playNote(261,"square");
  console.log("nota DO");
  document.getElementById("notaDo1").style.background = "#65469b";
  document.getElementById("notaDo1").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaDo1").style.background = "black";
    document.getElementById("notaDo1").style.color = "#65469b";
  }, 500);
}
function notaRe() {
  playNote(293,"square");
  document.getElementById("notaRe").style.background = "#4a569a";
  document.getElementById("notaRe").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaRe").style.background = "black";
    document.getElementById("notaRe").style.color = "#4a569a";
  }, 500);
}
function notaMi() {
  playNote(329,"square");
  document.getElementById("notaMi").style.background = "#3584c4";
  document.getElementById("notaMi").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaMi").style.background = "black";
    document.getElementById("notaMi").style.color = "#3584c4";
  }, 500);
}
function notaFa() {
  playNote(349,"square");
  document.getElementById("notaFa").style.background = "#1e857b";
  document.getElementById("notaFa").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaFa").style.background = "black";
    document.getElementById("notaFa").style.color = "#1e857b";
  }, 500);
}
function notaSol() {
  playNote(392,"square");
  document.getElementById("notaSol").style.background = "#529555";
  document.getElementById("notaSol").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaSol").style.background = "black";
    document.getElementById("notaSol").style.color = "#529555";
  }, 500);
}
function notaLa() {
  playNote(440,"square");
  document.getElementById("notaLa").style.background = "#a9b446";
  document.getElementById("notaLa").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaLa").style.background = "black";
    document.getElementById("notaLa").style.color = "#a9b446";
  }, 500);
}
function notaSi() {
  playNote(493,"square");
  document.getElementById("notaSi").style.background = "#cca120";
  document.getElementById("notaSi").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaSi").style.background = "black";
    document.getElementById("notaSi").style.color = "#cca120";
  }, 500);
}
function notaDo() {
  playNote(523,"square");
  document.getElementById("notaDo").style.background = "#cc5a36";
  document.getElementById("notaDo").style.color = "black";
  setTimeout(() => {
    document.getElementById("notaDo").style.background = "black";
    document.getElementById("notaDo").style.color = "#cc5a36";
  }, 500);
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
}
function esconder() {
  var menuLat = document.getElementById("menu-lateral");
  var x = document.getElementById("despContent");
  x.style.display = "none";
  menuLat.style.width = "5vw";
}

function cancion(){
  var cancionPrueba = ["Do","Re","Mi","Do","Re"];
  var temps = 0;
  for(var j = 0; j < cancionPrueba.length; j++){
    temps+=500;
    setTimeout(() => {
      console.log("nota Cancio "+ cancionPrueba[j]);
    }, temps);   
  }
}

function canço(i){
  if (i==1){
    var notaNom = ["Do","Re","Mi","Fa","Sol","La","Si","Do"];
    setTimeout(() => {
      notaDo1();
    }, 500);
    setTimeout(() => {
      notaDo1();
    }, 1000);
    setTimeout(() => {
      notaSol();
    }, 1500);
    setTimeout(() => {
      notaSol();
    }, 2000);
    setTimeout(() => {
      notaLa();
    }, 2500);
    setTimeout(() => {
      notaLa();
    }, 3000);
    setTimeout(() => {
      notaSol();
    }, 3500);
    setTimeout(() => {
      notaFa();
    }, 4000);
    setTimeout(() => {
      notaFa();
    }, 4500);
    setTimeout(() => {
      notaMi();
    }, 5000);
    setTimeout(() => {
      notaMi();
    }, 5500);
    setTimeout(() => {
      notaRe();
    }, 6000);
    setTimeout(() => {
      notaRe();
    }, 6500);
    setTimeout(() => {
      notaDo;
    }, 7000);
  }else{
    console.log("pos ok");
  }
}