<?php
//configuracion de las variables del servidor
$host="localhost";
$user="root";
$password="";
$database="topicos";
// para poder conectarse al gestor de BD y a la base
$conexion=mysqli_connect($host,$user,$password,$database);
//para que realizemos una consulta
$sql="SELECT * FROM users";
//ejecutar la consulta y obtener la tabla
$tablaUsers=$conexion->query($sql);
//obtener la primera fila de la tabla
$filaUsers=$tablaUsers->fetch_array(MYSQLI_BOTH);


if(isset($_POST['inputUsername'])){
  $inputUsername=$_POST['inputUsername'];
  $inputPassword=md5($_POST['inputPassword']);
$sql="INSERT INTO users (username,password) VALUES('".$inputUsername."','".$inputPassword."')";

$conexion->query($sql);
}
?>

<html>
  <head>
  </head>
  <body>
    <h1>WELCOME TO WEBSERVER   <?php echo $filaUsers['username']; ?></h1>

    <div class="content">
      <form>
        <label>ID</label>
          <input type="text" value="<?php echo $filaUsers[0]; ?>">
<br>
        <label>Usuario</label>
          <input type="text" value="<?php echo $filaUsers[1]; ?>">
<br>
        <label>Contraseña</label>
          <input type="text" value="<?php echo $filaUsers[2]; ?>">
<br>
        <label>Fecha de creación</label>
          <input type="text" value="<?php echo $filaUsers[3]; ?>">
<br>
        <label>Fecha de actualización</label>
          <input type="text" value="<?php echo $filaUsers[4]; ?>">
<br>
        <label>Estado del usuario</label>
          <input type="text" value="<?php echo $filaUsers[5]; ?>">
      </form>
    </div>

    <div id="fomr2">
      <h3> Ingreso de Usuarios</h3>
      <br>
      <form method="post">
        <label>Username: </label>
          <input name="inputUsername" type="text" placeholder="Ingresa tu usuario">
<br>
        <label>Password</label>
          <input name="inputPassword" type="text" placeholder="Ingresa tu contraseña">
<br>
        <input type="submit" value="Registrar">
      </form>
    </div>
  </body>
</html>
