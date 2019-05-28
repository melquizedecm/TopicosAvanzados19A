<!--11/04/19 -->
<?php
//clase que peremite configurar una conexion a la base de datos.
Class Config{
  private $host="localhost";
  private $user="root";
  private $password="";
  private $database="topicos";
  function conectar(){
  //Conectarse al gestor y a la BD
  $conexion= mysqli_connect($this->host, $this->user, $this->password, $this->database);
  return $conexion;
}
}
 ?>
