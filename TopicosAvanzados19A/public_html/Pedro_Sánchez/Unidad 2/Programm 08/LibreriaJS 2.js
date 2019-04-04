/*
Nombre: Pedro Adrián Sánchez Cárdenas
Profesor:Melquizedec Moo Medina
Programa: Librerias
Fecha:10/mar/2019
 */

function valEntero() {
	valor = $("#entero").val();
	if (isNaN(valor)) { //validamos que no este vacio.
		alert(false)
	} else if (valor % 1 == 0 && valor != "") {
		alert(true)
	} else {
		alert(false)
	}
}

// Validar Flotantes
function validarFlotante() {
	valor = $("#flotante").val();
	// Validamos si es un número
	if (isNaN(valor)) { 
		alert(false)
	} else if (valor % 1 != 0 && valor != "") {
		alert(true)
	} else {
		alert(false)
	}
}
// Validar Mayusculas
function validarMayusculas() {
	letras = $('#mayusculas').val();
	// Variable para retornar valor true or false segun el caso
	var bandera = false;
	// Ciclo for para recorrer toda la cadena
	for (var index = 0; index < letras.length; index++) {
		var letraActual = letras.charAt(index);
		// Si algun valor es minuscula se vuelve falso y se sale del ciclo for
		if (letraActual != letraActual.toUpperCase() || letraActual == 0
				|| letraActual == 1 || letraActual == 2 || letraActual == 3
				|| letraActual == 4 || letraActual == 5 || letraActual == 6
				|| letraActual == 7 || letraActual == 8 || letraActual == 9) {
			bandera = false;
			break;
		} else {
			bandera = true;
		}
	}
	alert(bandera)
}
// Validar Minusculas
function validarMinusculas() {
	letras = $('#minusculas').val();
	// Variable para retornar valor true or false segun el caso
	var bandera = false;
	// Ciclo for para recorrer toda la cadena
	for (var index = 0; index < letras.length; index++) {
		var letraActual = letras.charAt(index);
		// Si algun valor es mayusucla se vuelve falso y se sale del ciclo for
		if (letraActual != letraActual.toLowerCase() || letraActual == 0
				|| letraActual == 1 || letraActual == 2 || letraActual == 3
				|| letraActual == 4 || letraActual == 5 || letraActual == 6
				|| letraActual == 7 || letraActual == 8 || letraActual == 9) {
			bandera = false;
			break;
		} else {
			bandera = true;
		}
	}
	alert(bandera)
}
// Validar Rango
function validarRango(valor, x, y) {
	valor = $('#Rango').val();
	x = $('#Rango1').val();
	y = $('#Rango2').val();
	if (isNaN(valor) || isNaN(x) || isNaN(y)) {
		document.getElementById("validacionrango").innerHTML = false;
	}
	/*
	 * Comparamos los 2 parametros del rango para saber cual es mayor o cual es
	 * menor y en función de eso comparamos los valores con el rango
	 */
	if (x < y) {
		if (valor <= y && valor >= x) {
			alert(true)
		} else {
			alert(false)
		}
	} else if (y < x) {
		if (valor <= x && valor >= y) {
			alert(true)
		} else {
			alert(false)
		}
	}
}
