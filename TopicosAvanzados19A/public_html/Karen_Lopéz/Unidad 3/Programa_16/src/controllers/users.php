<?php
require_once '../core/Config.php';
//
//Sourse: user.php
//Author: Karen López
//Date: 11/04/19
//Description: CRUD que permite gestionar los datos del usuario
//

//CONECTARME A LA BASE DE DATOS
$config=new Config();
$conexion=$config->conectar();

//recibir variables
if (isset($_POST['id'])) {
    $id= $_POST['id'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $status= $_POST['status'];
    $sql = "UPDATE users SET username='".$username."',password='".md5($password)."' WHERE id='".$id."'";
    $conexion->query($sql);
}

if (isset($_POST['action'])){
    if ($_POST['action']='eliminar'){
        $id=$_POST['id'];
        $sql="UPDATE users SET status='0' WHERE id='".$id."'";
            $conexion->query($sql);
    }
}
    //para poder ponerlo en conexion o marcha
    $conexion->query($sql);
}
?>