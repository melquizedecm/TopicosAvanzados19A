/*
Nombre: Jesus Alberto Lira Romero
Profesor:Melquizedec Moo Medina
Programa: Librerias
Fecha:10/mar/2019
*/

//Validar Enteros
function validarEntero(valor){
  //Validamos si es un número
     if(isNaN(valor)){
       return NaN;
       //Si es un número validamos si es entero si no retornara falso
     }else if(valor%1==0){
            return true;
     }else{
       return false;
     }
}

//Validar Flotantes
function validarFlotante(valor){

  //Validamos si es un número
  if(isNaN(valor)){
    return NaN;
    //Si es número validamos que sea flotante de lo contrario retorna falso
  }else if(valor%1!=0){
          return true;
   }else{
     return false;
   }
}
//Validar Mayusculas
function validarMayusculas(letras){
  //Variable para retornar valor true or false segun el caso
  var band=false;
  //Ciclo for para recorrer toda la cadena
  for(var index = 0; index < letras.length; index++){
    var letraActual = letras.charAt(index);
    //Si algun valor es minuscula se vuelve falso y se sale del ciclo for
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
function validarMinusculas(letras){
  //Variable para retornar valor true or false segun el caso
  var band=false;
  //Ciclo for para recorrer toda la cadena
  for(var index = 0; index < letras.length; index++){
    var letraActual = letras.charAt(index);
    //Si algun valor es mayusucla se vuelve falso y se sale del ciclo for
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
function validarRango(valor, x,y){
  //Validamos si alguno de los valores no es número
  if(isNaN(valor) || isNaN(x) || isNaN(y)){
    return NaN;
  }
  /*Comparamos los 2 parametros del rango para saber cual es mayor o cual es menor
   y en función de eso comparamos los valores con el rango*/
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
