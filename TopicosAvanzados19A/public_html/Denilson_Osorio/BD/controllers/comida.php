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
if ($_POST['action']=="editar") {
  $id=$_POST['inputId'];
    $comidas->comida=$_POST['InputComida'];
      $comida->update($_POST['id']);
      $comida->Nombre=$comidas;
      echo $comidas->update($id);
}
if ($action=='eliminar') {

      $comida->delete($_POST['id']);
}

}
 ?>
