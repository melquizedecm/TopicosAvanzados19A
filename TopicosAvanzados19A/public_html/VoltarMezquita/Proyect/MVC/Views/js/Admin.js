function agregarUser(){
  var nombre=document.getElementById("addnomb").value;
  var apellidop=document.getElementById("addapp").value;
  var usuario=document.getElementById("adduser").value;
  var pass=document.getElementById("addpass").value;
  $.post('../Controllers/Admin.php',
          {
              'nombre': nombre,
              'app': apellidop,
              'usuario': usuario,
              'pass':pass,
              'action': 'agregar'
          });
          location.reload(true);
}
function iduser(id){

  document.getElementById("editid").value=id;
}

function iduserdel(id){

  document.getElementById("delid").value=id;
}

function editarUser(){
  var nombre=document.getElementById("editnomb").value;
  var apellidop=document.getElementById("editapp").value;
  var usuario=document.getElementById("editus").value;
  var pass=document.getElementById("editpass").value;
  var id=document.getElementById("editid").value;
  $.post('../Controllers/Admin.php',
          {
              'nombre': nombre,
              'app': apellidop,
              'usuario': usuario,
              'pass':pass,
              'id':id,
              'action': 'editar'
          });
          location.reload(true);
}
function eliminarUser(){
  var id=document.getElementById("delid").value;
  $.post('../Controllers/Admin.php',
          {

              'id':id,
              'action': 'eliminar'
          });
          location.reload(true);

}
