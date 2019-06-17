<?php

class User {

    private $db;

    public function __construct() {
        $this->db = new Base;
    }

    public function Create($datos) {
        //Ingresamos los datos de fecha de nacimiento en la tala nacimientos.
        $this->db->Consulta('INSERT INTO nacimientos (fecha) VALUES ("' . $datos['fecha'] . '")');
        //Ingresamos los datos de login en la tabla de datosregistro
        $this->db->Consulta('INSERT INTO datosregistro (email, nickname, password) VALUES ("' . $datos['email'] . '", "' . $datos['nickname'] . '", "' . $datos['password'] . '")');


        //Obtenemos el id ultimo agregado de la tabla nacimientos .
        $resultregistro = $this->db->ConsultaId('SELECT MAX(id_nic) FROM datosregistro');
        print_r($resultregistro);
        //Obtenemos el id ultimo agregado de la tabla nacimientos .
        $resultNacimientos = $this->db->ConsultaId('SELECT MAX(id_fec) FROM nacimientos');
        print_r($resultNacimientos);

        //Ingresamos los datos de cliente de nacimiento en la tala clientes.
        $this->db->query('INSERT INTO clientes (nombre, ape_p, ape_m, id_fec, id_nic, folio, id_tra) VALUES("' . $datos['nombre'] . '", "' . $datos['ape_p'] . '", "' . $datos['ape_m'] . '", "' . $resultNacimientos . '", "' . $resultregistro . '", 1, 1)');

        //Comproamos si la consulta se realizó.
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function Read() {
        $this->db->query('SELECT clientes.rfc, clientes.nombre, clientes.ape_p, clientes.ape_m, clientes.id_fec, datosregistro.email, clientes.id_nic, nacimientos.fecha, datosregistro.nickname, datosregistro.password, reservaciones.folio, trabajadores.nombreTra FROM (clientes, nacimientos, datosregistro, reservaciones, trabajadores) WHERE clientes.id_fec = nacimientos.id_fec AND clientes.id_nic = datosregistro.id_nic AND clientes.folio = reservaciones.folio AND clientes.id_tra = trabajadores.id_tra AND clientes.status = 1');
        $resultados = $this->db->registros();
        return $resultados;
    }

    public function Update($datos) {
        //Editamos los datos pertenecientes a la tabla nacimientos.
        $this->db->Consulta('UPDATE nacimientos SET fecha = "' . $datos['fecha'] . '" WHERE id_fec = "' . $datos['id_fec'] . '"');

        //Editamos los datos pertenecientes a la tala datosregistro.
        $this->db->Consulta('UPDATE datosregistro SET email = "' . $datos['email'] . '", nickname = "' . $datos['nickname'] . '", password ="' . $datos['password'] . '" WHERE id_nic = "' . $datos['id_nic'] . '"');

        //Editamos los datos pertenecientes a la tabla clientes.
        $this->db->Consulta('UPDATE clientes SET nombre = "' . $datos['nombre'] . '", ape_p ="' . $datos['ape_p'] . '", ape_m ="' . $datos['ape_m'] . '" WHERE rfc = "' . $datos['rfc'] . '"');

        //Comproamos si la consulta se realizó.
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function Delete($datos) {
        //Eliminamos temporalmente los datos pertenecientes a la tabla nacimientos.
        $this->db->Consulta('UPDATE nacimientos SET status = "' . 0 . '" WHERE id_fec = "' . $datos['id_fec'] . '"');

        //Eliminamos temporalmente los datos pertenecientes a la tala datosregistro.
        $this->db->Consulta('UPDATE datosregistro SET status = "' . 0 . '" WHERE id_nic = "' . $datos['id_nic'] . '"');

        //Eliminamos temporalmente los datos pertenecientes a la tabla clientes.
        $this->db->Consulta('UPDATE clientes SET status = "' . 0 . '" WHERE rfc = "' . $datos['rfc'] . '"');

        //Comproamos si la consulta se realizó.
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function Todos() {
        $this->db->query('SELECT clientes.rfc, clientes.nombre, clientes.ape_p, clientes.ape_m, clientes.id_fec, datosregistro.email, clientes.id_nic, nacimientos.fecha, datosregistro.nickname, datosregistro.password, reservaciones.folio, trabajadores.nombreTra, clientes.status FROM (clientes, nacimientos, datosregistro, reservaciones, trabajadores) WHERE clientes.id_fec = nacimientos.id_fec AND clientes.id_nic = datosregistro.id_nic AND clientes.folio = reservaciones.folio AND clientes.id_tra = trabajadores.id_tra');
        $resultados = $this->db->registros();
        return $resultados;
    }

    public function Habilitar($datos) {
        //Habilitamos los datos pertenecientes a la tabla nacimientos.
        $this->db->Consulta('UPDATE nacimientos SET status = "' . 1 . '" WHERE id_fec = "' . $datos['id_fecHabilitar'] . '"');

        //Habilitamos los datos pertenecientes a la tala datosregistro.
        $this->db->Consulta('UPDATE datosregistro SET status = "' . 1 . '" WHERE id_nic = "' . $datos['id_nicHabilitar'] . '"');

        //Habilitamos los datos pertenecientes a la tabla clientes.
        $this->db->Consulta('UPDATE clientes SET status = "' . 1 . '" WHERE rfc = "' . $datos['rfcHabilitar'] . '"');

        //Comproamos si la consulta se realizó.
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
