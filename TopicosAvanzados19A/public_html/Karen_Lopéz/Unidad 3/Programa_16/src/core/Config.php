<?php

//Sourse: Config
//Author: Karen López
//Date: 11/04/19
//Description: clase que permite configurar una conexion de datos

class config {

//configuracion de las variables del servidor de BD
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "topicos";

    function conectar() {
//conceta el gestor y la base de datos
        $conexion = mysqli_connect(
                $this->host,
                $this->user,
                $this->password,
                $this->database);
        return $conexion;
    }

}
