<?php
/*
*	Source: config.php
*	Description: Conexion a base de datos
*	Date: 01/05/2019
*	Autor: Francisco Montalvo Hidalgo, Jesus Alberto Lira Romero, Cosme Alberto Magaña Camara.
*/

  class Pagos{

    public $monto;
    public $fecha;
    public $matricula;
    public $id_m;
    public $id_p;
    public $id_fp;

    private $model;
    public function __CONSTRUCT(){
      require_once '../Core/Config.php';

      $pagos=new Config();
      $this->model=$pagos->conectar();

    }

    function create(){
       $sql="INSERT INTO monto (monto,Status) VALUES ('".$this->monto."','1')";
      $this->model->query($sql);
      $sqluser="INSERT INTO fecha_pago (fecha) VALUES ('".$this->fecha."')";
      $this->model->query($sqluser);

      $sqlfecha="INSERT INTO pagos (id_m,id_fp,matricula) VALUES ('".$this->id_m."','".$this->id_fp."','".$this->matricula."')";
      $this->model->query($sqlfecha);

    }



    function read(){
      $sql="SELECT id_p,monto,fecha,matricula * FROM pagos,monto,fecha_pago";
      $tabla=$this->model->query($sql);
      $array=array();
      $i=0;
      while($filapagos=$tabla->fetch_array(MYSQLI_BOTH)){
        $arraypagos[$i]=$filapagos;
        $i++;
      }
      return $arraypagos;
    }
    function delete($matricula){
      $matricula=$matricula;
        $sqls="UPDATE monto set Status=0  WHERE id_m='".$matricula."'";
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
          return $fila[0]+1;
        }
      }
  }
  /*$pago= new Pagos();
  $pago->id_m=$pago->maxId("id_m","monto");
  $pago->id_fp=$pago->maxId("id_fp","fecha_pago");
  $pago->monto=500;
  $pago->fecha="04/07/2019";
  $pago->matricula="04170001";
  $pago->create();
  $pago->id_m=$pago->maxId("id_m","monto")-1;
  echo $pago->id_m;
  $pago->delete($pago->id_m);*/
