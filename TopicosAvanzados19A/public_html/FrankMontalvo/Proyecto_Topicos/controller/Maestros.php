<?php
  require_once '../Model/Maestros.php';

  $maestros=new Maestros();
  if (isset($_POST['action'])) {
    $action =$_POST['action'];
    if ($action=='create') { //accion de crear
      $maestros->nombre=$_POST['nombre'];
      $maestros->apellido_p=$_POST['apellido_p'];
      $maestros->apellido_m=$_POST['apellido_m'];
      $maestros->id_g=$_POST['grado'];
      $maestros->id_n=$_POST['nivel'];
      $maestros->telefono=$_POST['telefono'];
      $maestros->create();
    }
    if ($action=='update') { //accion de actualizar
      $maestros->id=$_POST['id'];
      $maestros->nombre=$_POST['nombre'];
      $maestros->apellido_p=$_POST['apellido_p'];
      $maestros->apellido_m=$_POST['apellido_m'];
      $maestros->id_g=$_POST['grado'];
      $maestros->id_n=$_POST['nivel'];
      $maestros->telefono=$_POST['telefono'];
      $maestros->update($maestros->id);
    }
    if ($action=='delete') { //accion de borrar
      $maestros->id=$_POST['id'];
      $maestros->delete($maestros->id);
    }
  }
 ?>
