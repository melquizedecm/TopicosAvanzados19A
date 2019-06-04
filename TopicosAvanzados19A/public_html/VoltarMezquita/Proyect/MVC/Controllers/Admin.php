<?php

require_once '../Models/Admin.php';
  //Instanciando la clase alumnos
  $user= new Admin();
  //Indicando que si se envia por metodo post se reciba y dependiendo el valor de el action realizara la accion indicada
  if (isset($_POST['action'])) {
      $action =$_POST['action'];
      if ($action=='agregar') {

        $user->nombre=$_POST['nombre'];
        $user->app=$_POST['app'];
        $user->user=$_POST['usuario'];
        $user->pass=$_POST['pass'];
        $user->create();
      }
      if ($action=='editar') {
        $user->nombre=$_POST['nombre'];
        $user->app=$_POST['app'];
        $user->user=$_POST['usuario'];
        $user->pass=$_POST['pass'];
        $user->update($_POST['id']);

      }
      if ($action=='eliminar') {
        $user->delete($_POST['id']);
      }
    }
 ?>
