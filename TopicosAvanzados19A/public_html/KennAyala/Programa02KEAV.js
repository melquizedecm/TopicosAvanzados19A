var n;
var cal = [];
var suma = 0;
var promedio = 0;
var i;

leerCalificaciones();

function leerCalificaciones() {
    while (Number.isInteger(n) && n > 0) {
    n = prompt("Escribe la cantidad de calificaciones");
    } 

    document.write("aqui pongo le mensaje a imprimir");
}