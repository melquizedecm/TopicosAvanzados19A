<?php
require_once '../../core/Config.php';


////CONECTARME A LA BASE DE DATOS
$config = new Config();
$conexion = $config->conectar();
if(isset($_POST['usuario'])){
  $usuario=$_POST['usuario'];
  $contrasena=$_POST['contra'];

$sql="SELECT * FROM login WHERE Nombre='". $usuario."' AND Contrasena='".$contrasena."'";
$tablalogin=$conexion->query($sql);
echo gettype($tablalogin);
if ($tablalogin->fetch_array(MYSQLI_BOTH)){
  session_start();
  $_SESSION['user']=$usuario;
  $_SESSION['pass']=$contrasena;
  header("Location:administracion.html");
}
else{
  echo  "password incorrecto";
}
  /*while ($filalogin=$tablalogin->fetch_array(MYSQLI_BOTH)) {
    if($filalogin[0]==$usuario && $filalogin[1]==$contrasena){
      $_SESSION['id']=$filalogin[2];
      $band=true;
      break;
    }else {
      $band=false;
    }
  }
  if($band){
      header("Location: Administracion.html");
  }else {
    echo '<script>
    alert("Usuario o contraseña incorrectos");
    </script>';
  }*/
}
 ?>
<html>
<head>

    <title>sistema de login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- vinculo a bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Temas-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- se vincula al hoja de estilo para definir el aspecto del formulario de login-->
<link rel="stylesheet" type="text/css" href="css/estilo_login.css">
</head>
<body style="width: 100%;
min-height: 100vh;
background: #c850c0;
background: -webkit-linear-gradient(45deg, #4158d0, #c850c0);
background: -o-linear-gradient(45deg, #4158d0, #c850c0);
background: -moz-linear-gradient(45deg, #4158d0, #c850c0);
background: linear-gradient(45deg, #4158d0, #c850c0);">
 <div id="Contenedor">
 <div class="Icon">
                <!--Icono de usuario-->
               <span class="glyphicon glyphicon-user"></span>
             </div>
<div class="ContentForm">
  <form action=""  method="post" name="FormEntrar">
    <!-- siguiente linea para que el icono se muestre a la derecha -->
    <div class="input-group input-group-lg">
      <!--span para las figuras de los ingresos -->
      <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
      <input type="text" class="form-control" name="usuario" placeholder="Nombre de Usuario" id="usuario" aria-describedby="sizing-addon1" required>
    </div>
    <br>
    <div class="input-group input-group-lg">
      <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
      <input type="password" name="contra" class="form-control" id="contra" placeholder="******" aria-describedby="sizing-addon1" required>

    </div>
    <br>
    <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Entrar</button>
  </form>
 </div>
 </div>
</body>
<!-- vinculando a libreria Jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Libreria java scritp de bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
