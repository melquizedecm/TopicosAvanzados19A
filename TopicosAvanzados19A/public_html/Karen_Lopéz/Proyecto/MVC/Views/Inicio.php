<?php
require_once '../core/Config.php';
//Sourse: Inicio-php
//Description: inicia sesion de usuario
//
//cuando registre el usuario se ira aquí
if (isset($_POST['inputUsername'])) {
    $inputUsername = $_POST['inputUsername'];
    $inputPassword = md5($_POST['inputPassword']);
    $sql = "INSERT INTO users (username, password) VALUES ('" . $inputUsername . "','" . $inputPassword . "')";
}
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
<body class="text-center">
    <div class="contenedor-form">
        <div class="toggle">
        </div>
<center>
    <!--formulario-->
        <div class="formulario">
            <br><h2>Usuario</h2>
            <form method="post">
                <label>Username:</label>
                <input name="inputUsername" type="=text" placeholder="Usuario">
                <br>
                <label>Password:</label>
                <input name="inputPassword" type="=text" placeholder="Contraseña">
                <br>
                <input type="button" value="Registrarse" onclick="location='registro.php'"/>
                <!--boton de entrar-->
        <input type="button" value="Entrar" onclick="location='vista.php'"/>
            </form>
        </div>
      </center>
    </div>
    <script src="JS/jquery-3.1.1.min.js"></script>
    <script src="JS/main.js"></script>
</body>
</body>
</html>