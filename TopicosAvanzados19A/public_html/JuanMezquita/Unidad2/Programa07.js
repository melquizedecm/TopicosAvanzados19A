var grupo=0; //= document.getElementById("inputGrupo").value;
var cal = [];
var suma = 0;
var i;

function getCantidadAlumnos(){
      while(true){
        grupo=Number(prompt("escribe la cantidad de alumnos"));
        if(grupo %1===0 && grupo >=0){
          break;
        }else{
          alert("escirbe un entero positivo");
        }
      }
}

function leerCalificaciones() {
  /* aqui se inician las variables*/
grupo=10;
    /* for para ingresar los datos en un arreglo */
    for (i = 0; i < grupo; i++) {
        while (true) {
            var calificaciones = prompt("escribe la calificación del alumno");
            cal[i] = Number(calificaciones);
            /* aqui se agrega un if para que la calificacion que se agregue no sea menor de 0 y mayor de 100 */
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
  suma=0;

var promedio=Number(suma)/Number(grupo);
alert(promedio);
}
