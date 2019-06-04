function agregarProd(){
  var producto=document.getElementById("addprod").value;
  var prev=document.getElementById("addprev").value;
  var cantidad=document.getElementById("addcant").value;
  var prec=document.getElementById("addprec").value;
  var cat=document.getElementById("addcat").value;

  $.post('../Controllers/Inventario.php',
          {
              'producto': producto,
              'prev': prev,
              'cantidad': cantidad,
              'prec':prec,
              'cat':cat,
              'action': 'agregar'
          });
          location.reload(true);
}
function enviaridprod(id){
  document.getElementById("editidprod").value=id;
}

function enviaridprodel(id){
  document.getElementById("delprod").value=id;
}

function editarProd(){
  var id=document.getElementById("editidprod").value;
  var producto=document.getElementById("editprod").value;
  var prev=document.getElementById("editprev").value;
  var cantidad=document.getElementById("editcant").value;
  var prec=document.getElementById("editprec").value;
  var cat=document.getElementById("editcat").value;
  $.post('../Controllers/Inventario.php',
          {
              'id':id,
              'producto': producto,
              'prev': prev,
              'cantidad': cantidad,
              'prec':prec,
              'cat':cat,
              'action': 'editar'
          });
          location.reload(true);
}

function eliminarProd(){
  var id=document.getElementById("delprod").value;
  $.post('../Controllers/Inventario.php',
          {
              'id':id,
              'action': 'eliminar'
          });
          location.reload(true);
}
