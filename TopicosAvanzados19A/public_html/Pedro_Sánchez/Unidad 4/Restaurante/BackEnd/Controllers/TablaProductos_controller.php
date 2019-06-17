<?php

class TablaProductos_controller extends Controlador {

    private $producto;

    public function __construct() {
        $this->UserModel = $this->modelo('Producto');
    }

    //Esta funcion hace mi read de mi consulta a mi tabla clientes.
    public function index() {
        //Obtenemos los datos.
        $this->Read();

        $datos = [
            'productos' => $this->producto
        ];

        $this->vista('inc/Header');
        $this->vista('Paginas/Tabla_productos', $datos);
        $this->vista('inc/Footer');
    }

    //Esta funcion hace mi Create de mi tabla clientes.
    public function Create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'clasificacion' => trim($_POST['clasificacion']),
                'precio' => trim($_POST['precio']),
                'comida' => trim($_POST['comida'])       
            ];
            if ($this->UserModel->Create($datos)) {
                redireccionar('/TablaUsers_controller');
            } else {
                die('Vaya alparecer algo salio mal');
            }
        } else {
            $datos = [
                'rfc' => '',
                'nombre' => '',
                'ape_p' => '',
                'ape_m' => '',
                'fecha' => '',
                'email' => '',
                'nickname' => '',
                'password' => ''
            ];
            $this->vista('Paginas/Tabla_Users', $datos);
        }
    }

    public function Read() {
        //Obtenemos los datos.
        $this->producto = $this->UserModel->Read();
    }

    //Esta funcion hace mi update de mi tabla clientes.
    public function Update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $dato = [
                'id_fec' => trim($_POST['fecedith']),
                'id_nic' => trim($_POST['nicedith']),
                'rfc' => trim($_POST['rfcedith']),
                'nombre' => trim($_POST['nombreedith']),
                'ape_p' => trim($_POST['ape_pedith']),
                'ape_m' => trim($_POST['ape_medith']),
                'fecha' => trim($_POST['fechaedith']),
                'email' => trim($_POST['emailedith']),
                'nickname' => trim($_POST['nicknameedith']),
                'password' => trim($_POST['passwordedith'])
            ];

            if ($this->UserModel->Update($dato)) {
                redireccionar('/TablaUsers_controller');
            } else {
                die('Vaya al parecer algo salio mal');
            }
        } else {
            //optenemos informacion del usuario con su $id.
            $dato = [
                'id_fec' => '',
                'id_nic' => '',
                'rfc' => '',
                'nombre' => '',
                'ape_p' => '',
                'ape_m' => '',
                'fecha' => '',
                'email' => '',
                'nickname' => '',
                'password' => ''
            ];
            $this->vista('Paginas/Tabla_Users', $dato);
        }
    }

    public function Delete() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'id_fec' => trim($_POST['fecdelete']),
                'id_nic' => trim($_POST['nicdelete']),
                'rfc' => trim($_POST['rfcdelete'])
            ];
            if ($this->UserModel->Delete($datos)) {
                redireccionar('/TablaUsers_controller');
            } else {
                die('Vaya al parecer algo salio mal');
            }
        } else {
            //optenemos informacion del usuario con su $id.
            $datos = [
                'id_fec' => '',
                'id_nic' => '',
                'rfc' => ''
            ];
            $this->vista('Paginas/Tabla_Users', $datos);
        }
    }

    public function Todos() {
        $this->usuarios = $this->UserModel->Todos();
        $datos = [
            'usuarios' => $this->usuarios
        ];

        $this->vista('inc/Header');
        $this->vista('Paginas/Tabla_Users_Eliminados', $datos);
        $this->vista('inc/Footer');
    }
    
    public function Habilitar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'id_fecHabilitar' => trim($_POST['fecHabilitar']),
                'id_nicHabilitar' => trim($_POST['nicHabilitar']),
                'rfcHabilitar' => trim($_POST['rfcHabilitar'])
            ];
            if ($this->UserModel->Habilitar($datos)) {
                redireccionar('/TablaUsers_controller/Todos');
            } else {
                die('Vaya al parecer algo salio mal');
            }
        } else {
            //optenemos informacion del usuario con su $id.
            $datos = [
                'id_fec' => '',
                'id_nic' => '',
                'rfc' => ''
            ];
            $this->vista('Paginas/Tabla_Users_Eliminados', $datos);
        }
    }

}
