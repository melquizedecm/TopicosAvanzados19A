/*
Descripcion: programa para leer calificaciones de un grupo
1. Leer n(tamaño de grupo). leer calificaciones
2. Conservar las calificaciones(arreglo). calcular el promedio
  (Sumar calificaciones y Dividir entre n)
3. Imprimir las calificaciones. Imprimir promedio.
*/


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
/*  do{
      n=prompt("Escribe la cantidad de calificaciones");
  }while!(Number.IsInteger(n) && n>0){

  }
  //alert();  //Imprimir
  document.write("aqui pongo el mensaje a imprimir"); //imprimir en la pagina
  prompt(); //leer
*/
