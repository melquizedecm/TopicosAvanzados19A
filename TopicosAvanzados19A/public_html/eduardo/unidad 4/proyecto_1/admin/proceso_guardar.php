<?php

include("conexion.php");

$nombre = $_POST ['nombre'];
$precio = $_POST ['precio'];
$estado = $_POST ['estado'];
$marca = $_POST ['marca'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$query= "INSERT INTO tabla_imagen (nombre,precio,estado,marca,imagen) VALUES('$nombre','$precio','$estado','$marca','$imagen')";
$resultado= $conexion->query($query);

if($resultado){
  header("Location: vista_admin.php");
}
else{
  echo "no s einserto";
}


 ?>
