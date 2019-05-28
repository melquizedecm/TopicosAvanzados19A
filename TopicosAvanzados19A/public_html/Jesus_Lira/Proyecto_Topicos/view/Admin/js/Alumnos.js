//funcion para agregar los alumnos
function agregarAlumno(){
var matricula=document.getElementById("campo0add").value;
var nombre=document.getElementById("campo1add").value;
var apellido_pat=document.getElementById("campo2add").value;
var apellido_mat=document.getElementById("campo3add").value;
var grado=document.getElementById("campo4add").value;
var nivel=document.getElementById("campo5add").value;
//metodo para enviar los datos al controlador
$.post('../../controller/Alumnos.php',
        {
            'matricula': matricula,
            'nombre': nombre,
            'apellido_pat': apellido_pat,
            'apellido_mat':apellido_mat,
            'grado':grado,
            'nivel':nivel,
            'action': "agregar"
        });
        location.reload(true);
}
//enciar el valor a un input
function enviarmatricula(matricula){

  document.getElementById("campo0edit").value=matricula;

}
//enviar valor a un input
function matriculadelete(matricula){
  document.getElementById("campo0delete").value=matricula;

}
//Funcion para editar los alumnos
function editarAlumno(){

  var matricula=document.getElementById("campo0edit").value;
  var nombre=document.getElementById("campo1edit").value;
  var apellido_pat=document.getElementById("campo2edit").value;
  var apellido_mat=document.getElementById("campo3edit").value;
  var grado=document.getElementById("campo4edit").value;
  var nivel=document.getElementById("campo5edit").value;

  $.post('../../controller/Alumnos.php',
          {
              'matricula': matricula,
              'nombre': nombre,
              'apellido_pat': apellido_pat,
              'apellido_mat':apellido_mat,
              'grado':grado,
              'nivel':nivel,
              'action': "editar"
          });
      location.reload(true);

}
//Funcion para eliminar los alumnos
function eliminarAlumno(){
  var matricula=document.getElementById("campo0delete").value;
  $.post('../../controller/Alumnos.php',
  {
    'matricula':matricula,
    'action':'eliminar'
  });
  location.reload(true);
}
