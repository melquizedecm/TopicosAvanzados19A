
<?php
//
//Sourse: Config.php
//Author: Karen López
//Date: 09/05/19
//Description: clase que permite realizar una conexion a la BD
//
class Config{
  //Variables para la conexion
  private $DBuser="root";
  private $DBpass="";
  private $DBserver="localhost";
  private $DBdatos="proyecto";
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
