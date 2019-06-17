function agregarPrecio(){
var precio= document.getElementById("agregarprecio").value;

if(precio==""){
  alert("Inserte un nuevo precio!!");
}else{
  $.post('../../controllers/precio.php',
          {
              'precio':precio,
              'action': "agregar"
          });
          location.reload();
}
}

function editar_precio(id){
var comida=document.getElementById("editar_precio").value;

if(precio==""){

  alert("Inserte el valor del nuevo precio");
}else {
  $.post('../../controllers/precio.php',
          {
              'precio':precio,
              'id':id,
              'action': "editar"
          });
          location.reload();
}
}

function eliminarPrecio(id){
  $.post('../../controllers/precio.php',
          {
              'id':id,
              'action': "eliminar"
          });
          location.reload();
}
