<!DOCTYPE html>
<html>
<head>
  <title>Mostrar Imagen</title>
</head>
<body>
  <center>
    <table border="2">
      <thead>
        <tr>
          <th colspan="5"><a href="index.php">Nuevo</a></th>
        </tr>
        <tr>
          <th>id</th>
          <th>Nombre</th>
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
  <td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
  <th><a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a></th>
  <th><a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a></th>
</tr>
<?php
 }

 ?>

      </tbody>
    </table>


  </center>
</body>

</html>
