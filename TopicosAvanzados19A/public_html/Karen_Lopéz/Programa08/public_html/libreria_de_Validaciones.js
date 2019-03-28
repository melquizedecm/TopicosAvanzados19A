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
    valor=$("#entero").val();
    if(isNaN(valor)){
     document.getElementById("validacionentero").innerHTML=false;     //retornara true o false dependiendo del caso
    }else if(valor%1==0 && valor!=""){ 
            document.getElementById("validacionentero").innerHTML=true;
    }else{
     document.getElementById("validacionentero").innerHTML=false;
    }
}

//validacion de Float
function validarFloat(valor) {
    valor=$("#float").val();
    if (isNaN(valor)) {
        document.getElementById("validacionfloat").innerHTML=false;  //retorna, verdadero o falso segun el caso
    } else if (valor%1==0 && valor!="") {
        document.getElementById("validacionfloat").innerHTML=true;
    } else {
        document.getElementById("validacionfloat").innerHTML=false;
    }
}

//validacion de Mayuscula
function validarMayus() {
    valor=$("#mayus").val();
    var band = false;
     for(var index = 0; index < letras.length; index++){
    var letraB = letras.charAt(index);       //ciclo for
    //cuando algun valor es minuscula se vuelve falso y se sale del ciclo for, el toUpperCase sirve para convertir las variables en mayusculas
        if(letraActual!=letraActual.toUpperCase() || letraActual==0 || letraActual==1 || letraActual==2 || letraActual==3 || letraActual==4 || letraActual==5 || letraActual==6 || letraActual==7 || letraActual==8 || letraActual==9){
        band=false;
        break;
        } else {
            band=true;
    }
  }
  document.getElementById("validacionmayus").innerHTML=band;
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