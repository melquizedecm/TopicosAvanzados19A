<?php

require_once('../models/Users.php');
/*
 * clase del controlador que permite modificar la base de datos.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['action'])) {

    if ($_POST['action'] == "create") {
        
    }

    if ($_POST['action'] == "read") {
        
    }

    if ($_POST['action'] == "update") {
        ///RECIBIR VARIABLES POST///
        $id = $_POST['inputId'];
        $username = $_POST['inputUsername'];
        $password = $_POST['inputPassword'];

        ///ejecutar la modificacion en el modelo
        $users = new Users();
        $users->username = $username;
///al poner el md5 en el password este se encripta en la base de datos 
        $users->password = md5($password);
        echo $users->update($id);
    }

    if ($_POST['action'] == "delete") {
        
    }
}

