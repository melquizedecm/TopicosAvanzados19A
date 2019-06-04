<?php

include("conexion.php");

$cantidad = $_POST ['cantidad'];
$comprador = $_POST ['comprador'];
$query= "INSERT INTO tabla_imagen (cantidad,comprador) VALUES('$cantidad','$comprador')";
$resultado= $conexion->query($query);

if($resultado){
  header("Location: vista_usuario.php");
}
else{
  echo "no s einserto";
}


 ?>
