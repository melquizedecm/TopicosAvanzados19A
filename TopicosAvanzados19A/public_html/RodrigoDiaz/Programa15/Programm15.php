<!DOCTYPE html>
<?php
/*
*	Source: config.php
*	Description: Conexion a base de datos
*	Date: 01/05/2019
*	Autor: Francisco Montalvo Hidalgo
*/
  //Configuraciòn de las variabes de conexiòn
  $DBuser="root";
  $DBpass="";
  $DBserver="localhost";
  $DBdatos="topicos";
  //Conectarse al gestor de la base de datos y a la base de datos
  $link=mysqli_connect($DBserver,$DBuser,$DBpass,$DBdatos);
  //Consulta
  $sql="SELECT * FROM users";

  $tablaUsers=$link->query($sql);


  //Registro de usuario
  if(isset($_POST['inputName'])){
    $name=$_POST['inputName'];
    $password=md5($_POST['inputPassword']);
    $sql="INSERT INTO users (user_name,pass) VALUES ('".$name."','".$password."')";
    $link->query($sql);
  }

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //While para imprimir todos los registros
      while($filaUsers= $tablaUsers->fetch_array(MYSQLI_BOTH)){

     ?>
    <h1 align="center">WELCOME TO WEBSERVER <?php echo $filaUsers['user_name']; ?></h1>

    <div class="content">
      <form>
        <label>ID</label>
        <input type="text" readonly="readonly" value="<?php echo $filaUsers[0];?>"><br>
        <label>Usuario</label>
        <input type="text" readonly="readonly" value="<?php echo $filaUsers[1];?>"><br>
        <label>Password</label>
        <input type="text" readonly="readonly" value="<?php echo $filaUsers[2];?>"><br>
        <label>Status</label>
        <input type="text" readonly="readonly" value="<?php echo $filaUsers[3];?>"><br>
        <label>Fecha de Creación</label>
        <input type="text" readonly="readonly" value="<?php echo $filaUsers[4];?>"><br>
        <label>Fecha de Actualizaciòn</label>
        <input type="text" readonly="readonly" value="<?php echo $filaUsers[5];?>"><br>
      </form>
    </div>
  <?php
  //Cierro el ciclo while
      }
   ?>
    <div id="form2">
      <form method="post">
        <h3>Registrarse</h3>
        <label>Usuario</label>
        <input name="inputName" type="text" placeholder="Nombre de Usuario"><br>
        <label>Contraseña:</label>
        <input type="password" placeholder="Contraseña" name="inputPassword"><br>
        <input type="submit" value="Registrar" onclick="">
      </form>
    </div>

  </body>
</html>
