<?php

require_once '../core/Config.php';
/*
 * Source:  users.php
 * Author:  Melquizedec Moo Medina
 * Date:    9/Abril/2019
 * Description:
 * CRUD que permite gestionar los datos del usuario.
 */

////CONECTARME A LA BASE DE DATOS
$config = new Config();
$conexion = $config->conectar();

//recibir las variables

if (isset($_POST['action'])) {
    $action = $_POST['action'];
    ////// VERIFICAR SI LA ACCION ES EDITAR//////
    if ($action == 'editar') {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "UPDATE users SET username='" . $username . "',password='" . md5($password) . "' WHERE id='" . $id . "'";
        $conexion->query($sql);
    }
    
    ///////VERIFICAR SI LA ACCION ES ELIMINAR //////
}

//if (isset($_POST['action'])) {
//    if ($_POST['action'] = 'eliminar') {
//        $id = $_POST['id'];
//        $sql = "UPDATE users SET status='0' WHERE id='" . $id . "'";
//        $conexion->query($sql);
//    }
//}