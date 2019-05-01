<?php
  require_once "../Core/Config.php";
  //Consulta
  $config= new Config();
  $link=$config->conectar();
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