<?php
require_once '../Models/Inventario.php';
  //Instanciando la clase alumnos
  $inventario= new Inventario();
  //Indicando que si se envia por metodo post se reciba y dependiendo el valor de el action realizara la accion indicada
  if (isset($_POST['action'])) {
      $action =$_POST['action'];
      if ($action=='agregar') {

        $inventario->producto=$_POST['producto'];
        $inventario->prev=(int)$_POST['prev'];
        $inventario->prec=(int)$_POST['prec'];
        $inventario->cantidad=(int)$_POST['cantidad'];
        $inventario->cat=(int)$_POST['cat'];
        $inventario->create();
      }
      if ($action=='editar') {

        $inventario->producto=$_POST['producto'];
        $inventario->prev=(int)$_POST['prev'];
        $inventario->prec=(int)$_POST['prec'];
        $inventario->cantidad=(int)$_POST['cantidad'];
        $inventario->cat=(int)$_POST['cat'];
        $inventario->update($_POST['id']);
      }
      if ($action=='eliminar') {
        $inventario->delete($_POST['id']);
      }
    }

 ?>
