/* Source Programa02.js
Descripcion: PROGRAMA PARA LEER CALIFICACIONES DE UN GRUPO
1. LEER N (TAMAÑO DE GRUPO). LEER CALIFICACIONES
2. CONSERVAR LAS CALIFICACIONES(ARREGLO). CALCULAR EL PROMEDIO
    (SUMAR CALIFICACIONES Y DIVIDIR ENTRE N)
3. IMPRIMIR LAS CALIFICACIONES. IMPRIMIR EL PROMEDIO.
*/
var n;
var cal=[];
var suma=0;
var promedio;
var i;

leerCalificaciones();

function leerCalificaciones(){

alert("estoy en la funcion");


alert(n);

do{
      n=prompt("Escribe u numero");
}while(n>0);

/*  do{
    n= prompt("Escribe la cantidad de calificaciones");
}while(!(Number.isInteger(n) && n>0));

alert (n);
*/
}
