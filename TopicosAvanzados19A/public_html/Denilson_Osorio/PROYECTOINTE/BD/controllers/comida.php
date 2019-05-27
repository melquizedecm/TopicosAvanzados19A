<?php
require_once '../models/comida.php';

$comida=new Comida();
if (isset($_POST['action'])) {
    $action = $_POST['action'];

/////////////////////agregar
if ($action == 'agregar') {
  $comida->comida=$_POST['comida'];
  $comida->create();
}
if ($action=='editar') {
    $comida->comida=$_POST['comida'];
      $comida->update($_POST['id']);
}
if ($action=='eliminar') {

      $comida->delete($_POST['id']);
}

}
 ?>
