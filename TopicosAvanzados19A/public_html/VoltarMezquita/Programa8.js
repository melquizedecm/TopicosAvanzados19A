var N;
var N2;
var N3;
var T=e.value;
var T3;
var X;
var p;
var Resultado;
function Rango(){
N=prompt('Ingresa el rango minimo');
N2=prompt('Ingresa el rango maximo');
N3=prompt('Numero a comparar en el rango');
if(N>=N3 && N2<=N3){
  alert("El numero esta en el rango");
}else{
  alert("El numero no esta en el rango");
}
}

function MAYUSCULAS() {
  T=prompt('Ingrese texto');
  var T2=T.toUpperCase();
    alert(T2);
}

function minusculas(){
  T3=prompt('Ingrese texto');
  var T4=T3.toLowerCase();
  alert(T4);
}

function Entero(){
  X=prompt('Numero a convertir en entero');
  var Y=Math.round(X)
  alert(Y);
}

function Flotante(){
  P=parseFloat( Resultado )
}
