function agregarVenta(idusuario){
  var nombre=document.getElementById("nombreventa").value;
  var comida=document.getElementById("comidaventa").value;
  var precio=document.getElementById("precioventa").value;
  var fecha=document.getElementById("fechaventa").value;
  var hora=document.getElementById("horaventa").value;
  var cantidad=document.getElementById("cantidadventa").value;
  var usuario=idusuario;
  var numero=precio.length;
  var i=0;
  var idprecio="";
  for(i=0; i<numero;i++){
      if(precio.charAt(i)==','){
        break;
      }else{
        idprecio+=precio.charAt(i);
      }
  }
  precio= precio.replace(idprecio,"");
  precio=precio.replace(",","");
  var importe=parseInt(precio)*parseInt(cantidad);
  alert(nombre);
  $.post('../../controllers/cliente.php',
          {
              'nombre': nombre,
              'comida': comida,
              'precio': idprecio,
              'hora': hora,
              'fecha':fecha,
              'cantidad':cantidad,
              'importe':importe,
              'usuario':usuario,
              'action': "agregar"
          });

}

function eliminarVenta(id){
  $.post('../../controllers/cliente.php',
          {

              'id':id,
              'action': "eliminar"
          });
}
