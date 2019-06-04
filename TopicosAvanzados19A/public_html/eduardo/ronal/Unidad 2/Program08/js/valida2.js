/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var resp;
var x;
var y;
/*se ingresa por teclado el numero o palabra que se va a validar*/

function Enter(){
	resp = prompt("Porfavor igrese el numero o la palabra a validar:");
        return resp;
}


function Vacio(){
	var val = $('#dato').val();

	if(val === ""){
		alert("Ingrese un Valor primero");
	}else{
		alert("dato ingresado");
	}
}
/*esta funcion valida que el numero ingresado des un numero entero*/
function Int(){
if (isNaN(resp)){
        alert ("ERROR" + resp + " no es un número.");
    } else {
        if (resp % 1===0) {
            alert (resp + " Es un numero entero");
        } else {
            alert (resp + " Es un numero decimal");
        }
    }
}
/*funcion que valida si lo ungresado es un numero float*/
function Float(){
	
        if (!/^([0-9])*[.]?[0-9]*$/.test(resp)){
   alert("CORRECRO " + resp + " es un número float");
        } else if(/^([0-9])*[.]?[0-9]*$/.test(resp)){
            alert("ERROR " + resp + " NO es float");
        }
}
/*funcion que valida si lo ingresado esta en minusculas*/
function Minusculas(){
	
      
  //recorremos la cadena
  for(var long = 0; long < resp.length; long++){
    var Palabra = resp.charAt(long);
    //se hace la comparacion
    if(Palabra!==Palabra.toLowerCase()){
        
        alert(resp + " no esta en minuscula");
    } else{
        
        alert(resp + " si es una palabra minuscula");
        
    }
  }
}
  

function Mayusculas(){
    
    //Ciclo for para recorrer toda la cadena
  for(var long = 0; long < resp.length; long++){
    var Palabra = resp.charAt(long);
    //se hace la comparacion
    if(Palabra!==Palabra.toUpperCase()){
    
     alert("la palabra no es mayuscula");
    } else{
        
        alert("si es una palabra mayuscula");
        
    }
  }
}
  
	

function Rango(){
    
    
   
}
