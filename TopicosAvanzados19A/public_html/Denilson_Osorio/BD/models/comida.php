<?php

class Comida{
  public $comida;
  private $id;
  public $link;
  public function __CONSTRUCT(){
    require_once '../core/Config.php';
    $comida= new Config();
    $this->link=$comida->conectar();
  }

  function maxId($id,$tabla){
      $sqlMax="SELECT MAX($id) FROM $tabla";
      $tabla=$this->link->query($sqlMax);
      $fila=$tabla->fetch_array(MYSQLI_BOTH);
      if (!$fila[0]){
        return "1";
      }
      else{
        return $fila[0]+1;
      }
    }

    function create(){
      $comida=new Comida();
      $comida->id=(int) $comida->maxId('ID_comida','comida');
      $sql="INSERT INTO comida (ID_comida,Nombre) VALUES ('".$comida->id."','".$this->comida."')";
      $this->link->query($sql);
    }
    function update($id){
        $sql="UPDATE comida SET Nombre='$this->comida' WHERE ID_comida='$id'";
        return $this->link->query($sql);
    }

    function delete($id){
      $sql="UPDATE comida SET status='0' WHERE ID_comida='$id'";
      $this->link->query($sql);
    }
}




 ?>
