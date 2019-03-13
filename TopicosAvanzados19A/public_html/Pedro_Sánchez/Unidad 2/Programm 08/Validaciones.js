
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
function Vacio(){
	var val = $('#dato').val();

	if(val === ""){
		alert("Ingrese un Valor primero");
	}else{
		alert("dato ingresado");
	}
}

function Int(){

}

function Float(){
	
}

function Minusculas(){
	
}

function Mayusculas(){
	
}
function Rango(){
	Vacio()
}