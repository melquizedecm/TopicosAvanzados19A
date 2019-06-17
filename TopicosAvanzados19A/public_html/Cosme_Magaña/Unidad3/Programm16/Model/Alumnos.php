<?php
require_once '../Core/Config.php';
$alumnos=new Config();
$link=$alumnos->conectar();
//Clase para el CRUD alumnos
  class Alumnos{
    public $matricula;
    public $nombre;
    public $apellidopat;
    public $apellidomat;
    public $id_grado;
    public $id_nivel;
    public $status;

    public function __CONSTRUCT(){

    }
    //Funcion create para crear a los alumnos enviandolo a la base de datos
    function create(){
      $sql="INSERT INTO alumnos(nombre,apellido_p,apellido_m,id_g,id_n) VALUES ('".$this->matricula."','".$this->nombre."','".$this->apellidopat."','".$this->apellidomat."','".$this->id_grado."','".$this->id_nivel."','1')";
      $link->query($sql);
    }
    function read($matricula){
    }
    //Funcion para actualizar los alumnos
    function update($matricula){
      $sql="UPDATE alumnos set nombre='".$this->nombre."',apellido_p='".$this->apellidopat."',apellido_m='".$this->apellidopat."',id_g='".$this->id_grado."',id_n='".$this->id_nivel."' WHERE matricula='".$this->matricula."'";

    }
    function delete(){

    }
    $alumnos=new alumnos();
    $alumnos->nombre="Jesus Alberto";
    $alumnos->apellidopat="Lira";
    $alumnos->apellidomat="Romero";
    $alumnos->id_grado=3;
    $alumnos->id_nivel=2;
    $alumnnos->create();

  }

 ?>
