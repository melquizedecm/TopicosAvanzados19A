/*
*
*/

var grupo;
var cal = [];
var suma = 0;
var i;

function getCantidadAlumnos(){
	while(true){
		grupo = Number(prompt("Escribe la cantidad de alumnos:"));
		if(grupo%1 === 0 && grupo >=0){
			break;
		}else{
			alert("Escribe un entero positivo");
		}
	}

}

function LeerCalificaciones(){
	for(i _= 0; i < grupo.size(); i++){
		while(true){
			var calificaciones = prompt("Escribe la calificación del alumno " + i + ": ");
		}
	}

}