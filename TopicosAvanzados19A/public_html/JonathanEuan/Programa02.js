/*
Descripcion: programa para leer calificaciones de un grupo
1. Leer n(tamaño de grupo). leer calificaciones
2. Conservar las calificaciones(arreglo). calcular el promedio
  (Sumar calificaciones y Dividir entre n)
3. Imprimir las calificaciones. Imprimir promedio.
*/


var n;
var cal=[];
var suma=0;
var promedio;
var i;

leerCalificaciones();


function leerCalificaciones(){

  alert("estoy en la funcion");


  alert(n);// imprimir n

  do{
    n=prompt("Escribe un número");// leer un numero
  }while(n>0);
/*  do{
      n=prompt("Escribe la cantidad de calificaciones");
  }while!(Number.IsInteger(n) && n>0){

  }
  //alert();  //Imprimir
  document.write("aqui pongo el mensaje a imprimir"); //imprimir en la pagina
  prompt(); //leer
*/
}
