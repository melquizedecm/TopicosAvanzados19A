<?php
class Trabajadores{
  public $matricula;
  public $nombre;
  public $apellidopat;
  public $apellidomat;
  public $status;
  public $contrasena;

  public function __CONSTRUCT(){
    require_once '../Core/Config.php';
    $trabajadores=new Config();
    $this->model=$trabajadores->conectar();
  }
  //Funcion para crear a los trabajadores
   function create(){
    $sql="INSERT INTO trabajadores (matricula,nombre,apellido_p,apellido_m,Status) VALUES ('".$this->matricula."','".$this->nombre."','".$this->apellidopat."','".$this->apellidomat."','1')";
    $this->model->query($sql);
    $sqluser="INSERT INTO usuario2 (matricula,tipo) VALUES ('".$this->matricula."','1')";
    $this->model->query($sqluser);
  }
  //Funcion para leer los valores de mi tabla
   function read(){
    $sql="SELECT * FROM trabajadores";
    $tabla=$this->model->query($sql);
    $array=array();
    $i=0;
    while($fila=$tabla->fetch_array(MYSQLI_BOTH)){
      $array[$i]=$fila;
      $i++;
    }
    return $array;
  }
  //Funcion para actualizar los trabajadores
   function update($matricula){
    $sql="UPDATE trabajadores set nombre='".$this->nombre."',apellido_p='".$this->apellidopat."',apellido_m='".$this->apellidomat."' WHERE matricula='".$matricula."'";
    $this->model->query($sql);
  }
  //Funcion para eliminar a los trabajadores
  function delete($matricula){
  
    $sql="UPDATE trabajadores set Status='0'  WHERE matricula='".$matricula."'";
    $this->model->query($sql);
  }
  function updatepass($id){
    $sql="UPDATE `usuario2` SET `contrasenia` = '$this->contrasena' WHERE `usuario2`.`matricula` = $id";
    $this->model->query($sql);
    echo $this->model->query($sql);
  }

}
$trabajadores=new Trabajadores();
/*$trabajadores->contrasena="nuevapass2";
echo $trabajadores->contrasena;*/

$trabajadores->delete(04150011);

 ?>
