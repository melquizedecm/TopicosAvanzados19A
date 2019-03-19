/*
Descripcion: PROGRAMA PARA LEER CALIFICACIONES DE UN GRUPO
1. LEER N (TAMAÑO DE GRUPO). LEER CALIFICACIONES
2. CONSERVAR LAS CALIFICACIONES(ARREGLO). CALCULAR EL PROMEDIO
    (SUMAR CALIFICACIONES Y DIVIDIR ENTRE N)
3. IMPRIMIR LAS CALIFICACIONES. IMPRIMIR EL PROMEDIO.
*/

function leerCalificaciones() {
    var grupo = document.getElementById("inputGrupo").value;
    var cal = []; //arreglo donde se guardan las caliciones
    var suma = 0; //variable donde se sumaran las caliciones
    var i;      //indice de las caliciones
    for (i = 0; i < grupo; i++) {
        while (true) {
            var calificaciones = prompt("escribe la calificación del alumno");
          /*linea de codigo que muestra una ventana donde inserter lo solicitado,
          en este parte el usuario ingresa las calificaciones de todos los alumnos.
          */
            cal[i] = Number(calificaciones);
            if (cal[i] % 1 === 0 && cal[i] >= 0 && cal[i] <= 100) {
/* si la calificaion es entera positiva, mayor igual cero y/o menor igual 100
en caso de no ser una calificacion valida, se ejecuta el else.*/
                break;
            } else {
                alert("No es una calificacion valida");
            }
        }
        suma = suma + cal[i];
  /* En esta parte se suman las calificaciones */
    }
    document.write(suma / grupo);
}
