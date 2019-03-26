/* DOCTYPE JavaScript
* Sourse: Programa07.js
* Description: Funciones en JS para obtener cantidad de alumnos, leer sus
calificaciones y para obtener el promedio, todas las funciones estan enlasadas.
* Date: 07/03/2019
* Autor: Jesus Lira Romero.
*/

var grupo=0;
var cal = [];
var suma = 0;
var i;

function getCantidadAlumnos(){ //funtion para ingresar el numero de alumnos
  while(true){
    grupo = Number(prompt("Escribela Cantidad de Alumnos"));
    if(grupo %1===0 && grupo >=0){ //chrecamos que el numero ingresado sea un entero positivo
      break;//si la condicional se cumple se rompe el ciclo
    }else{
      alert("Escribe un entero positivo") //en caso erroneo, enviara un mensaje indicando que se debe de ingresar y pedira de nuevo un numero entero positivo, y asi hasta que la condicion se cumpla.
    }
  }
}

//función para leer las calificaciónes
function leerCalificaciones() {
    //Ciclo for en el que se validan las calificaciones.
    for (i = 0; i < grupo; i++) { //un for  que va de 0 hasta el numero de alumnos
        while (true) {
		    calificacion = Number(prompt("Escribela la calificacion"));
		    if(calificacion %1===0 && calificacion >=0 && calificacion<=100){ //verificacon de que el numero ingresado este en el rango de entre 0 y 100
		    	cal[i]=Number(calificacion); //ingresando las calificaciones al arreglo
		      break;
		    }else{
		      alert("Escribe un entero positivo")
		    }

    	}
	    suma = suma + cal[i];
	}
}

function getPromedio(){ //function para obtener el promedio de todos los alumnos
	var promedio = Number(suma)/Number(grupo); //como las variables fueron declaradas de manera global, solo vasta con llamarlas por qu eya tienen un valor establecido previamente por las anteriores funciones y hacer la operacion
	alert("El promedio de las calificaciones es: "+ promedio);
}
