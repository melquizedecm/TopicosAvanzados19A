/*1- Leer la calificcion (0-100) de un grupo.
  2- Conservarlas. Calcular el promedio.
  3- Imprimir Calif y Prom.*/

var n,i;  //se escribe var por que si no seria una variable local
var cal=[];
var suma=0;
var promedio;
var i;



leerCalificaciones();
promedio=suma/n;

alert(promedio);

function leerCalificaciones(){

do{
n=prompt("Escribe el numero de alumnos a calificar"); //por lo pronto para imprimir
}while (!Number.isInteger(n) && !(n>0));/*para saber si n es entero*/

for (i = 0; i < n; i++) {
cal[i]=prompt("Escribe la calificacion ");
suma=suma+parseInt(cal[i]);
}
}
