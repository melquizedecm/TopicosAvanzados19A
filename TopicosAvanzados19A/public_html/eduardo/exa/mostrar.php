<!DOCTYPE html>
<html>
<head>

  <div class="row">
	<div class="col-md-12">
	<h1>Agregar Producto</h1>

  <title>Mostrar Imagen</title>
  
  <link rel="stylesheet" type="text/css" href="estilostablas.css">
</head>
<body>
  <center>
    <table border="1">
      <thead>

<title>Matxus - información de productos</title>
        <tr>
          <th colspan="9"> <a href="index.php"> <button type="button" class="btn btn-info">Agregar Nuevo Producto</button> </a> </th>
        </tr>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>precio</th>
            <th>estado</th>
          <th>Imagen</th>}
          <th colspan="2">Opciones</th>
        </tr>
      </thead>
      <tbody>
<?php
include("conexion.php");
 $query = "SELECT * FROM tabla_imagen";
 $resultado = $conexion->query($query);
 while($row= $resultado->fetch_assoc()){

 ?>

<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['nombre'];?></td>
  <td><?php echo $row['precio'];?></td>
    <td><?php echo $row['estado'];?></td>
  <td><img height="120px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
  <th><button type='button' class='btn btn-success'><a href="modificar.php?id=<?php echo $row['id'];?>">MODIFICAR</button></a></th>
  <th><button type='button' class='btn btn-success'><a href="eliminar.php?id=<?php echo $row['id'];?>">ELIMINAR</button></a></th>



</tr>

<?php
}
 ?>

      </tbody>
    </table>
  </center>
</body>

</html>
