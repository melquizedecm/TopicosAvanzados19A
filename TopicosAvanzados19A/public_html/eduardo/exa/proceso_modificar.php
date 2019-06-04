<?php

include("conexion.php");

$id= $_REQUEST['id'];

$nombre = $_POST ['nombre'];
$precio = $_POST ['precio'];
$estado = $_POST ['estado'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$query= "UPDATE tabla_imagen SET nombre='$nombre', precio='$precio', estado='$estado', imagen='$imagen' WHERE id='$id'";
$resultado= $conexion->query($query);

if($resultado){

  header("Location: mostrar.php");
}
else{
  echo "no c modifico";
}


 ?>
