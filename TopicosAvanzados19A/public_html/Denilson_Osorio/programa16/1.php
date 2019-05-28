<!-- clase que permite la conexion a la base de datos -->
<?php
class Config{

private $host="localhost";
private $user="root";
private $password="";
private $database="topicos";
function conectar(){
  $conexion=mysqli_connect(
    $this->host,$this->user,$this->password,$this->database);
  return $conexion;
	}
}
