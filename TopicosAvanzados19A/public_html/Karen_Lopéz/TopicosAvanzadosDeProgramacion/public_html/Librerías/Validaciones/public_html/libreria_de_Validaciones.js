var valor;

function Vacio(val){  //función que permitira al usuario registrar los valores 
    valor = document.getElementById("valor");
	var val = valor.value;
	if(val === ""){
		alert("Ingrese el dato primero");
	}else{
		alert("dato ingresado");
	}
}

//validacion de Enteros
function validarEntero(valor) {     //hará la validacion si es numero entero
    if (isNaN(valor)) {     //retornara true o false dependiendo del caso
        return NaN;
    } else if (valor % 1 === 0) {
        return true;
    } else {
        return false;
    }
}

//validacion de Float
function validarFloat(valor) {
    if (isNaN(valor)) {
        return NaN;
    } else if (valor % 1 !== 0) {
        return true;
    } else {
        return false;
    }
}

//validacion de Mayuscula
function validarMayus(letras) {
    var band = false;
    for (var index = 0; index < letras.length; index++) {       //ciclo for
        var letraB = letras.charAt(index);
        if (letraB !== letraB.toUpperCase()) {     //cuando algun valor es minuscula se vuelve falso y se sale del ciclo for, el toUpperCase sirve para convertir las variables en mayusculas
            band = false;
            break;
        } else {
            band = true;
        }
    }
    return band;
}

//validacion Minuscula
function validarMinus(letras) {
    var band = false;
    for (var index = 0; index < letras.length; index++) {
        var letraA = letras.charAt(index);
        if (letraA !== letraA.toLowerCase()) {     //el toLowerCase sirve para convertir las variables en minusculas
            band = false;
            break;
        } else {
            band = true;
        }
    }
    return band;
}

//validacion Rango
function validarRango(valor, x, y) {
    if (isNaN(valor) || isNaN(x) || isNaN(y)) { //validacion de las variables
        return NaN;
    }
    if (x < y) {    //comparacion de los parametros del rango de cual es > o <
        if (valor <= y && valor >= x) {
            return true;
        } else {
            return false;
        }
    } else if (y < x) {
        if (valor <= x && valor >= y) {
            return true;
        } else {
            return false;
        }
    }
}