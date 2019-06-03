//Funcion para agregar un trabajador

//Authors: Francisco Montalvo
//Jesus Lira
//Cosme Magaña
//Description: JAVA SCRIPT de trabajadores 

function agregarTrabajador(){
  var matricula=document.getElementById("campo0tadd").value;
  var nombre=document.getElementById("campo1tadd").value;
  var apellido_pat=document.getElementById("campo2tadd").value;
  var apellido_mat=document.getElementById("campo3tadd").value;

  $.post('../../controller/Trabajadores.php',
    {
      'matricula':matricula,
      'nombre':nombre,
      'apellido_pat':apellido_pat,
      'apellido_mat':apellido_mat,
      'action':'agregar'
    });
    location.reload(true);
}
//Funcion para enviar valor a un input
function editmatt(matricula){
  document.getElementById("campo0tedit").value=matricula;
}
//Funcion para enviar valor a un input
function deletematt(matricula){
  document.getElementById("campo0tdelete").value=matricula;
}
//Funcion para editar un trabajador
function editarTrabajador(){
  var matricula=document.getElementById("campo0tedit").value;
  var nombre=document.getElementById("campo1tedit").value;
  var apellido_pat=document.getElementById("campo2tedit").value;
  var apellido_mat=document.getElementById("campo3tedit").value;
  $.post('../../controller/Trabajadores.php',
    {
      'matricula':matricula,
      'nombre':nombre,
      'apellido_pat':apellido_pat,
      'apellido_mat':apellido_mat,
      'action':'editar'
    });
    location.reload(true);
}
//Funcion para eliminar a un trabajador
function eliminarTrabajador(){
  var matricula=document.getElementById("campo0tdelete").value;
  $.post('../../controller/Trabajadores.php',
    {
      'matricula':matricula,
      'action':'eliminar'
    });
    location.reload(true);

}
function newPass(){
  var pass=document.getElementById("newpass").value;
  var id=document.getElementById("mattrab").value;

  $.post('../../controller/Trabajadores.php',
    { 'matricula':id,
      'pass':pass,
      'action':'pass'
    });
    location.reload(true);

}
