/*1- Leer la calificcion (0-100) de un grupo.*/

var n;  //se escribe var por que si no seria una variable local
var cal=[];
var suma=0;
var promedio;
var i;
leerCalificaciones();
function leerCalificaciones(){

do{
n=prompt("Escribe el numero de alumnos a calificar"); //por lo pronto para imprimir
}while (!Number.isInteger(n) && !(n>0) && !(n<100));/*para saber si n es entero y verificar si no es un caracter*/

    alert(n);
}
