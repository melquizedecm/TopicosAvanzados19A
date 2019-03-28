function valEntero() { // Validacion Enteros
	valor = $("#entero").val(); // pasamos el id del input donde insertamos
	// nuestro numero a una variable
	if (isNaN(valor)) { // verificamos si la variable esta vacia, si es asi, nos
		// avisara que es falso
		alert(false)
	} else if (valor % 1 == 0 && valor != "") { // si el valor es modulo de 1
		/* si es igual a 0, retorna true */
		alert(true)
	} else {
		alert(false)
	}
}

// Validar Flotantes
function validarFlotante() {
	valor = $("#flotante").val();
	if (isNaN(valor)) { /* Valida si tiene datos */
		alert(false)
	} else if (valor % 1 != 0 && valor != "") {
		/* Si es modulo de 1 retorna true */
		alert(true)
	} else {
		alert(false) // si no es ni una de las otras dos opciones, nos
		// retornara falso
	}
}
// Validar Mayusculas
function validarMayusculas() {
	letras = $('#mayusculas').val();
	// Variable para retornar valor true or false segun el caso
	var b = false;
	// for para leer string
	for (var index = 0; index < letras.length; index++) {
		var charA = letras.charAt(index);
		// Si algun valor es minuscula se vuelve falso y se sale del ciclo for
		if (charA != charA.toUpperCase() || charA == 0 || charA == 1
				|| charA == 2 || charA == 3 || charA == 4 || charA == 5
				|| charA == 6 || charA == 7 || charA == 8 || charA == 9) {
			b = false;
			break;
		} else {
			b = true;
		}
	}
	alert(b)
}
// Validar Minusculas
function validarMinusculas() {
	letras = $('#minusculas').val();
	// Variable para retornar valor true or false segun el caso
	var bandera = false;
	// Ciclo for para recorrer toda la cadena
	for (var index = 0; index < letras.length; index++) {
		var charA = letras.charAt(index);
		// Si algun valor es mayusucla se vuelve falso y se sale del ciclo for
		if (charA != charA.toLowerCase() || charA == 0 || charA == 1
				|| charA == 2 || charA == 3 || charA == 4 || charA == 5
				|| charA == 6 || charA == 7 || charA == 8 || charA == 9) {
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
	 * comprobando cual es mayor o menor
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
