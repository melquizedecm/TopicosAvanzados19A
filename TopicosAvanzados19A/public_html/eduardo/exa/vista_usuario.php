<!DOCTYPE html>
<html>
<head>
  <title>Mostrar Imagen</title>
</head>
<body>
  <center>
    <table border="9">
      <thead>
        <tr>

        </tr>
        <tr>
          <th>id del producto</th>
          <th>Nombre del producto</th>
          <th>$ precio</th>
          <th>Imagen del producto</th>}

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
  <td><img height="120px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>

</tr>
<?php
 }

 ?>

      </tbody>
    </table>


  </center>
</body>

</html>
