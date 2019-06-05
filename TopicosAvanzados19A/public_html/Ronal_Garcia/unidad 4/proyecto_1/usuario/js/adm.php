<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo de interaccion con DB</title>
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
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>id.</th>
  			<th>nombre</th>
  			<th>descripcion</th>
  			<th>precio</th>
        <th>existencia</th>
  			<th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>


  		<?php
      include "conexion.php";
      $sentencia="SELECT * FROM producto";
      $resultado=mysql_query($sentencia);
      while($filas=mysql_fetch_assoc($resultado))
      {
        echo "<tr>";
echo "<td>"; echo $filas['id_producto']; echo  "</td>";
          echo "<td>"; echo $filas['nombre']; echo "</td>";
          echo "<td>"; echo $filas['descripcion']; echo "</td>";
          echo "<td>"; echo $filas['precio']; echo "</td>";
          echo "<td>"; echo $filas['existencia']; echo "</td>";






                              echo "<td>  <a href='modif_prod1.php?id_producto=".$filas['id_producto']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
                              echo "<td> <a href='eliminar_prod.php?id_producto=".$filas['id_producto']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";

        echo "</tr>";
      }

      ?>
  	</table>
  </div>

	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>
