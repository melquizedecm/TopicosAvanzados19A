/* programa para validar enteros, flotantes, minusculas, mayusculas y rango
jueves 07 de marzo del 2019 */

var palabra;
var entero=0;
var numero=0;;
var mayuscula;
var x1;
var x2;
var x3;

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

  function getRango(){
    while(true){
      x1=prompt("Ingrese un número: ");
      x2=prompt("Ingrese otro un número: ");
      x3=prompt("Ingrese otro número:");
        if(x1 %1===0){
            if(x2 %1===0){
                if(x3 %1===0){//if para validar si el número es entero.
            if(x3<=x1 && x3>x2){
              break;
            }else{
              alert("su número esta fuera del rango");
            }
    }else{
      alert("Ingrese otro número");
    }
  } else{

  } alert("No es un rango valido");
    }else{
        alert("No es un rango valido");
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
