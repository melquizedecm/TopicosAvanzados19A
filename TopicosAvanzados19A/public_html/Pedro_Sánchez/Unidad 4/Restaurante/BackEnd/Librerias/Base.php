<?php

//Clase para conectarse a la base de datos y ejecutar consuldas con PDO.
class Base {

    //Estas varibales toman su valor desde el documento Config/Configurar.php
    private $host = BD_HOST;
    private $usuario = BD_USUARIO;
    private $password = BD_PASSWORD;
    private $nombre_base = BD;
    //Variables que se utilizan para las funciones que trabajan despues del constructor.
    private $dbh;
    private $stmt;
    private $error;

    //Constructor de la Clase Base.php
    public function __construct() {
        //Configurar conexión con la arquitectura PDO.
        //Códificamos las sentencias necesarias para hacer la conexión con Mysql.
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->nombre_base;
        $opciones = array(
            PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        //Creamos la instancia de PDO.
        try {
            //Realizamos la codificación de PDO.
            $this->dbh = new PDO($dsn, $this->usuario, $this->password, $opciones);
            $this->dbh->exec('set names utf8');
        } catch (PDOException $ex) {
            //Lanzamos un error cuando no se conecta la base de datos.
            $this->error = $ex->getMessage();
            echo $this->error;
        }
    }

    //Preparamos la consulta.
    public function query($query) {
        $this->stmt = $this->dbh->prepare($query);
    }

    //Vinculamos la consulta con bind.
    public function bind($parametro, $valor, $tipo = null) {
        if (is_null($tipo)) {
            switch (true) {
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                    break;
                case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                    break;
                case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                    break;
                default :
                    $tipo = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($parametro, $valor, $tipo);
    }

    //Ejecutamos la consulta.
    public function execute() {
        return $this->stmt->execute();
    }

    //Obtener los registros.
    public function registros() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //Obtener un solo registro
    public function registro() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    //Obtener cantidad de filas con el método rowCount
    public function rowCount() {
        return $this->stmt->rowCount();
    }

    public function ConsultaId() {
        $id = $this->stmt = $this->dbh->lastInsertId();
        return $id;
    }

    public function Consulta($query) {
        $this->stmt = $this->dbh->prepare($query);
        return $this->stmt->execute();
    }

}
