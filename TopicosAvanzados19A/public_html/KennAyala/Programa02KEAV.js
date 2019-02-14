var n;
var cal = [];
var suma = 0;
var promedio = 0;
var i;
var t = prompt("Ingrese el tamaño del grupo");
leerCalificaciones();

function leerCalificaciones() {
    for (i; i < t; i++) {
        do {
            n = prompt("Escribe la cantidad de calificaciones");
        } while ((n < 0) || n % 1 !== 0);
    }


    alert(n);
}