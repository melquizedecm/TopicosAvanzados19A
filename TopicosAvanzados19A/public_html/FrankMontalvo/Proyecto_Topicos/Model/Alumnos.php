<?php
/*
*	Source: config.php
*	Description: Conexion a base de datos
*	Date: 01/05/2019
*	Autor: Francisco Montalvo Hidalgo, Jesus Alberto Lira Romero, Cosme Alberto Magaña Camara.
*/

  class Alumnos{
    public $matricula;
    public $nombre;
    public $apellidopat;
    public $apellidomat;
    public $id_grado;
    public $id_nivel;
    public $model;
    public function __CONSTRUCT(){
      require_once '../Core/Config.php';
      $alumnos=new Config();
      $this->model=$alumnos->conectar();
    }
    //Funcion para tomar el valor maximo de el id de una tabla
    function maxId($id,$tabla){
      $sqlMax="SELECT MAX($id) FROM $tabla";
      $tabla=$this->model->query($sqlMax);
      $fila=$tabla->fetch_array(MYSQLI_BOTH);
      if (!$fila[0]){
        return "1";
      }
      else{
        return $fila[0];
      }
    }
    //Funcion para añadir a los alumnos
    function create(){
      $sql="INSERT INTO alumnos (matricula,nombre,apellido_p,apellido_m,id_g,id_n,Status) VALUES ('".$this->matricula."','".$this->nombre."','".$this->apellidopat."','".$this->apellidomat."','".$this->id_grado."','".$this->id_nivel."','1')";
      $this->model->query($sql);
      $sqluser="INSERT INTO usuario (matricula,tipo) VALUES ('".$this->matricula."','1')";
      $this->model->query($sqluser);
    }
    //Funcion para leer los datos de la tabla
    function read(){
      $sql="SELECT * FROM alumnos";
      $tabla=$this->model->query($sql);
      $array=array();
      $i=0;
      while($fila=$tabla->fetch_array(MYSQLI_BOTH)){
        $array[$i]=$fila;
        $i++;
      }
      return $array;
    }
    //Funcion para actualizar la tabla
    function update($matricula){

      $sql="UPDATE alumnos set nombre='".$this->nombre."',apellido_p='".$this->apellidopat."',apellido_m='".$this->apellidomat."',id_g='".$this->id_grado."',id_n='".$this->id_nivel."' WHERE matricula='".$matricula."'";
      $this->model->query($sql);
    }
    //Funcion para "eliminar" un alumno
    function delete($matricula){
      $sql="UPDATE alumnos set Status='0'  WHERE matricula='".$matricula."'";
      $this->model->query($sql);

    }



  }
  // $alumnos=new Alumnos();
  // echo $alumnos->maxId('id_g','grado');

  /*
  $alumnos->matricula="04170051";
  $alumnos->nombre="Cosme Alberto";
  $alumnos->apellidopat="Magaña";
  $alumnos->apellidomat="Camara";
  $alumnos->id_grado=6;
  $alumnos->id_nivel=4;
  $alumnos->create();*/



  /*$array=$alumnos->read();
  echo json_encode($array);*/

  /*$alumnos->nombre="Fernando";
  $alumnos->apellidopat="Avila";
  $alumnos->apellidomat="Camacho";
  $alumnos->id_grado=6;
  $alumnos->id_nivel=2;
  $alumnos->update('04170051');

  $alumnos->delete('5');*/
 ?>
