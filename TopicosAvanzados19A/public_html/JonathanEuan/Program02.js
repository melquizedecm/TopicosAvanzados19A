

function leerCalificaciones() {
    var grupo = document.getElementById("inputGrupo").value;
    var cal = []; //arreglo donde se guardan las caliciones
    var suma = 0; //variable donde se sumaran las caliciones
    var i;      //indice de las caliciones
    for (i = 0; i < grupo; i++) {
        while (true) {
            var calificaciones = prompt("escribe la calificación del alumno");
          /*linea de codigo que muestra una ventana donde inserter lo solicitado
          */
            cal[i] = Number(calificaciones);
            if (cal[i] % 1 === 0 && cal[i] >= 0 && cal[i] <= 100) {
/* si la calificaion es entera positiva, mayor igual cero y/o menor igual 100 */
                break;
            } else {
                alert("No es una calificacion valida");
            }
        }
        suma = suma + cal[i];
    }
    document.write(suma / grupo);
}
