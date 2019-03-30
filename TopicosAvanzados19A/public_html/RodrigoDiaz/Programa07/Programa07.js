/*source: Programa02.js
Description: Programa para leer calificaciones de un grupo 
1.leer n(tamaño de grupo).Leer calificaciones
2. Conservar las calificaciones(arreglo).Calcular el promedio
(sumar calificaciones y dividir entre n)
3.Imprimir las calificaciones. Imprimir el promedio
*/
var grupo=0;
var cal = [];
var suma = 0;
var i;

function getCantidadAlumnos(){
  while(true){
    grupo = Number(prompt("Escribela Cantidad de Alumnos"));
    if(grupo %1===0 && grupo >=0){
      break;
    }else{
      alert("Escribe un entero positivo")
    }
  }
}

//función para leer las calificaciónes
function leerCalificaciones() {
    //Ciclo for en el que se validan las calificaciones.
    for (i = 0; i < grupo; i++) {
        while (true) {
        calificacion = Number(prompt("Escribela la calificacion"));
        if(calificacion %1===0 && calificacion >=0 && calificacion<=100){
          cal[i]=Number(calificacion);
          break;
        }else{
          alert("Escribe un entero positivo")
        }

      }
      suma = suma + cal[i];
  }
}

function getPromedio(){
  var promedio = Number(suma)/Number(grupo);
  alert("El promedio de calificaciones es: "+ promedio);
}
