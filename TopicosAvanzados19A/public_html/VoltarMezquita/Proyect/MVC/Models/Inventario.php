<?php
class Inventario{

  public $producto;
  public $prev;
  public $cantidad;
  public $prec;
  public $cat;


  private $model;
  public function __CONSTRUCT(){
    require_once '../Core/Config.php';

    $pagos=new Config();
    $this->model=$pagos->conectar();

  }

  function create(){
    $inventario= new Inventario();
     $sql="INSERT INTO cantidad (cantidad) VALUES ('".$this->cantidad."')";
     $this->model->query($sql);
     $id_c=(int)$inventario->maxId('id_c','cantidad');
     $sql="INSERT INTO preciov (preciov) VALUES ('".$this->prev."')";
     $this->model->query($sql);

     $id_prev=(int)$inventario->maxId('id_prev','preciov');
     $sql="INSERT INTO precioc (precio) VALUES ('".$this->prec."')";
     $this->model->query($sql);
     $id_prec=(int)$inventario->maxId('id_prec','precioc');
     $sql="INSERT INTO productos (nombre,id_prec,id_prev,id_c,id_ca) VALUES ('".$this->producto."','".$id_prec."','".$id_prev."','".$id_c."','".$this->cat."')";
     $this->model->query($sql);


  }

  function update($id){

    $sql="UPDATE productos set nombre='".$this->producto."',id_ca='".$this->cat."' WHERE id_p='".$id."'";
    $this->model->query($sql);
    $sql="SELECT id_prec,id_prev,id_c FROM productos WHERE id_p='$id'";
    $tablaid=$this->model->query($sql);
    $filaid=$tablaid->fetch_array(MYSQLI_BOTH);
    $id_prec=$filaid[0];
    $id_prev=$filaid[1];
    $id_c=$filaid[2];
    $sql="UPDATE precioc set precio='".$this->prec."' WHERE id_prec='".$id_prec."'";
    $this->model->query($sql);
    $sql="UPDATE preciov set preciov='".$this->prev."' WHERE id_prev='".$id_prev."'";
    $this->model->query($sql);
    $sql="UPDATE cantidad set cantidad='".$this->cantidad."' WHERE id_c='".$id_c."'";
    $this->model->query($sql);

  }




  function delete($id){

      $sqls="UPDATE productos set Status=0  WHERE id_p='".$id."'";
      $this->model->query($sqls);


  }
    function maxId($campo,$tab ){
      $sqlMax="SELECT MAX($campo) FROM $tab";
      $tabla=$this->model->query($sqlMax);
      $fila=$tabla->fetch_array(MYSQLI_BOTH);
      if (!$fila[0]){
        return '1';
      }
      else{
        return $fila[0];
      }
    }
}

  //$inventario->delete();
 ?>
