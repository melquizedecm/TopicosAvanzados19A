<?php

include("conexion.php");

$id= $_REQUEST['id'];

$nombre = $_POST ['nombre'];
$precio = $_POST ['precio'];
$estado = $_POST ['estado'];
$marca = $_POST ['marca'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$query= "UPDATE tabla_imagen SET nombre='$nombre', precio='$precio', estado='$estado', marca='$marca', imagen='$imagen' WHERE id='$id'";
$resultado= $conexion->query($query);

if($resultado){

  header("Location: vista_admin.php");
}
else{
  echo "no c modifico";
}


 ?>
