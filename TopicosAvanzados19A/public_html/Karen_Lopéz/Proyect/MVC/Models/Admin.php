<?php
class Admin{

  public $nombre;
  public $app;
  public $user;
  public $pass;


  private $model;
  public function __CONSTRUCT(){
    require_once '../Core/Config.php';

    $pagos=new Config();
    $this->model=$pagos->conectar();

  }

  function create(){

     $sql="INSERT INTO usuarios (usuario,nombre,ap,password) VALUES ('".$this->user."','".$this->nombre."','".$this->app."','".$this->pass."')";
     $this->model->query($sql);

  }

  function update($id){

    $sql="UPDATE usuarios set nombre='".$this->nombre."',usuario='".$this->user."',ap='".$this->app."',password='".$this->pass."' WHERE id_u='".$id."'";
    $this->model->query($sql);


  }




  function delete($id){

      $sqls="UPDATE usuarios set Status=0  WHERE id_u='".$id."'";
      $this->model->query($sqls);


  }

}

  

 ?>
