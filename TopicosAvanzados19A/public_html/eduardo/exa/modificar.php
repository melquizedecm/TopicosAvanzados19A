<html>
<head>
  <title>index imagenes</title>

</head>
<body>

<?php


   include("conexion.php");
   $id= $_REQUEST['id'];
   $query = "SELECT * FROM tabla_imagen WHERE id='$id'";
   $resultado = $conexion->query($query);
   $row= $resultado->fetch_assoc();

  ?>
  <center><br/><br/><br/>
    <form action="proceso_modificar.php?id=<?php echo $row['id']; ?> " method="POST" enctype="multipart/form-data">
      <input type="text" REQUIRED name ="nombre" placeholder="nombre..." value="<?php  echo $row['nombre']; ?>" /><br/><br/>
        <input type="text" REQUIRED name ="precio" placeholder="precio..." value="<?php  echo $row['precio']; ?>" /><br/><br/>
          <input type="text" REQUIRED name ="estado" placeholder="estado..." value="<?php  echo $row['estado']; ?>" /><br/><br/>
      <img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>
      <input type="file" REQUIRED name="imagen"/><br/><br/>
      <input type="submit" value="ACEPTAR">
    </form>

  </center>
</body>

</html>
