/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* global NaN */

/*function leerCalificaciones() {*/
    var grupo = 0; //document.getElementById("inputGrupo").value;
    var cal = [];
    var suma = 0;
    var i;

    alert("Escribe un entero positivo");

function getCantidadDeAlumnos(){
    while(true){
      grupo = Number(prompt("Escribe la cantidad de alumnos"));
      if(grupo %1===0 && grupo >=0){
        break;
      }else{
        alert("Escribe un entero positivo");
      }
    }
}

  function getLeerCalificaciones() {
    for (i = 0; i < grupo; i++) {
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
  }

  function getPromedio(){
    var promedio=Number(suma)/Number(grupo);
      alert(promedio);
  }

  function getFlotante(){

  }

  function getRangoEntero(){

  }

  function getRangoEntero(min,max){

  }

/*}*/
