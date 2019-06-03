<?php
require_once '../Model/Pagos1.php';

$pago=new Pagos();

if(isset($_POST['action'])){
  $action=$_POST['action'];
  if($action=='create'){
    $monto=$_POST['monto'];
    $fecha=$_POST['fecha'];
    $matricula=$_POST['matricula'];
    $pago->id_m=$pago->maxId("id_m","monto");
    $pago->id_fp=$pago->maxId("id_fp","fecha_pago");
    $pago->monto=$monto;
    $pago->fecha=$fecha;
    $pago->matricula=$matricula;

   $pago->create();


  } if($_POST['action']=="eliminar"){
    $pago->id_m=$_POST['id_m'];
    $pago->delete($pago->id_m);
  }


}
