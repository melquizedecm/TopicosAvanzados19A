<?php
/*
*	Source: config.php
*	Description: Conexion a base de datos
*	Date: 01/05/2019
*	Autor: Francisco Montalvo Hidalgo, Jesus Alberto Lira Romero, Cosme Alberto Magaña Camara.
*/
//Función para conectar con mi base de datos
class Config{
  //Variables para la conexion
  private $DBuser="root";
  private $DBpass="";
  private $DBserver="localhost";
  private $DBdatos="proyecto_mayab";
  function conectar(){
    $link=mysqli_connect(
      $this->DBserver,
      $this->DBuser,
      $this->DBpass,
      $this->DBdatos);
    return $link;
  }
}
?>
