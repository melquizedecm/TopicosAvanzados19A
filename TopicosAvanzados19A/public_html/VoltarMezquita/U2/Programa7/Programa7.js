/*Nombre: Voltar Mezquita Correa
  Profesor:Melquizedec Moo Medina
  Programa: Sacar, Leer y Visualizar calificaciones

/*1- Leer la calificcion (0-100) de un grupo.
  2- Conservarlas. Calcular el promedio.
  3- Imprimir Calif y Prom.*/
  // var es variable local
var n
var Grupo=0;
var cal=[];
var suma=0;
var promedio;
var i;
var bandera=true;

leerCalificaciones();
function GetCantidadAlumnos(){
  while(true){      <!-- funcion para ingresar cantidada de alunos-->
    Grupo = Number(prompt("Escribir la antidad de alumnos"));
    if(grupo %1===0 && Grupo>=0){     //si es diferente a 0 y mayor que 0 sino lo vuelve a escribir-->
      break;
    }else{
      alert("Escribe un entero positivo");
    }
  }
}
function leerCalificaciones(){      //funcion para leer calificaion
  do{
    n=prompt("Escribe el numero de alumnos"); //imprimir
  }while(Number.isInteger(n)==false&& !(n>0)); //si n es entero
document.write(n);
}
function OptenerPromedio(){   //uncion para sacar promedio
  promedio=suma/grupo;
alert(Promedio);
suma=0;
cal=[];
}
