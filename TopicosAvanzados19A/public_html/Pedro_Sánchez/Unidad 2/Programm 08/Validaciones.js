
/* 
*	Sours: Libreria para valores numericos.
*	Description: Libreria Personalizada para obtener valores numericos.
*	Date: 11/03/2019
*	Autor: Pedro Adrián Sánchez Cárdenas.
*/

var entrada;

/*Funcion que se encarga de pedir el dato*/
function Pedir(){
	entrada = prompt("Ingrese un dato:");


}

/*funciones para validar*/
function validarEntero(entrada){
     if(isNaN(valor)){
       return NaN;

     }else if(valor%1==0){
            return true;
     }else{
       return false;
     }
}

//Validar Flotantes
function validarFlotante(entrada){
  
  //Validamos si es un número
  if(isNaN(valor)){
    return NaN;

  }else if(valor%1!=0){
          return true;
   }else{
     return false;
   }
}
//Validar Mayusculas
function validarMayusculas(entrada){
  var band=false;
  //Ciclo for para recorrer toda la cadena
  for(var index = 0; index < letras.length; index++){
    var letraActual = letras.charAt(index);

    if(letraActual!=letraActual.toUpperCase()){
        band=false;
        break;
    }else{
      band=true;
    }
  }
  return band;
}
//Validar Minusculas
function validarMinusculas(entrada){
  var band=false;
  //Ciclo for para recorrer toda la cadena
  for(var index = 0; index < letras.length; index++){
    var letraActual = letras.charAt(index);

    if(letraActual!=letraActual.toLowerCase()){
        band=false;
        break;
    }else{
      band=true;
    }
  }
  return band;
}
//Validar Rango
function validarRango(entrada, x,y){
  //Validamos si alguno de los valores no es número
  if(isNaN(valor) || isNaN(x) || isNaN(y)){
    return NaN;
  }

  if(x<y){
    if(valor <=y && valor>=x){
      return true;
    }else{
      return false;
    }
  }else if(y<x){
    if(valor <=x && valor>=y){
      return true;
    }else{
      return false;
    }
  }
}