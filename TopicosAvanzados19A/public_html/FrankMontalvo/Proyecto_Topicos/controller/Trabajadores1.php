<?php
require_once '../Model/Trabajadores1.php';
//Se instancia la clase trabajadores
$trabajadores=new Trabajadores();
//Un if para indicando de que si hay post realice la opcion segun la accion que se envie
if (isset($_POST['action'])) {
    $action =$_POST['action'];
    if ($action=='agregar') {
      $trabajadores->matricula= $_POST['matricula'];
      $trabajadores->nombre= $_POST['nombre'];
      $trabajadores->apellidopat= $_POST['apellido_pat'];
      $trabajadores->apellidomat= $_POST['apellido_mat'];

      $trabajadores->create();
    }
    if ($action=='editar') {
      $trabajadores->matricula= $_POST['matricula'];
      $trabajadores->nombre= $_POST['nombre'];
      $trabajadores->apellidopat= $_POST['apellido_pat'];
      $trabajadores->apellidomat= $_POST['apellido_mat'];
      $trabajadores->update($trabajadores->matricula);
    }
    if ($action=='eliminar') {
      $trabajadores->matricula= $_POST['matricula'];
      $trabajadores->delete($trabajadores->matricula);
    }
    if ($action=='pass') {
      $trabajadores->contrasena= $_POST['pass'];
      $id=$_POST['matricula'];
      $trabajadores->updatepass($id);
    }
  }

 ?>
