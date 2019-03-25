var nume= 0; //= document.getElementById("inputGrupo").value;
var numf=0;

function getEnteros(){
      while(true){
        num=Number(prompt("escribe un numero entero"));
        if(num %1===0){
            alert("su palabra no tiene minusculas");
          break;
        }else{
          alert("su palabra tiene minusculas");
        }
      }
}

function getFlotante(){
      while(true){
        numf=Number(prompt("escribe un numero con decimales"));
        if(numf %1===!0){
            alert("numero aceptado");
          break;
        }else{
          alert("su palabra no tiene minusculas");
        }
      }
}

function Rango() {
  /* aqui se inician las variables*/
var rango=10;
    /* for para ingresar los datos en un arreglo */

        while (true) {
            rango = prompt("escribe un numero entre 1 y 20");

            if (rango % 1 === 0 && rango >= 1 && rango <= 20) {
                alert("numero aceptado");
                break;
            } else {
                alert("Numero fuera del rango");
            }
        }
}

function validarMayusculas(){
var palabra;
  c=0
palabra= prompt("escribe una palabra");
  for(var i = 0; i < letras.length; i++){
    palabra = palabra.charAt();
      cal[i] = Number(calificaciones);
    if(palabra===!palabra.toUpperCase()){
        c=0
        break;
    }else{
      c=c+1;
    }
  }
  if(c>0){
    alert("hay mayusculas en tu frase");
  }

}

function validarMinusculas(){
var palabra;
  c=0
palabra= prompt("escribe una palabra");
  for(var i = 0; i < letras.length; i++){
    palabra = palabra.charAt();
      cal[i] = Number(calificaciones);
    if(palabra===!palabra.toLowerCase()){
        c=0
        break;
    }else{
      c=c+1;
    }
  }
  if(c>0){
    alert("hay mayusculas en tu frase");
  }

}
