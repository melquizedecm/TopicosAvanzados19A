/* 
 Sours:          index.html
Description:    Index del programa 2
Date:           12/febrero/19
autor:          Ronal Garcia
 */

/* funcion para la lectura de los numeros ingresados esto para que el numero no se pase del rango */

function leerCalificaciones() {
    var grupo = document.getElementById("inputGrupo").value;
    var cal = [];
    var suma = 0;
    var i;
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
    document.write(suma / grupo);
}