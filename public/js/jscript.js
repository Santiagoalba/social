
//
// var string = "Hola";
// var array = ["1","2","3"];
// var boolean = true;
window.onload = function(){

var botonDePrueba = document.getElementById("miBoton");
botonDePrueba.onclick = function(){alert("Testeando el click")}

}

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

var ironMan = {
  nombre : "ironman",
  equipo : "avengers",
  poderes : ["Volar","Lanzar misiles","Disparar laser"],
  energia : 100,
  getPoder : function(n){
    var poder = 'nulo';
    if(n>0 && n<50){
      poder = ironMan.poderes[0];
    } else {
      if (n>=50 && n<75) {
        poder = ironMan.poderes[1];
      } else {
        poder = ironMan.poderes[2];
      }
    }
    return poder;
    }

}

var hulk = {
  nombre : "hulk",
  equipo : "Avengers",
  poderes : ["Aplastar","Gritar","Golpear"],
  energia : 100,
  getPoder : function(n){
    var poder = 'nulo';
    if(n>0 && n<50){
      poder = hulk.poderes[0];
    } else {
      if (n>=50 && n<75) {
        poder = hulk.poderes[1];
      } else {
        poder = hulk.poderes[2];
      }
    }
    return poder;
    }
}
