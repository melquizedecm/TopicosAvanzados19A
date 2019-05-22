<?php
require_once '../models/Users.php';
$users= new Users();

/* Source: users.php
 * Description: CRUD que permite gestionar los datos del usuario.
 */
//recibir las variables
if (isset($_POST['action'])) {
    $action = $_POST['action'];
    ////// VERIFICAR SI LA ACCION ES EDITAR//////
    if ($action == 'editar') {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $users->username=$username;
        $users->password=$password;
        $users->email=$email;
        return $users->update($id);
    }

    ///////VERIFICAR SI LA ACCION ES ELIMINAR //////
}

if (isset($_POST['action'])) {
    if ($_POST['action'] = 'eliminar') {
        $id = $_POST['id'];
        return $users->delete($id);
    }
}
