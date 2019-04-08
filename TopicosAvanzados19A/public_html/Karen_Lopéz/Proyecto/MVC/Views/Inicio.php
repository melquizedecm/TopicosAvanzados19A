<?php
//configuracion de las variables del servidor de BD
$host = "localhost";
$user = "root";
$password = "";
$database = "proyecto";
//conceta el gestor y la base de datos
$conexion = mysqli_connect($host, $user, $password, $database);
//con esta generamos una consulta
$sql = "SELECT * FROM users";
//se genera la consulta por medio de la base de datos, la consulta me la dara usuarios
//ejecutar una consulta y obtener la tabla
$tablaUsers = $conexion->query($sql);
//Obtener la primera fila de la tabla
$fileUsers = $tablaUsers->fetch_array(MYSQLI_BOTH);
//cuando registre el usuario se ira aquí
if (isset($_POST['inputUsername'])) {
    $inputUsername = $_POST['inputUsername'];
    $inputPassword = md5($_POST['inputPassword']);
    $sql = "INSERT INTO users (username, password) VALUES ('" . $inputUsername . "','" . $inputPassword . "')";
    //para poder ponerlo en conexion o marcha
    $conexion->query($sql);
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
    <body style="background-color: #00D3BC;">
</body>
</head>
<body class="text-center">
    <div class="contenedor-form">
        <div class="toggle">
        </div>
<center>
        <div class="formulario">
            <br><h2>Usuario</h2>
            <form method="post">
                <label>Username:</label>
                <input name="inputUsername" type="=text" placeholder="Usuario">
                <br>
                <label>Password:</label>
                <input name="inputPassword" type="=text" placeholder="Contraseña">
                <br>
				<button type="submit"><a href="Registro.php">Registrarse</a></button>
				<button type="submit"><a href="vista.php">Entrar</a></button>
            </form>
        </div>
        <div class="reset-password">
      <!-- te manda a un apartado por -->
            <br><a href="Contraseña.html">¿Has olvidado tu usuario o contraseña?</a>
        </div>

      </center>
    </div>
    <script src="JS/jquery-3.1.1.min.js"></script>
    <script src="JS/main.js"></script>

</body>
</html>