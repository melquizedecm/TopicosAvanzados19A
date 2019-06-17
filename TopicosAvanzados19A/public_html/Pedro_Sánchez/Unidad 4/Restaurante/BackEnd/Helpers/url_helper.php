<?php

//para redireccionar pagina.
function redireccionar($pagina) {
    header('location: ' . RUTA_URL . $pagina);
}
