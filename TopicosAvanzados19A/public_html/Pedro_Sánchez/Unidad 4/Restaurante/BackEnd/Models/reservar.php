<?php

class Reservar {

    private $db;

    public function __construct() {
        $this->db = new Base;
    }

    public function Create($datos) {
        //Ingresamos los datos de fechare en la tala fechares.
        $this->db->Consulta('INSERT INTO fechares (fechare, hora, cant_personas) VALUES ("' . $datos['fechare'] . '", "' . $datos['hora'] . '", "' . $datos['cant_personas'] . '")');


        //Obtenemos el id ultimo agregado de la tabla nacimientos .
        $idf = $this->db->ConsultaId('SELECT MAX(id_fecha) FROM fechares');

        //Ingresamos los datos de cliente de nacimiento en la tala clientes.
        $this->db->query('INSERT INTO reservaciones (nombre, id_fecha) VALUES ("' . $datos['nombre'] . '", "' . $idf . '")');

        //Comproamos si la consulta se realizó.
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function Read() {
        $this->db->query('SELECT reservaciones.id_fecha, reservaciones.folio, reservaciones.nombre, fechares.fechare, fechares.hora, fechares.cant_personas, reservaciones.created_at FROM (fechares, reservaciones) WHERE reservaciones.id_fecha = fechares.id_fecha AND reservaciones.status = 1');
        $resultados = $this->db->registros();
        return $resultados;
    }

    public function Update($datos) {
        //Editamos los datos pertenecientes a la tabla fechares.
        $this->db->Consulta('UPDATE fechares SET fechare = "' . $datos['fechare'] . '", hora ="' . $datos['hora'] . '", cant_personas ="' . $datos['cant_personas'] . '" WHERE id_fecha = "' . $datos['id_fecha'] . '"');

        //Editamos los datos pertenecientes a la tabla reservaciones.
        $this->db->Consulta('UPDATE reservaciones SET nombre = "' . $datos['nombre'] . '" WHERE folio = "' . $datos['folio'] . '"');

        //Comproamos si la consulta se realizó.
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function Delete($datos) {

        //Editamos los datos pertenecientes a la tabla reservaciones.
        $this->db->Consulta('UPDATE reservaciones SET status = "' . 0 . '" WHERE folio = "' . $datos['folio'] . '"');

        //Comproamos si la consulta se realizó.
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function Todos() {
        $this->db->query('SELECT reservaciones.id_fecha, reservaciones.folio, reservaciones.nombre, fechares.fechare, fechares.hora , fechares.cant_personas, reservaciones.created_at, reservaciones.status FROM (fechares, reservaciones) WHERE reservaciones.id_fecha = fechares.id_fecha');
        $resultados = $this->db->registros();
        return $resultados;
    }

    public function Habilitar($datos) {
        //Editamos los datos pertenecientes a la tabla reservaciones.
        $this->db->Consulta('UPDATE reservaciones SET status = "' . 1 . '" WHERE folio = "' . $datos['folioHabilitar'] . '"');

        //Comproamos si la consulta se realizó.
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
