<?php
require_once '../models/precio.php';

$precio=new Precio();
if (isset($_POST['action'])) {
    $action = $_POST['action'];

/////////////////////agregar
if ($action == 'agregar') {
  $precio->precio=$_POST['precio'];
  $precio->create();
}

if ($action=='eliminar') {

      $precio->delete($_POST['id']);
}

}
 ?>
