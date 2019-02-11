/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* global NaN */

function leerCalificaciones() {
    var grupo = document.getElementById("inputGrupo").value;
    var cal = [];
    var suma = 0;
    var i;
    for (i = 0; i < grupo; i++) {
        while(true){
            var calificaciones = prompt("escribe la calificación del alumno");
            cal[i] = Number(calificaciones);
            if (Number.isInteger(cal[i]) || ((cal[i]<=0) && (cal[i]>100))){
                break;
            }
            else{
                alert("No es una calificacion valida");
            }
        } 
        suma = suma + cal[i];
    }
    document.write(suma/grupo);


}