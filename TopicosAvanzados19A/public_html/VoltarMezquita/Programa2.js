/*1- Leer la calificcion (0-100) de un grupo.
  2- Conservarlas. Calcular el promedio.
  3- Imprimir Calif y Prom.*/
  // var es variable local
var n;
var cal=[];
var suma=0;
var promedio;
var i;
var bandera=true;
leerCalificaciones();
function leerCalificaciones(){
  do{
    n=prompt("Escribe el numero de alumnos"); //imprimir
  }while(Number.isInteger(n)==false&& !(n>0)); //si n es entero
document.write(n);

}
