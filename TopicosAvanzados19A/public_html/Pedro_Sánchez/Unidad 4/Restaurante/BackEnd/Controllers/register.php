<?php

require_once ('../Config/Configurar.php'); //Funciona la tabla

$email = $_POST ['inputEmail'];
$form_pass = $_POST ['inputPassword'];
$user = $_POST ['inputUser'];

$conexion = new mysqli(BD_HOST, BD_USUARIO, BD_PASSWORD, BD);

if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
}

$buscarUsuario = "SELECT * FROM datosregistro
 WHERE nickname = '" . $user . "'";

$result = $conexion->query($buscarUsuario);

$count = mysqli_num_rows($result);

if ($count == 1) {
    echo "Ya existe usuario";
} else {

    $query = "INSERT INTO datosregistro (email, nickname, password,nivel) VALUES ('" . $email . "','" . $user . "', '$form_pass',0)";

    if ($conexion->query($query) === TRUE) {

        header("location: ../../FrontEnd/Acceso/pages-mail-confirm.html");
    } else {
        echo "Error." . $query . "<br>" . $conexion->error;
    }
}
mysqli_close($conexion);
?>
