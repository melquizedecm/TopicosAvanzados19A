<?php

include("conexion.php");

$nombre = $_POST ['nombre'];
$precio = $_POST ['precio'];
$estado = $_POST ['estado'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$query= "INSERT INTO tabla_imagen (nombre,precio,estado,imagen) VALUES('$nombre','$precio','$estado','$imagen')";
$resultado= $conexion->query($query);

if($resultado){
  header("Location: mostrar.php");
}
else{
  echo "no s einserto";
}


 ?>
