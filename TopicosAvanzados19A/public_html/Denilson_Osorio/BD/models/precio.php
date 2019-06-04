<?php
class Precio{

  public $precio;
  public $id;
  public $link;
  public function __CONSTRUCT(){
    require_once '../core/Config.php';
    $precio= new Config();
    $this->link=$precio->conectar();
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
      $precio=new Precio();
      $precio->id=(int) $precio->maxId('ID_p','precio');
      echo $precio->id;
      $sql="INSERT INTO precio (ID_p,Precio) VALUES ('".$precio->id."','".$this->precio."')";
      $this->link->query($sql);

    }

    function delete($id){
      $sql="UPDATE precio SET status='0' WHERE ID_p='$id'";
      $this->link->query($sql);
    }
}


 ?>
