/* Source Programa02.js
Descripcion: PROGRAMA PARA LEER CALIFICACIONES DE UN GRUPO
1. LEER N (TAMAÑO DE GRUPO). LEER CALIFICACIONES
2. CONSERVAR LAS CALIFICACIONES(ARREGLO). CALCULAR EL PROMEDIO
    (SUMAR CALIFICACIONES Y DIVIDIR ENTRE N)
3. IMPRIMIR LAS CALIFICACIONES. IMPRIMIR EL PROMEDIO.
*/

/* global NaN */
function leerCalificaciones() {
    var grupo = document.getElementById("inputGrupo").value;
    var cal = [];
    var suma = 0;
    var i;
    //Ciclo for en el que se validan las calificaciones.
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
    //promedio de calificaciones
    document.write(suma / grupo);
}
