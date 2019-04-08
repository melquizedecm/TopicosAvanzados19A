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
<html>
<head>
    <meta charset="UTF-8">
    <title>Papeleria y tienda "Hanabi"</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/estilos.css">
    <body style="background-color: #00D3BC;">
</head>
<body>
    <div class="contenedor-form">
        <div class="toggle">
        </div>
<center>
    <div id="form2">
            <h3>Ingreso de Usuario</h3>
            <br>
            <!--significa que cera de forma oculta-->
            <form method="post">
                     <!--ingresar los datos del usuario para su registro-->
    <!--botones para su registro-->
                <label>Username:</label>
                <input name="inputUsername" type="=text" placeholder="Ingresa tú usuario">
                <br>
                <label>Password:</label>
                <input name="inputPassword" type="=text" placeholder="ingresa tú password">
                <br>
                <input type="submit" value="Registrar">
				<button type="submit"><a href="vista.php">Entrar</a></button>
            </form>
        </div>
</div>
</center>

    </div>
    <script src="JS/jquery-3.1.1.min.js"></script>
    <script src="JS/main.js"></script>
</body>
</html>