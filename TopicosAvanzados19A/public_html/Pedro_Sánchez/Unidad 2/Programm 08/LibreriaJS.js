/*
 Nombre: Pedro Adrián Sánchez Cárdenas
 Profesor: Melquizedec Moo Medina
 Programa: Librerias
 Description: Librerias propias para validacion de numeros en varios tipos al
 igual que letras, que retornan TRUE o FALSE sea el caso.
 Todas validadas.
 Fecha: 10/mar/2019
 */

function Entero() { //Validacion Enteros
    valor = $("#entero").val();
    if (isNaN(valor)) {
        alert(false)
    } else if (valor % 1 == 0 && valor != "") {
        alert("Es entero")
    } else {
        alert("No es entero")
    }
}

//Validar Flotantes
function Flotante() {
    valor = $("#flotante").val();
    //Validamos si es un número
    if (isNaN(valor)) {
        alert(false)
    } else if (valor % 1 != 0 && valor != "") {
        alert("Es Flotante")
    } else {
        alert("No es Flotante")
    }
}
//Validar Mayusculas
function Mayusculas() {
    letras = $('#mayusculas').val();
    var aux = "";
    for (var index = 0; index < letras.length; index++) {
        var letraActual = letras.charAt(index);
        //Si algun valor es minuscula se vuelve falso y se sale del ciclo for
        if (letraActual != letraActual.toUpperCase() || letraActual == 0 || letraActual == 1 || letraActual == 2 || letraActual == 3 || letraActual == 4 || letraActual == 5 || letraActual == 6 || letraActual == 7 || letraActual == 8 || letraActual == 9) {
            aux = "No Cumple";
            break;
        } else {
            aux = "Cumple";
        }
    }
    alert(aux)
}
//Validar Minusculas
function Minusculas() {
    letras = $('#minusculas').val();
    //Variable para retornar valor true or false segun el caso
    var aux = "";
    //Ciclo for para recorrer toda la cadena
    for (var index = 0; index < letras.length; index++) {
        var letraActual = letras.charAt(index);
        //Si algun valor es mayusucla se vuelve falso y se sale del ciclo for
        if (letraActual != letraActual.toLowerCase() || letraActual == 0 || letraActual == 1 || letraActual == 2 || letraActual == 3 || letraActual == 4 || letraActual == 5 || letraActual == 6 || letraActual == 7 || letraActual == 8 || letraActual == 9) {
            aux = "No Cumple";
            break;
        } else {
            aux = "Cumple";
        }
    }
    alert(aux)
}
//Validar Rango
function Rango(valor, x, y) {
    valor = $('#Rango').val();
    x = $('#Rango1').val();
    y = $('#Rango2').val();
    if (isNaN(valor) || isNaN(x) || isNaN(y)) {
        document.getElementById("validacionrango").innerHTML = false;
    }
    /*Comparamos los 2 parametros del rango para saber cual es mayor o cual es menor
     y en función de eso comparamos los valores con el rango*/
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
