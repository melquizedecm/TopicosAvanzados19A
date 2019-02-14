/*source: Programa02.js
Description: Programa para leer calificaciones de un grupo 
1.leer n(tamaño de grupo).Leer calificaciones
2. Conservar las calificaciones(arreglo).Calcular el promedio
(sumar calificaciones y dividir entre n)
3.Imprimir las calificaciones. Imprimir el promedio
*/

var n;
var cal=[];
var suma=0;
var promedio;
var i;
leerCalificaciones();

function leerCalificaciones(){
	do{

		n=prompt("Escribe la cantidad de calificaciones");
	}while (!(Number.isInteger(n)) && !(n>0));

alert(n);
}


