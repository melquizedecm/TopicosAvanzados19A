<!--
*	Source: config.php
*	Description: Conexion a base de datos
*	Date: 01/05/2019
*	Autor: Francisco Montalvo Hidalgo, Jesus Alberto Lira Romero, Cosme Alberto Magaña Camara.-->
<!-- Controller de la seccion pagos-->
<!-- seccion del codigo para agregar pago mediante el metodo post-->


<?php

require_once('../Model/Perfilmodel.php');
public Perfil{
  public $matriculaalumno;
  public $nombrealumno;
  public $apalumno;
  public $amaalumno;

//Seccion de codigo que toma los datos de las view por el metodo post
function mostraralumno($matricula){

$leer=new Perfil();
$leer1=new Perfilmodel();

$listaa=$leer1->read($matricula1);
$leer->matriculaalumno =$listaa[0]['matricula'];
$leer->nombrealumno =$listaa[0]['nombre'];
$leer->apalumno =$listaa[0]['apellido_p'];
$leer->amaalumno =$listaa[0]['apellido_m'];



}

}

mostraralumno('04170001');
//  $pago->id_m=$pago->maxId("id_m","monto");
  //$pago->id_fp=$pago->maxId("id_fp","fecha_pago");
  //$pago->monto=$monto;
  //$pago->fecha=$fecha;
  //S$pago->matricula=$matricula;
