<?php
	include "conexion.php";

	EliminarProducto($_GET['id_producto']);

	function EliminarProducto($id_producto)
	{
		$sentencia="DELETE FROM producto WHERE id_producto='".$id_producto."' ";
		mysql_query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='adm.php';
</script>
