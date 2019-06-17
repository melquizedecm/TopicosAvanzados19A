<?php

//Cargamos las liibreria de configuración.
require_once 'Config/Configurar.php';
require_once 'Helpers/url_helper.php';
//Autoload php.
spl_autoload_register(function($nombreClase) {
    require_once 'Librerias/' . $nombreClase . '.php';
});
