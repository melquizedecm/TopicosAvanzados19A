<?php
require_once '../models/Users.php';
$users= new Users();
/*
//Sourse: UsersControllers.php
//Author: Karen López
//Date: 09/05/19
//Description: clase que controla el modelo
*/

if(isset($_POST ['action'])){
	if($_POST['action']=='create'){
	}

	if($_POST['action']=='read'){
	}

 if ($action == 'editar') {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email= $_POST['email'];

        $conexion->query($sql);
    }

    ///////VERIFICAR SI LA ACCION ES ELIMINAR //////
}

if (isset($_POST['action'])) {
    if ($_POST['action'] = 'eliminar') {
        $id = $_POST['id'];
        $sql = "UPDATE users SET status='0' WHERE id='" . $id . "'";
        $conexion->query($sql);
    }
}


	/*if($_POST['action']=='update'){
		//recibir variables post
$id=$_POST['inputId'];
$username=$_POST['inputUsername'];
$password=$_POST['inputPassword'];

//ejecutar la modificacion del usuario
$users=new Users();
$users->username=$username;
$users->password=md5($password);
echo $users->update($id);
	}

	if($_POST['action']=='delete'){
	}
}