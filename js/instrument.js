
document.addEventListener('keyup', event => {
    if ((event.key == 1)) {
        document.getElementById("notaDo1").click();
    }else if(event.key == 2){
        document.getElementById("notaRe").click();
    }else if(event.key == 3){
        document.getElementById("notaMi").click();
    }else if(event.key == 4){
        document.getElementById("notaFa").click();
    }else if(event.key == 5){
        document.getElementById("notaSol").click();
    }else if(event.key == 6){
        document.getElementById("notaLa").click();
    }else if(event.key == 7){
        document.getElementById("notaSi").click();
    }else if(event.key == 8){
        document.getElementById("notaDo").click();
    }
}, false)

/**
 * FUNCTIONS
 */

function notaDo1(){
    var audio = new Audio("lib/notas/do-.mp3");
    audio.play();
    document.getElementById("notaDo1").style.backgroundColor = "darkviolet";
    document.getElementById("notaDo1").style.color = "black";
    setTimeout(() => {
        document.getElementById("notaDo1").style.backgroundColor = "black";
        document.getElementById("notaDo1").style.color = "darkviolet";
        }, 2000);

}
function notaRe(){
    var audio = new Audio("lib/notas/re.mp3");
    audio.play();
    document.getElementById("notaRe").style.backgroundColor = "darkturquoise";
    document.getElementById("notaRe").style.color = "black";
    setTimeout(() => {
        document.getElementById("notaRe").style.backgroundColor = "black";
        document.getElementById("notaRe").style.color = "darkturquoise";
        }, 1300);
}
function notaMi(){
    var audio = new Audio("lib/notas/mi.mp3");
    audio.play();
    document.getElementById("notaMi").style.backgroundColor = "firebrick";
    document.getElementById("notaMi").style.color = "black"
    setTimeout(() => {
        document.getElementById("notaMi").style.backgroundColor = "black";
        document.getElementById("notaMi").style.color = "firebrick";
        }, 1000);
}
function notaFa(){
    var audio = new Audio("lib/notas/fa.mp3");
    audio.play();
    document.getElementById("notaFa").style.backgroundColor = "gold";
    document.getElementById("notaFa").style.color = "black";
    setTimeout(() => {
        document.getElementById("notaFa").style.backgroundColor = "black";
        document.getElementById("notaFa").style.color = "gold";
        }, 1000);
}
function notaSol(){
    var audio = new Audio("lib/notas/sol.mp3");
    audio.play();
    document.getElementById("notaSol").style.backgroundColor = "limegreen";
    document.getElementById("notaSol").style.color = "black"
    setTimeout(() => {
        document.getElementById("notaSol").style.backgroundColor = "black";
        document.getElementById("notaSol").style.color = "limegreen";
        }, 1300);
}
function notaLa(){
    var audio = new Audio("lib/notas/la.mp3");
    audio.play();
    document.getElementById("notaLa").style.backgroundColor = "hotpink";
    document.getElementById("notaLa").style.color = "black";
    setTimeout(() => {
        document.getElementById("notaLa").style.backgroundColor = "black";
        document.getElementById("notaLa").style.color = "hotpink";
        }, 1000);
}
function notaSi(){
    var audio = new Audio("lib/notas/si.mp3");
    audio.play();
    document.getElementById("notaSi").style.backgroundColor = "chocolate";
    document.getElementById("notaSi").style.color = "black";
    setTimeout(() => {
        document.getElementById("notaSi").style.backgroundColor = "black";
        document.getElementById("notaSi").style.color = "chocolate";
        }, 1000);
}
function notaDo(){
    var audio = new Audio("lib/notas/do+.mp3");
    audio.play();
    document.getElementById("notaDo").style.backgroundColor = "royalblue";
    document.getElementById("notaDo").style.color = "black";
    setTimeout(() => {
        document.getElementById("notaDo").style.backgroundColor = "black";
        document.getElementById("notaDo").style.color = "royalblue";
        }, 1800);
}