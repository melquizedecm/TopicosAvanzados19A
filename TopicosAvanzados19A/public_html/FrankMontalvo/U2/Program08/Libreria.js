/*
Nombre: Francisco Montalvo Hidalgo
Profesor:Melquizedec Moo Medina
Programa: Mi primera Libreria para validar diferentes elementos
Fecha:10/mar/2019
*/

//Validar Enteros
function validarEntero(){
  valor=$("#entero").val();
    if(isNaN(valor)){
     document.getElementById("validacionentero").innerHTML=false;
      //Si es un número validamos si es entero si no retornara falso
    }else if(valor%1==0 && valor!=""){
            document.getElementById("validacionentero").innerHTML=true;
    }else{
     document.getElementById("validacionentero").innerHTML=false;
    }
}

//Validar Flotantes
function validarFlotante(){
  valor=$("#flotante").val();
  //Validamos si es un número
  if(isNaN(valor)){
    document.getElementById("validacionflotante").innerHTML=false;
    //Si es número validamos que sea flotante de lo contrario retorna falso
  }else if(valor%1!=0 &&valor!=""){
          document.getElementById("validacionflotante").innerHTML=true;
   }else{
     document.getElementById("validacionflotante").innerHTML=false;
   }
}
//Validar Mayusculas
function validarMayusculas(){
  letras=$('#mayusculas').val();
  //Variable para retornar valor true or false segun el caso
  var band=false;
  //Ciclo for para recorrer toda la cadena
  for(var index = 0; index < letras.length; index++){
    var letraActual = letras.charAt(index);
    //Si algun valor es minuscula se vuelve falso y se sale del ciclo for
    if(letraActual!=letraActual.toUpperCase() || letraActual==0 || letraActual==1 || letraActual==2 || letraActual==3 || letraActual==4 || letraActual==5 || letraActual==6 || letraActual==7 || letraActual==8 || letraActual==9){
        band=false;
        break;
    }else{
      band=true;
    }
  }
  document.getElementById("validacionmayus").innerHTML=band;
}
//Validar Minusculas
function validarMinusculas(){
  letras=$('#minusculas').val();
  //Variable para retornar valor true or false segun el caso
  var band=false;
  //Ciclo for para recorrer toda la cadena
  for(var index = 0; index < letras.length; index++){
    var letraActual = letras.charAt(index);
    //Si algun valor es mayusucla se vuelve falso y se sale del ciclo for
    if(letraActual!=letraActual.toLowerCase() || letraActual==0 || letraActual==1 || letraActual==2 || letraActual==3 || letraActual==4 || letraActual==5 || letraActual==6 || letraActual==7 || letraActual==8 || letraActual==9){
        band=false;
        break;
    }else{
      band=true;
    }
  }
  document.getElementById("validacionmin").innerHTML=band;
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

      document.getElementById("validacionrango").innerHTML=false;
    }else{

      document.getElementById("validacionrango").innerHTML=true;
    }
  }else if(y<x){
    if(valor <=x && valor>=y){

      document.getElementById("validacionrango").innerHTML=false;
    }else{
      
      document.getElementById("validacionrango").innerHTML=true;
    }
  }
}
