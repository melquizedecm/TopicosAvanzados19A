<?php
	include 'conexion.php';

	ModificarProducto( $_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['existencia'], $_POST['id_producto']);

	function ModificarProducto( $nom, $descrip,$precio,$existencia,$id_producto)
	{
		$sentencia="UPDATE producto SET  nombre= '".$nom."', descripcion='".$descrip."',precio= '".$precio."', existencia='".$existencia."' WHERE id_producto='".$id_producto."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Producto Modificado exitosamente");
	window.location.href='adm.php';
</script>
