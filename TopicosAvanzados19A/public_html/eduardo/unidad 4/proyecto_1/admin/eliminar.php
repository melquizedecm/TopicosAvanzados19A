<?php

include("conexion.php");

$id= $_REQUEST['id'];

$query= "DELETE FROM tabla_imagen WHERE id='$id'";
$resultado= $conexion->query($query);

if($resultado){

  header("Location: vista_admin.php");
}
else{
  echo "no c elimino";
}


 ?>
