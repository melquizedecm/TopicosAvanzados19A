/*
Nombre: Denilson Eloy Osorio Braga
Maestro: Melquizedec Moo Medina
Programa: Creacion de librerias/validacion de datos
Fecha: 18/03/2019
*/
/*
se inicializan las variables
*/
var int=0;
var num=0;
var mayus;
var minus;
var valor=0;
var x=0;
var y=0;
/*
Se crean las funciones
*/
function validacionEntero(){
  /*
  en cada funcion se crea un while para poner el prompt donde pedira el numero
  */
  while(true){
    /*
    validamos si es entero sino retorna con una alerta
    */
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
    /*
    Se solicitan los datos por medio de un prompt
    */
        valor=prompt("Inserte valor");
        x=prompt("Inserte x");
        y=prompt("Inserte y");
        /*
        Se valida si esta en el rango sino retorna una alerta
        */
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
    /*
    Se valida si es flotante sino retorna error
    */
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
    /*
    Se valida si es minuscula sino retorna error
    */
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
  /*
  Se valida si es mayucula sino retorna error
  */
      if(/^[A-Z]*$/.test(mayus)){
        break;
      }else{
        alert("Error no es una letra mayuscula");
      }
    }
  }
