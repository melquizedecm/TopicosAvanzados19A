<?php
/*
*	Source: config.php
*	Description: Conexion a base de datos
*	Date: 01/05/2019
*	Autor: Francisco Montalvo Hidalgo, Jesus Alberto Lira Romero, Cosme Alberto Magaña Camara.
*/

  class Perfilmodel{



// DEfinicion de variables

    public $matricula;

    public $nombre;
    public $foto;
    public $ruta;
    public $destino;

    private $model;
    public function __CONSTRUCT(){
      require_once '../Core/Config.php';
      $perfil=new Config();
      $this->model=$perfil->conectar();

    }


    function imagesc(){
      $fila= array();
      $sqlcon="SELECT id_img FROM images WHERE matricula='".$matricula."'";
      $tabla2=$this->model->query($sqlcon);
      $fila=$tabla2->fetch_array(MYSQLI_BOTH);

      if (empty($fila[0])){
        $sqlx="INSERT INTO images (matricula,foto) VALUES ('".$this->matricula."','".$this->destino."')";
        $this->model->query($sqlx);
        }
        else{
          $sqls="UPDATE images SET foto='".$this->destino."' WHERE matricula='".$this->matricula."'";
          $this->model->query($sqls);
        }


      }
    //Funcion para eliminar elementos

  }
