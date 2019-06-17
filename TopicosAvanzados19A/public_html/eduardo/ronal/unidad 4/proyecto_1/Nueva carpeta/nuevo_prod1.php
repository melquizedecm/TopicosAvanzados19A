<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alta de Producto</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">

  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>

  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Alta de Nuevo Producto</h1> </span>
  		<br>
	  <form action="nuevo_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  		<label>nombre: </label>
  		<input type="text" id="nombre" name="nombre"><br>

  		<label>descripcion: </label>
  		<input type="text" id="descripcion" name="descripcion" ><br>

  		<label>precio: </label>
  		<input type="text" id="precio" name="precio" ><br>

      <label>existencia: </label>
  		<input type="text" id="existencia" name="existencia" ><br>

  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>

  </div>

	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>
