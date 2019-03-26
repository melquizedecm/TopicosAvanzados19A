<?php
require_once "../../../../../../../../../../xampp/htdocs/test/core/config.php";
$link=conectar();
$sql="SELECT * FROM tabla_1";
//ejecuta la consulta
$tabla=$link->mysql->query($sql);
$file=$tabla->fetch_array(MYSQLI_BOTH);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <h1>
	Bienvenido <?php echo $fila [0]; ?>
	</h1>
    </body>
</html>
