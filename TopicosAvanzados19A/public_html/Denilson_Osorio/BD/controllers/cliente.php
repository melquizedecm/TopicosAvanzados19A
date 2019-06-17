<?php

require_once '../models/cliente.php';
/*

 * Date:    9/Abril/2019

 */

////CONECTARME A LA BASE DE DATOS
$cliente=new Cliente();

//recibir las variables

if (isset($_POST['action'])) {
    $action = $_POST['action'];

/////////////////////agregar
if ($action == 'agregar') {
  $cliente->nombre=$_POST['nombre'];
  $cliente->fecha=$_POST['fecha'];
  $cliente->hora=$_POST['hora'];
  $cliente->cantidad=$_POST['cantidad'];
  $cliente->importe=$_POST['importe'];
  $cliente->id_comida=$_POST['comida'];
  $cliente->id_precio=$_POST['precio'];
  $cliente->id_usuario=$_POST['usuario'];
  $cliente->create();
}

/////eliminar
    if ($_POST['action'] = 'eliminar') {
        $cliente->delete($_POST['id']);
    }


}
