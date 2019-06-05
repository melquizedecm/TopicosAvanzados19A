/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/* global NaN */

var entrada;
var band;
var index;
var letraActual;
var x;
var y;
/*Funcion que se encarga de pedir el dato*/

function Pedir(){
	entrada = prompt("Ingrese un dato:");
        return entrada;
}

/*funciones para validar*/
function Vacio(){
	var val = $('#dato').val();

	if(val === ""){
		alert("Ingrese un Valor primero");
	}else{
		alert("dato ingresado");
	}
}

function Int(){
if (isNaN(entrada)){
        alert ("Ups... " + entrada + " no es un número.");
    } else {
        if (entrada % 1===0) {
            alert ("Es un numero entero");
        } else {
            alert ("Es un numero decimal");
        }
    }
}

function Float(){
	
        if (!/^([0-9])*[.]?[0-9]*$/.test(entrada)){
   alert("El valor " + entrada + " no es un número");
        } else {
            alert("El valor " + entrada + "es float");
        }
}

function Minusculas(){
	
        //Variable para retornar valor true or false segun el caso
  //var band=false;
  //Ciclo for para recorrer toda la cadena
  for(var index = 0; index < entrada.length; index++){
    var letraActual = entrada.charAt(index);
    //Si algun valor es mayusucla se vuelve falso y se sale del ciclo for
    if(letraActual!==letraActual.toLowerCase()){
        
        alert("no es minuscula");
    } else{
        
        alert("si es una palabra minuscula");
        
    }
  }
}
       // band=false;
        //break;
    //}else{
      //band=true;
   // }
  //}
 // return band;
        
//}

function Mayusculas(){
    
    //Ciclo for para recorrer toda la cadena
  for(var index = 0; index < entrada.length; index++){
    var letraActual = entrada.charAt(index);
    //Si algun valor es minuscula se vuelve falso y se sale del ciclo for
    if(letraActual!==letraActual.toUpperCase()){
    
     alert("la palabra no es mayuscula");
    } else{
        
        alert("si es una palabra mayuscula");
        
    }
  }
}
   /* //Variable para retornar valor true or false segun el caso
  var band=false;
  //Ciclo for para recorrer toda la cadena
  for(var index = 0; index < entrada.length; index++){
    var letraActual = entrada.charAt(index);
    //Si algun valor es minuscula se vuelve falso y se sale del ciclo for
    if(letraActual!==letraActual.toUpperCase()){
        band=false;
        break;
    }else{
      band=true;
    }
  }
  return band;*/
	

function Rango(){
    
    
   
}
