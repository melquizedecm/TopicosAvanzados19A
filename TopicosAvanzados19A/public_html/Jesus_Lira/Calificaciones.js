/*1- Leer la calificcion (0-100) de un grupo.
  2- Conservarlas. Calcular el promedio.
  3- Imprimir Calif y Prom.*/

var n;  //se escribe var por wue si no seria una variable loczl
var cal=[];
var suma=0;
var promedio;
var i;
leerCalificaciones();
function leerCalificaciones(){

do{
n=prompt("Escribe el numero de alumnos a calificar"); //por lo pronto para imprimir
}while (!Number.isInteger(n) && !(n>0));/*para saber si n es entero*/

    alert(n);
}
