/*Source: Programa08
 Description: libreria
 Date: 09/04/19
 autor: Karen Janett López Lozano*/
var valor;

function Vacio(val) {  //función que permitira al usuario registrar los valores 
    valor = document.getElementById("valor");
    var val = valor.value;
    if (val === "") {
        alert("Ingrese el dato primero");
    } else {
        alert("dato ingresado");
    }
}

//validacion de Enteros
function validarEntero(valor) {     //hará la validacion si es numero entero
    valor = $("#entero").val();
    if (isNaN(valor)) {
        //<--el innerHTML es la propiedad que accede a lo que va entre las etiquetas de un elemento HTML
        //en este caso sería los datos que el usuario ingresa-->
        document.getElementById("validacionentero").innerHTML = false;     //retornara true o false dependiendo del caso
    } else if (valor % 1 == 0 && valor != "") {
        document.getElementById("validacionentero").innerHTML = true;
    } else {
        document.getElementById("validacionentero").innerHTML = false;
    }
}

//validacion de Float
function validarFloat(valor) {
    valor = $("#float").val();
    if (isNaN(valor)) {
        document.getElementById("validacionfloat").innerHTML = false;  //retorna, verdadero o falso segun el caso
    } else if (valor % 1 == 0 && valor != "") {
        document.getElementById("validacionfloat").innerHTML = true;
    } else {
        document.getElementById("validacionfloat").innerHTML = false;
    }
}

//validacion de Mayuscula
function validarMayus() {
    valor = $("#mayus").val();
    var band = false;
    for (var index = 0; index < letras.length; index++) {
        var letraB = letras.charAt(index);       //ciclo for
        //cuando algun valor es minuscula se vuelve falso y se sale del ciclo for; el toUpperCase sirve para convertir las variables en mayusculas
        if (letraB != letraB.toUpperCase() || letraB == 0 || letraB == 1 || letraB == 2 || letraB == 3 || letraB == 4 || letraB == 5 || letraB == 6 || letraB == 7 || letraB == 8 || letraB == 9) {
            band = false;
            break;
        } else {
            band = true;
        }
    }
    document.getElementById("validacionmayus").innerHTML = band;
}

//validacion Minuscula
function validarMinus() {
    letras = $('#minus').val();
    var band = false;
    for (var index = 0; index < letras.length; index++) {
        var letraA = letras.charAt(index);
        //el toLowerCase sirve para convertir las variables en minusculas
        if (letraA != letraA.toLowerCase() || letraA == 0 || letraA == 1 || letraA == 2 || letraA == 3 || letraA == 4 || letraA == 5 || letraA == 6 || letraA == 7 || letraA == 8 || letraA == 9) {
            //Si algun valor es mayusucla se vuelve falso y se sale del ciclo for
            band = false;
            break;
        } else {
            band = true;
        }
    }
    document.getElementById("validacionmin").innerHTML = band;
}

//validacion Rango
function validarRango(valor, x, y) { //validacion de las variables
    valor = $('#Rango').val();
    x = $('#Rango1').val();
    y = $('#Rango2').val();
    if (isNaN(valor) || isNaN(x) || isNaN(y)) {
        document.getElementById("validacionrango").innerHTML = false;
        //comparacion de los parametros del rango de cual es > o <
        if (x < y) {
            if (valor <= y && valor >= x) {

                document.getElementById("validacionrango").innerHTML = false;
            } else {

                document.getElementById("validacionrango").innerHTML = true;
            }
        } else if (y < x) {
            if (valor <= x && valor >= y) {

                document.getElementById("validacionrango").innerHTML = false;
            } else {

                document.getElementById("validacionrango").innerHTML = true;
            }
        }
    }
}