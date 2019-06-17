    
<?php
require_once ('../Config/Configurar.php'); //Funciona la tabla

/*
 * 1. RECIBIR VARIABLES 2. VALIDAR LOS DATOS 3. CONSULTAR A LA BASE DE DATOS 4.
 * RETORNAR EL ACCESO O CANCELAR
 */

// 1. RECIBIR VARIABLES
$user = $_POST ['inputUser'];
$password = $_POST ['inputPassword'];

// 2. VALIDAR LOS DATOS

// 3. CONSULTAR

$conexion = new mysqli (BD_HOST, BD_USUARIO, BD_PASSWORD,  BD );

if ($conexion->connect_error) {
	die ( "La conexion falló: " . $conexion->connect_error );
}

$sql = "SELECT * FROM datosregistro WHERE nickname='" . $user . "' AND password='" . $password . "' AND nivel IS NOT NULL";

$response = $conexion->query ( $sql );
if ($response->num_rows > 0) {
}

$row = $response->fetch_array ( MYSQLI_ASSOC );

// 4. RETORNAR EL ACCESO O CANCELAR
if ($password == $row ['password'] && $row ['nivel'] == 1) {
	header ( "location: ../../FrontEnd/Acceso/dashboardadm.html" );
} else if ($password == $row ['password']&& $row ['nivel'] == 0) {
	header ( "location: ../../FrontEnd/Acceso/dashboarduser.html" );
} else {
	echo ("no hubo acceso");
	// header("location: ../Acceso/pages-login.html");
}

	