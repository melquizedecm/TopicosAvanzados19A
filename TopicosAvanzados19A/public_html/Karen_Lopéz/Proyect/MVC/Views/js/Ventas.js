function importe(){
  var ids=document.getElementById("addprod").value;
  var num=ids.length;
  precio="";

  for(var i=0;i<num;i++){
    if(ids.charAt(i)==','){
      break;
    }else{

      precio+=ids.charAt(i);
    }
  }
  var cantidad=document.getElementById("addcant").value;
  var importe=parseInt(cantidad)*parseInt(precio);
  document.getElementById("addimp").value="$"+importe;
}

function agregarVenta(id){
 var prod=document.getElementById("addprod").value;
 var num=prod.length;
 nul="";

 for(var i=0;i<num;i++){
   if(prod.charAt(i)==','){
     break;
   }else{
     nul+=prod.charAt(i);
   }
 }

 prod=prod.replace(",","");
 prod=prod.replace(nul,"");
 var importe=document.getElementById("addimp").value;
 importe=importe.replace("$","");
 var fecha=document.getElementById("addfech").value;
 var hora=document.getElementById("addhr").value;
 $.post('../Controllers/Ventas.php',
         {
             'iduser': id,
             'importe': importe,
             'producto': prod,
             'fecha':fecha,
             'hora':hora,
             'action': 'agregar'
         });
    location.reload(true);
}

function idventa(id){
  document.getElementById("delid").value=id;

}
function eliminarVenta(){
  var id=document.getElementById("delid").value;
  $.post('../Controllers/Ventas.php',
          {
              'id': id,
              'action': 'eliminar'
          });
     location.reload(true);
}
