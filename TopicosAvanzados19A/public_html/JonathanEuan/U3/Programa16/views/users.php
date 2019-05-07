<!-- crud que perimite gestionar los datos del usuario -->
<?php

$sql="SELECT * FROM users";

$tablaUsers=$conexion->query($sql);

//CONECTARME A LA BASE DE DATOS
$config=new Config();

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

    <?php while($filaUsers=$tablaUsers->fetch_array(MYSQLI_BOTH)){ ?>

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
    <?php }; ?>
    </div>
  </body>
</html>
