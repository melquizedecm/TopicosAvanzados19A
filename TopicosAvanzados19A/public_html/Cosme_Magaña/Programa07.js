/*1- Leer la calificcion (0-100) de un grupo.
  2- Conservarlas. Calcular el promedio.
  3- Imprimir Calif y Prom.*/

var n,i;  //se escribe var por que si no seria una variable local
var cal=[];
var suma=0;
var promedio;
var i;



function cantidadalumnos(){
  while(true){
  n=prompt("Escribe el numero de alumnos a calificar"); //por lo pronto para imprimir
  if(n %1===0 && grupo >=0 ){
    break;
  }else{
    alert("Escribe un numero entero positivo");
  }
}
}

function leerCalificaciones(){
for (i = 0; i < n; i++) {
cal[i]=prompt("Escribe la calificacion ");
suma=suma+parseInt(cal[i]);

}
}

function getpromedio(){
  promedio=suma/n;

  alert(promedio);
  suma=0;
  cal=[];
}
