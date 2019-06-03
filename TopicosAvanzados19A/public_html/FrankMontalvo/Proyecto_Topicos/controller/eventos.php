<?php
  require_once '../Model/eventos.php';

  $eventos=new Eventos();
  if (isset($_POST['action'])) {
    $action =$_POST['action'];
    if ($action=='create') { //accion de crear
      $eventos->evento=$_POST['nombre'];
      $eventos->lugar=$_POST['lugar'];
      $eventos->fecha=$_POST['fecha'];
      $eventos->hora=$_POST['hora'];
      $eventos->id_n=$_POST['nivel'];
      $eventos->create();
    }
    if ($action=='update') { //accion de actualizar
      $eventos->id=$_POST['id'];
      $eventos->evento=$_POST['nombre'];
      $eventos->lugar=$_POST['lugar'];
      $eventos->fecha=$_POST['fecha'];
      $eventos->hora=$_POST['hora'];
      $eventos->id_n=$_POST['nivel'];
      $eventos->update($eventos->id);
    }
    if ($action=='delete') { //accion de borrar
      $eventos->id=$_POST['id'];
      $eventos->delete($eventos->id);
    }
  }
 ?>
