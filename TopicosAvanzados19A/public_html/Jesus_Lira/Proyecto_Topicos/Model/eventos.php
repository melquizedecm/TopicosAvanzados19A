<?php
/*
 * Source:  users.php
 * Author:  Jesus Alberto Lira Romero
 * Date:    9/05/2019
 * Description:
 * CRUD que permite gestionar los datos del usuario.
 */
require_once('../Core/Config.php');

Class Eventos extends Config{

  public $evento;
  //public $id_e;
  public $lugar;
  //public $id_l;
  public $fecha;
  //public $id_f;
  public $hora;
  //public $id_h;
  //public $nivel;
  public $id_n;
  public $status;
  public $id;

  function __CONSTRUCT(){
      $this->link=parent::conectar();
  }

  //Funcion maxId para tomar los ultimos id de las respectivas tablas enlasadas
  //con PARTICIPAR y asi poder hacer un INSERT de estas luego con el paso de valores
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
    $eventos=new Eventos();
    $sql="INSERT INTO eventos (nombre,Status) VALUES ('".$this->evento."','1')";
    $this->link->query($sql);
    $id_e=$eventos->maxId('id_e','eventos');
    $id_e=(int)$id_e;
    $sql="INSERT INTO lugar (lugar) VALUES ('".$this->lugar."')";
    $this->link->query($sql);
    $id_l=$eventos->maxId('id_l','lugar');
    $id_l=(int)$id_l;
    $sql="INSERT INTO fecha (fecha) VALUES ('".$this->fecha."')";
    $this->link->query($sql);
    $id_f=$eventos->maxId('id_f','fecha');
    $id_f=(int)$id_f;
    $sql="INSERT INTO hora (hora) VALUES ('".$this->hora."')";
    $this->link->query($sql);
    $id_h=$eventos->maxId('id_h','hora');
    $id_h=(int)$id_h;
   //insertar ultimos id en PARTICIPAR
    $sql="INSERT INTO participar (id_e,id_l,id_f,id_h,id_n) VALUES ('$id_e','$id_l','$id_f','$id_h','".$this->id_n."')";
    $this->link->query($sql);
  }

  function update($id){ // funcion de actualizar
    //se actualiza de cada taba en especifico
    $sql="UPDATE eventos SET nombre='".$this->evento."' WHERE id_e='".$id."'";
    $this->link->query($sql);
    $sqlseleccionar="SELECT id_l,id_f,id_h,id_n FROM participar WHERE id_e='".$id."'";
    $tabla=$this->link->query($sqlseleccionar);
    $fila=$tabla->fetch_array(MYSQLI_BOTH);
    $id_l=(int) $fila[0];
    $id_f=(int) $fila[1];
    $id_h=(int) $fila[2];
    $id_n=(int) $fila[3];
    $sql="UPDATE lugar SET lugar='".$this->lugar."' WHERE id_l='".$id_l."'";
    $this->link->query($sql);
    $sql="UPDATE fecha SET fecha='".$this->fecha."' WHERE id_f='".$id_f."'";
    $this->link->query($sql);
    $sql="UPDATE hora SET hora='".$this->hora."' WHERE id_h='".$id_h."'";
    $this->link->query($sql);
    $sql="UPDATE participar SET id_n='".$this->id_n."' WHERE id_e='".$id."' AND id_l='".$id_l."' AND id_f='".$id_f."' AND id_h='".$id_h."'";
    $this->link->query($sql);

  //$sql="UPDATE articipar SET id_e='".$this->evento."',id_l='".$this->lugar."',id_f='".$this->fecha."',id_h='".$this->hora."' WHERE id_i='".$id."'";

  }

function delete($id){ //apartado de borrar
      $sql="UPDATE eventos SET Status='0' WHERE id_e='".$id."'";
      $this->link->query($sql);
  }
}
