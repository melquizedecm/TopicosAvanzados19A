<?php

class Tablareservaciones_controller extends Controlador {

    private $reservaciones;

    public function __construct() {
        $this->reservarModel = $this->modelo('Reservar');
    }

    //Esta funcion hace mi read de mi consulta a mi tabla clientes.
    public function index() {
        //Obtenemos los datos.
        $this->Read();

        $datos = [
            'reservaciones' => $this->reservaciones
        ];

        $this->vista('inc/Header');
        $this->vista('Paginas/Tabla_reservaciones', $datos);
        $this->vista('inc/Footer');
    }

    //Esta funcion hace mi Create de mi tabla clientes.
    public function Create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'nombre' => trim($_POST['nombre']),
                'fechare' => trim($_POST['fechare']),
                'hora' => trim($_POST['hora']),
                'cant_personas' => trim($_POST['cant_personas'])
            ];
            if ($this->reservarModel->Create($datos)) {
                redireccionar('/Tablareservaciones_controller');
            } else {
                die('Vaya alparecer algo salio mal');
            }
        } else {
            $datos = [
                'nombre' => '',
                'fechare' => '',
                'hora' => '',
                'cant_personas' => ''
            ];
            $this->vista('Paginas/Tabla_reservaciones', $datos);
        }
    }

    public function Read() {
        //Obtenemos los datos.
        $this->reservaciones = $this->reservarModel->Read();
    }

    //Esta funcion hace mi update de mi tabla clientes.
    public function Update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dato = [
                'id_fecha' => trim($_POST['id_fechaedith']),
                'folio' => trim($_POST['folioedith']),
                'fechare' => trim($_POST['fechareedith']),
                'nombre' => trim($_POST['nombreedith']),
                'hora' => trim($_POST['horaedith']),
                'cant_personas' => trim($_POST['cant_personasedith'])
            ];

            if ($this->reservarModel->Update($dato)) {
                redireccionar('/Tablareservaciones_controller');
            } else {
                die('Vaya al parecer algo salio mal');
            }
        } else {
            //optenemos informacion del usuario con su $id.
            $dato = [
                'nombre' => '',
                'fechare' => '',
                'hora' => '',
                'cant_personas' => ''
            ];
            $this->vista('Paginas/Tabla_reservaciones', $dato);
        }
    }

    public function Delete() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'folio' => trim($_POST['foliodelete']),
                'nombre' => trim($_POST['nombredelete']),
                'fechare' => trim($_POST['fecharedelete']),
                'hora' => trim($_POST['horadelete']),
                'cant_personas' => trim($_POST['cant_personasdelete'])
            ];
            if ($this->reservarModel->Delete($datos)) {
                redireccionar('/Tablareservaciones_controller');
            } else {
                die('Vaya al parecer algo salio mal');
            }
        } else {
            //optenemos informacion del usuario con su $id.
            $datos = [
                'folio' => '',
                'nombre' => '',
                'fechare' => '',
                'hora' => '',
                'cant_personas' => ''
            ];
            $this->vista('Paginas/Tabla_reservaciones', $datos);
        }
    }

    public function Todos() {
        $this->reservaciones = $this->reservarModel->Todos();
        $datos = [
            'reservaciones' => $this->reservaciones
        ];

        $this->vista('inc/Header');
        $this->vista('Paginas/Tabla_reservaciones_Eliminados', $datos);
        $this->vista('inc/Footer');
    }

    public function Habilitar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'folioHabilitar' => trim($_POST['FolioHabi']),
            ];
            if ($this->reservarModel->Habilitar($datos)) {
                redireccionar('/Tablareservaciones_controller/Todos');
            } else {
                die('Vaya al parecer algo salio mal');
            }
        } else {
            //optenemos informacion del usuario con su $id.
            $datos = [
                'folio' => ''
            ];
            $this->vista('Paginas/Tabla_reservaciones_Eliminados', $datos);
        }
    }
}
