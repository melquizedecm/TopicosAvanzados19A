<?php

/*
 * Source:  Config.php
 * Author:  Melquizedec Moo Medina
 * Date:    11/Abril/2019
 * Description:
 * clase que permite configurar una conexion a la Base de Datos.
 */

class Config {

////Configuracion de las variables del servidor  de BD
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "topicos";

    function conectar() {
        $conexion = mysqli_connect(
                $this->host, 
                $this->user, 
                $this->password, 
                $this->database);
        return $conexion;
    }

}
