/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* global NaN */

var grupo=0; //= document.getElementById("inputGrupo").value;
var cal = [];
var suma = 0;
var i;

function getEnteroPositivo(){
  while(true){
    grupo = prompt("Escribela Cantidad de Alumnos");
    if(grupo %1===0 && grupo >=0){
      break;
    }else{
      alert("Escribe un entero positivo")
    }
  }

}
//función para leer las calificaciónes
function leerCalificaciones() {
    //Ciclo for en el que se validan las calificaciones y se leen todas ellas para guardarlas
    for (i = 0; i <grupo ; i++) {
        while (true) {
            var calificaciones = prompt("escribe la calificación del alumno");
            cal[i] = Number(calificaciones);
            if (cal[i] % 1 === 0 && cal[i] >= 0 && cal[i] <= 100) {
                break;
            } else {
                alert("No es una calificacion valida");
            }
        }

        suma = suma + cal[i];
    }
    //promedio de calificaciones
    alert("Suma de calificaciones del grupo: "+suma);
}


function getPromedio(){
alert("El promedio de calificaciones es: "+(suma/grupo));
}
