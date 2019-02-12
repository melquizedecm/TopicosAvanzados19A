/*
Descripcion:
*/
var n;
var cal=[];
var suma=0;
var promedio;
var i;
var bandera=true;
leerCalificaciones();
function leerCalificaciones(){
  do{
    n=prompt("Escribe el numero de alumnos");
  }while(Number.isInteger(n)==false&& !(n>0));
document.write(n);

}
