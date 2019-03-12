<?php

if($_POST['usuario'] == "conchi"){

	echo "{";
	echo "\"login\": true,";
	echo "\"usuario\": {";
	echo "\"nombre\": \"Conchi\",";
	echo "\"color\": \"Rojo\"";
	echo "}";
	echo "}";

} else {
	header('x', true, 400);

	echo "{";
	echo "\"login\": false,";
	echo "\"mensaje\": \"Usuario o contraseña incorrecta\"";
	echo "}";
}

?>