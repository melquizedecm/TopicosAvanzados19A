<?php

//Clase controlador principal.
//Se encarga de poder cargar los modelos y las vistas.
class Controlador {

    //Cargar modelo.
    public function modelo($modelo) {
        //Carga modelo.
        if (file_exists('../BackEnd/Models/' . $modelo . '.php')) {
            require_once '../BackEnd/Models/' . $modelo . '.php';
            //Inicializar el modelo.
            return new $modelo();
        } else {
            //si el Archivo no existe.
            die('El Modelo no existe o no pudo ser encontrado');
        }
    }

    //Cargar vista.
    public function vista($vista, $datos = []) {
        //Checamos si la vista existe.
        if (file_exists('../BackEnd/Views/' . $vista . '.php')) {
            require_once '../BackEnd/Views/' . $vista . '.php';
        } else {
            //si el Archivo no existe.
            die('La Vista no existe o no pudo ser encontrado');
        }
    }

}
