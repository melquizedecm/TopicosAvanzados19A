/*
Nombre: Jesus Alberto Lira Romero
Profesor: Melquizedec Moo Medina
Programa: Librerias
Description: Librerias propias para validacion de numeros en varios tipos al
            igual que letras, que retornan TRUE o FALSE sea el caso.
            Todas validadas.
Fecha: 10/mar/2019
*/

function valEntero(){ //Validacion Enteros
  valor=$("#entero").val(); //pasamos el id del input donde insertamos nuestro numero a una variable
    if(isNaN(valor)){ //verificamos si la variable esta vacia, si es asi, nos avisara que es falso
    alert(false)
  }else if(valor%1==0 && valor!=""){ // si el valor es modulo de 1 igual a 0, retornara verdadero ya que esto significa que es un numero entero
            alert(true)
    }else{ // si no es ni una de las otras dos opciones, nos retornara falso
     alert(false)
    }
}

//Validar Flotantes
function validarFlotante(){
  valor=$("#flotante").val();
  //Validamos si es un número
  if(isNaN(valor)){ //verificamos si la variable esta vacia, si es asi, nos avisara que es falso
    alert(false)
  }else if(valor%1!=0 &&valor!=""){ // si el valor es modulo de 1 diferente de 0, retornara verdadero ya que esto significa que NO es un numero entero
          alert(true)
   }else{
     alert(false) // si no es ni una de las otras dos opciones, nos retornara falso
   }
}
//Validar Mayusculas
function validarMayusculas(){
  letras=$('#mayusculas').val();
  //Variable para retornar valor true or false segun el caso
  var bandera=false;
  //Ciclo for para recorrer toda la cadena
  for(var index = 0; index < letras.length; index++){
    var letraActual = letras.charAt(index);
    //Si algun valor es minuscula se vuelve falso y se sale del ciclo for
    if(letraActual!=letraActual.toUpperCase() || letraActual==0 || letraActual==1 || letraActual==2 || letraActual==3 || letraActual==4 || letraActual==5 || letraActual==6 || letraActual==7 || letraActual==8 || letraActual==9){
        bandera=false;
        break;
    }else{
      bandera=true;
    }
  }
  alert(bandera)
}
//Validar Minusculas
function validarMinusculas(){
  letras=$('#minusculas').val();
  //Variable para retornar valor true or false segun el caso
  var bandera=false;
  //Ciclo for para recorrer toda la cadena
  for(var index = 0; index < letras.length; index++){
    var letraActual = letras.charAt(index);
    //Si algun valor es mayusucla se vuelve falso y se sale del ciclo for
    if(letraActual!=letraActual.toLowerCase() || letraActual==0 || letraActual==1 || letraActual==2 || letraActual==3 || letraActual==4 || letraActual==5 || letraActual==6 || letraActual==7 || letraActual==8 || letraActual==9){
        bandera=false;
        break;
    }else{
      bandera=true;
    }
  }
  alert(bandera)
}
//Validar Rango
function validarRango(valor, x,y){
  valor=$('#Rango').val();
  x=$('#Rango1').val();
  y=$('#Rango2').val();
  if(isNaN(valor) || isNaN(x) || isNaN(y)){
    document.getElementById("validacionrango").innerHTML=false;
  }
  /*Comparamos los 2 parametros del rango para saber cual es mayor o cual es menor
   y en función de eso comparamos los valores con el rango*/
  if(x<y){
    if(valor <=y && valor>=x){
      alert(true)
    }else{
      alert(false)
    }
  }else if(y<x){
    if(valor <=x && valor>=y){
      alert(true)
    }else{
      alert(false)
    }
  }
}
