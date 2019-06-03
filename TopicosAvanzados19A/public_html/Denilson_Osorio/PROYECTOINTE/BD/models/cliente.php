<?php

///CONECTARME A LA BASE DE datos
class Cliente{
public $id;
public $nombre;
public $fecha;
public $hora;
public $cantidad;
public $importe;
public $id_comida;
public $id_precio;
public $id_usuario;
public $link;
  public function __CONSTRUCT(){
    require_once '../core/Config.php';
    $clientes= new Config();
    $this->link=$clientes->conectar();
  }
  function maxId($id,$tabla){
      $sqlMax="SELECT MAX($id) FROM $tabla";
      $tabla=$this->link->query($sqlMax);
      $fila=$tabla->fetch_array(MYSQLI_BOTH);
      if (!$fila[0]){
        return "1";
      }
      else{
        return $fila[0];
      }
    }
  function create(){
    $clientes= new Cliente();
    $sql="INSERT INTO cliente (nombre) VALUES ('".$this->nombre."')";
    $this->link->query($sql);
    $idcliente=(int)$clientes->maxId("ID_cliente","cliente");

    $sql="INSERT INTO venta (ID_cliente,Cantidad,Fecha,Hora,Importe,ID_usuario,ID_comida,ID_p) VALUES ('$idcliente','".$this->cantidad."','".$this->fecha."','".$this->hora."','".$this->importe."','".$this->id_usuario."','".$this->id_comida."','".$this->id_precio."')";
    $this->link->query($sql);
  }
  function delete($id){
    $sql="UPDATE venta SET status='0' WHERE ID_venta='$id'";
    $this->link->query($sql);
  }
}
$cliente=new Cliente();
/*
$cliente->username="LIRAESGAY";
$cliente->cantidad=45;
$cliente->fecha="04/06/2019";
$cliente->hora="10:00 am";
$cliente->id_comida=1;
$cliente->id_usuario=3;
$cliente->id_precio=1;

$cliente->create();
$cliente->delete(8);*/

 ?>
