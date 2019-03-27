/* programa para validar enteros, flotantes, minusculas, mayusculas y rango
jueves 07 de marzo del 2019 */

var palabra;
var entero=0;
var numero=0;;
var mayuscula;

function getEnteros(){
  while(true){
   entero=prompt("Ingrese un número");
    if(entero %1===0){//if para validar si el número es entero.
      break;
    }else{
      alert("No es un número entero, intentelo de nuevo");
    }
  }
}

function getValidarFlotantes(){
  while(true){
    numero= Number.parseFloat(prompt("Ingrese un valor"));
    if(!/^([0-9])*[.]?[0-9]*$/.test(numero)){//validacion para flotantes
      break;
    }else{
      alert("No es un número flotante")
    }
  }
}

function getMinusculas(){
  while(true){
    palabra= prompt("Ingrese una letra");
    if(/^[a-z]*$/.test(palabra)){//valida si se ingresa una minuscula.
      break;
    }else{
      alert("Tiene que ingresar una letra en minúscula");
    }
  }
}

function getMayusculas(){
  while(true){
  mayuscula= prompt("Ingrese una letra");
      if(/^[A-Z]*$/.test(mayuscula)){//validacion para mayusculas.
        break;
      }else{
        alert("Ingrese una letra en mayúscula");
      }
    }
  }

/* Funcion que imprimime los valores ingresados
function getImprimir(){
  alert("Usted a ingresado: "+ entero);
    alert("Usted a ingresado: "+ numero);
      alert("Usted ingreso la letra: "+ palabra);
        alert("Usted ingreso al letra: "+ mayuscula);
}
*/
