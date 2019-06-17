<?php

/* Traer la url o mapiar la url ingresada en el navegador.
 *  1-controlador.
 *  2-método.
 *  3-parámetro.
 */

class Core {

    protected $controladorActual = 'Main_controller';
    protected $metodoActual = 'index';
    protected $parametros = [];

    //Constructor
    public function __construct() {
        $url = $this->getUrl();
        //print_r($this->getUrl());
        //Buscamos si el controlador existe.
        if (file_exists('../BackEnd/Controllers/' . ucwords($url[0]) . '.php')) {
            //si existe el controlador se setea como controlador por defecto
            $this->controladorActual = ucwords($url[0]);

            //unset indice.
            unset($url[0]);
        }
        //Requerimos el controlador.
        require_once '../BackEnd/Controllers/' . $this->controladorActual . '.php';
        $this->controladorActual = new $this->controladorActual;

        //checar la segunda parte de la url que seria el método.
        if (isset($url[1])) {
            if (method_exists($this->controladorActual, $url[1])) {
                //si el método existe.
                $this->metodoActual = $url[1];

                //unset indice.
                unset($url[1]);
            }
        }

        //Utilizamos para probrar el código
        //echo $this->metodoActual;

        $this->parametros = $url ? array_values($url) : [];

        //llamar cllback con parametros array.
        call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);
    }

    public function getUrl() {
        //echo $_GET['url'];

        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}
