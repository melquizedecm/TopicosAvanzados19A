<?php
  require_once "../Core/Config.php";
  //Consulta
  $config= new Config();
  $link=$config->conectar();



  //Registro de usuario
  if(isset($_POST['inputName'])){
    $name=$_POST['inputName'];
    $password=md5($_POST['inputPassword']);
    $sql="INSERT INTO users (user_name,pass) VALUES ('".$name."','".$password."')";
    $link->query($sql);
  }
  //recibir las variables

  if (isset($_POST['action'])) {
      $action =$_POST['action'];
      if ($action=='editar') {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "UPDATE users SET user_name='".$username."',pass='".md5($password)."' WHERE id='".$id."'";
        $link->query($sql);
      }

  }

  if (isset($_POST['action'])){
      if ($_POST['action']='eliminar'){
          $id=$_POST['id'];
          $sql="UPDATE users SET status='0' WHERE id='".$id."'";
          $link->query($sql);
      }
  }
?>
