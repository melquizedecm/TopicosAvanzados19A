/*
Nombre: Denilson Eloy Osorio Braga
Maestro: Melquizedec Moo Medina
Programa: Creacion de librerias
Fecha: 18/03/2019
*/
var int=0;
var num=0;
var mayus;
var minus;
var valor=0;
var x=0;
var y=0;

function validacionEntero(){
  while(true){
    int=prompt("Inserte numero");
    if(int%1===0){
       break;
     }else{
       alert("Error el dato colocado no es un numero");
     }
  }

}


function validacionRango(valor,x,y){
  while(true){
        valor=prompt("Inserte valor");
        x=prompt("Inserte x");
        y=prompt("Inserte y");
    if(x<y){
      if(valor <=y && valor>=x){
        break;
      }else{
        alert("error")
      }
    }else if(y<x){
      if(valor <=x && valor >=y){
        break;
      }else{
        alert("error")
      }
    }
  }

}


function validarFlotante(){
  while(true){
    num=prompt("Inserte un valor");
    if(num%1!=0){
             break;
      }else{
        alert("No es un numero flotante");
      }
  }

}
function Minusculas(){
  while(true){
    minus= prompt("Ingrese una letra minuscula");
    if(/^[a-z]*$/.test(minus)){
      break;
    }else{
      alert("Error no es una letra minuscula");
    }
  }
}

function Mayusculas(){
  while(true){
  mayus= prompt("Ingrese una letra mayuscula");
      if(/^[A-Z]*$/.test(mayus)){
        break;
      }else{
        alert("Error no es una letra mayuscula");
      }
    }
  }
