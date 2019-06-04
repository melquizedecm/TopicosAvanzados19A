<!DOCTYPE html>
<html>
<head>
  <title>index imagenes</title>
    <link rel="stylesheet" type="text/css" href="estilosagregar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
  <center><br/><br/><br/>
<p class="texto">Agregar</p>
<div class="Agregar">
<form action="proceso_guardar.php" method="post" enctype="multipart/form-data">
<span class="fontawesome-user"></span><input type="text" REQUIRED name="nombre" required placeholder="nombre" autocomplete="off">
<span class="fas fa-dollar-sign"></span><input type="text" REQUIRED name="precio" required placeholder="precio" autocomplete="off">
<span class="fas fa-dollar-sign"></span><input type="text" REQUIRED name="estado" required placeholder="estado" autocomplete="off">



<input type="file" REQUIRED name="imagen"/><br/><br/>
<input type="submit" value="aceptar" title="Aceptar">
    </form>
  </center>
</body>
</html>
