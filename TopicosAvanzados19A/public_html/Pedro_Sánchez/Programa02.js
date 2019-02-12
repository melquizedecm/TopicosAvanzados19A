

var n;
var cal=[];
var promedio;
var i;

leerCalificaciones();

function leerCalificaciones(){
	
	while(true){

		n = prompt("Escribe la cantidad de calificaciones:");
		if (n>0 && Number.isInteger(n)){
			break;
		}else{
			 alert("else");
		}

	}

		

		alert("El número " + n + ": es positivo y mayor que 0");

/*
	alert(); // imprimir en una ventana.
	document.writte(); //Imprimir en la página.
	prompt(); //leer variables.
*/
}