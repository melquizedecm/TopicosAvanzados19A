<?php
	include 'conexion.php';

	NuevoProducto($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['existencia']);

	function NuevoProducto( $nom, $descrip,$precio,$exis)
	{
		echo $sentencia="INSERT INTO producto ( nombre, descripcion,precio,existencia) VALUES ( '".$nom."', '".$descrip."', '".$precio."', '".$exis."')";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado exitosamente");
	window.location.href='adm.php';
</script>
