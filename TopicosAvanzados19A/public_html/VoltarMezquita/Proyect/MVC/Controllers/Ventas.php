<?php
require_once '../Models/Ventas.php';
  //Instanciando la clase alumnos
  $venta= new Ventas();
  //Indicando que si se envia por metodo post se reciba y dependiendo el valor de el action realizara la accion indicada
  if (isset($_POST['action'])) {
      $action =$_POST['action'];
      if ($action=='agregar') {

        $venta->importe=$_POST['importe'];
        $venta->id_u=$_POST['iduser'];
        $venta->fecha=$_POST['fecha'];
        $venta->hora=$_POST['hora'];
        $venta->id_p=$_POST['producto'];
        $venta->create();
      }

      if ($action=='eliminar') {
        $venta->delete($_POST['id']);
      }
    }
 ?>
