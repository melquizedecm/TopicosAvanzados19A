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

function eliminarPrecio(id){
  $.post('../../controllers/precio.php',
          {
              'id':id,
              'action': "eliminar"
          });
          location.reload();
}
