function agregarComida(){
var comida= document.getElementById("agregarcomida").value;

if(comida==""){
  alert("Inserte un nombre para la comida!!");
}else{
  $.post('../../controllers/comida.php',
          {
              'comida':comida,
              'action': "agregar"
          });
          location.reload();
}
}
function editarComida(id){
//var comida=document.getElementById("editarcomida").value;
alert(id);
if(comida==""){

// alert("Inserte nombre de la nueva comida");

}else {
  $.post('../../controllers/comida.php',
          {
              'comida':comida,
              'id':id,
              'action': "editar"
          });
          location.reload();
}
}
function eliminarComida(id){
  $.post('../../controllers/comida.php',
          {
              'id':id,
              'action': "eliminar"
          });
          location.reload();
}
