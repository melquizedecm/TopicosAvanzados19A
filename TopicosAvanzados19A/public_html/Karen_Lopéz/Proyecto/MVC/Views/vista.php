<!DOCTYPE html>
<?php
require_once '../core/configCR.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Papeleria y tienda "Hanabi"</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/estilos.css">
    <body style="background-image:url('../img/dobla-papeles.jpg'); -webkit-background-size: cover;">
</head>
<h1>Bienvenido de nuevo.</h1>
<body class="text-center">
    <div class="contenedor-form">
        <div class="toggle">
        </div>
<center>
    <div id="form2">
    <!--botones para ingresar a las otras opciones-->
            <input type="button" value="Cerrar Sesión" onclick="location='Inicio.php'"/>
            <br><h2>¿Qué desea hacer hoy?</h2>
            <input type="button" value="Comprar" onclick="location='Ordenar.html'"/>
            <input type="button" value="Inventario" onclick="location='Inventario.html'"/>
            <input type="button" value="Ventas" onclick="location='Ventas.html'"/>
            <input type="button" value="Crear Usuario" onclick="location='registro.php'"/>
            <input type="button" value="Buscar Usuarios" onclick="location='Read.php'"/>
            <input type="button" value="Modificar/Eliminar Usuario" onclick="location='Update-Delete.php'"/>
            </form>
        </div>

      </center>
    </div>
    <script src="JS/jquery-3.1.1.min.js"></script>
    <script src="JS/main.js"></script>

</body>
</body>
</html>
