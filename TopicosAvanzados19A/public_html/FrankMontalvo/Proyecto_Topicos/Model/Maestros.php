<?php
/*
 * Source:  users.php
 * Author:  Jesus Alberto Lira Romero
 * Date:    9/05/2019
 * Description:
 * CRUD que permite gestionar los datos del usuario.
 */
require_once('../Core/Config.php');

Class Maestros extends Config{

  private $matricula_m;
  public $nombre;
  public $apellido_p;
  public $apellido_m;
  public $grado;
  public $id_g;
  public $id_n;
  public $telefono;
  public $status;

  function __CONSTRUCT(){
      $this->link=parent::conectar();
  }

  //Funcion maxId para tomar los ultimos id de las respectivas tablas enlasadas
  //con IMPARTIR y asi poder hacer un INSERT de estas luego con el paso de valores
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

  function create(){ //funcion de crear
    //Insertando en tablas de manera individual
    $maestros=new Maestros();
    $sqlMstr="INSERT INTO telefono (telefono) VALUES ('".$this->telefono."')";
    $this->link->query($sqlMstr);
    $matricula_m=$maestros->maxId('matricula_m','telefono');
    $matricula_m=(int)$matricula_m;

    $sqlMstr="INSERT INTO maestros (matricula_m,nombre,apellido_p,apellido_m) VALUES ('.$matricula_m.','".$this->nombre."','".$this->apellido_p."','".$this->apellido_m."')";
    $this->link->query($sqlMstr);


     //insertar ultimos id en IMPARTIR
    $sqlMstr="INSERT INTO impartir (id_g,id_n,matricula_m) VALUES ('".$this->id_g."','".$this->id_n."','.$matricula_m.')";
    $this->link->query($sqlMstr);
  }

  function update($id){ // funcion de actualizar
    //se actualiza de cada taba en especifico
    $sql="UPDATE maestros SET nombre='".$this->nombre."',apellido_p='".$this->apellido_p."',apellido_m='".$this->apellido_m."' WHERE matricula_m='".$id."'";
    $this->link->query($sql);


    $sql="UPDATE telefono SET telefono='".$this->telefono."' WHERE matricula_m='".$id."'";
    $this->link->query($sql);
    $sql="UPDATE impartir SET id_g='".$this->id_g."',id_n='".$this->id_n."' WHERE matricula_m='".$id."'";
    $this->link->query($sql);
  //$sql="UPDATE articipar SET id_e='".$this->evento."',id_l='".$this->lugar."',id_f='".$this->fecha."',id_h='".$this->hora."' WHERE id_i='".$id."'";

  }

function delete($id){ //apartado de borrar
      $sql="UPDATE maestros SET Status='0' WHERE matricula_m='".$id."'";
      $this->link->query($sql);
  }
}

/*$maestros=new Maestros();

$maestros->nombre="Francisco";
$maestros->apellido_p="Montalvo";
$maestros->apellido_m="Hidalgo";
$maestros->id_g="1";
$maestros->id_n="4";
$maestros->telefono="1111155555";
$maestros->create();*/
