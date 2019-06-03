<?php
session_start();
require_once('../Model/Perfilmodel.php');
if(isset($_POST['action'])){
if($_POST['action']=="iniciarsesion"){

  //if que simula la validacion de la existencia de la matricula en la base de trader_cdlrisefall3methods
$matriculax=$_POST['Matricula'];
  if($matriculax=="04170021"){

//si la matricula "esta en la base de datos iniciamos una $_session con el valor de esa matricula con id=usuario"

$_SESSION['usuario']=$matriculax; //si el usuario se encuentra, crea la sesión de usuario
header('Location:../view/perfil/perfil.php'); //manda a la pagina perfil

  }

}


}

  if(isset($_POST['action'])){
  if($_POST['action']=="subirfoto"){

    $matricula=$_REQUEST["txtnom"];
    $foto=$_FILES["foto"]["name"];
    $ruta=$_FILES["foto"]["tmp_name"];
    $destino="../../view/perfil/imgperfil/".$foto;
    copy($ruta,$destino);
    $destino2="../../view/perfil/imgperfil/".$foto;

    $cargar=new Perfilmodel();
    $cargar->matricula=$matricula;
    $cargar->destino=$destino2;
    $cargar->imagesc();
    header('Location:../view/perfil/perfil.php');

  //  header('Location:../view/perfil/perfil.php');

  }


}
  if(isset($_POST['action'])){

  if($_POST['action']=="cerrarsesion"){
session_destroy();
header('Location:../view/login.php');

  }
}

//recibir variables $_POST
