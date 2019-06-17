<?php

//Esta es mi clase principal.
class Main_controller extends Controlador {

    //Constructor de la clase.
    public function __construct() {
        
    }

    //Método que se carga por defecto.
    public function index() {
        $this->vista('Paginas/index');
    }

}
