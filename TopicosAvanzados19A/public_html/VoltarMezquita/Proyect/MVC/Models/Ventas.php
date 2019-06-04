<?php
class Ventas{

  public $importe;
  public $id_u;
  public $fecha;
  public $hora;
  public $id_p;

  private $model;
  public function __CONSTRUCT(){
    require_once '../Core/Config.php';

    $pagos=new Config();
    $this->model=$pagos->conectar();

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

  function create(){
     $venta=new Ventas();
     $sql="INSERT INTO fh (fecha,hora) VALUES ('".$this->fecha."','".$this->hora."')";
     $this->model->query($sql);
     $id_f=(int)$venta->maxId('id_fh','fh');
     $sql="INSERT INTO venta (importe,id_u,id_fh) VALUES ('".$this->importe."','".$this->id_u."','".$id_f."')";
     $this->model->query($sql);
     $folio=(int)$venta->maxId('folio','venta');

     $sql="INSERT INTO id_pfolio(folio,id_p) VALUES ('".$folio."','".$this->id_p."')";
     $this->model->query($sql);
  }





  function delete($id){

      $sqls="UPDATE venta set status=0  WHERE folio='".$id."'";
      $this->model->query($sqls);


  }

}
$venta = new Ventas();
$venta->importe=300;
$venta->fecha="23/05/19";
$venta->hora="10:00";
$venta->id_u=103;
$venta->id_p=7;
$venta->create();


 ?>
