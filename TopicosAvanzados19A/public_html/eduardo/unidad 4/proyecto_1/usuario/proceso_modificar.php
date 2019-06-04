<?php

include("conexion.php");

$id= $_REQUEST['id'];


$cantidad = $_POST ['cantidad'];
$comprador = $_POST ['comprador'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$query= "UPDATE tabla_imagen SET  cantidad='$cantidad',comprador='$comprador' WHERE id='$id'";
$resultado= $conexion->query($query);

if($resultado){

  header("Location: vista_usuario.php");
}
else{
  echo "no c modifico";
}


 ?>
