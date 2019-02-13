var n;
var cal = [];
var suma = 0;
var promedio = 0;
var i;

leerCalificaciones();

function leerCalificaciones() {
    do {
        n = prompt("Escribe la cantidad de calificaciones");
    } while (!(n > 0 || Number.isInteger(n)));

    alert(n);
}