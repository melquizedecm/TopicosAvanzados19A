<?php
require_once '../core/configCR.php';
if (isset($_POST['submit'])){
    echo $_POST['inputUsername']."--".$_POST['inputPassword']."--".$_POST['inputEmail'];
    $nuevo_usuario=array(
        $inputUsername=$_POST['inputUsername'],
        $inputPassword=$_POST['inputPassword'],
        $inputEmail=$_POST['inputEmail']
    );
     $sql="INSERT INTO users (username, password, email) VALUES ('".$inputUsername."',
     '".$inputPassword."', '".$inputEmail."')";

    try{
        $statement=$conexion->prepare($sql);
        $statement->execute($nuevo_usuario);
    } catch(PDOException $error){
        echo $error->getMessage();
    }
}
?>

<?php require_once "header.php"; ?>
<?php if (isset($_POST['submit']) && $statement): ?>
    <blockquote><?php echo $_POST['inputUsername']; ?> se ha añadido correctamente</blockquote>
<?php endif; ?>

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
    <div id="form2">
            <h3>Ingreso de Usuario</h3>
            <br>
            <!--significa que cera de forma oculta-->
            <form method="post">
                     <!--ingresar los datos del usuario para su registro-->
                  <!--los datos se registrarán en la BD-->
                <label for="username">Username:</label>
                <input name="inputUsername" type="=text" placeholder="Usuario">
                <br>
                <label>Password:</label>
                <input name="inputPassword" type="=text" placeholder="Contraseña">
                <br>
                <label>Email:</label>
                <input type="text" name="inputEmail" id="email" placeholder="Email">
                <br>
                <input type="submit" name="submit" value="Registrar">
                <input type="button" value="Volver" onclick="location='Inicio.php'"/>
            </form>
        </div>
</div>
</center>
    </div>
    <script src="JS/jquery-3.1.1.min.js"></script>
    <script src="JS/main.js"></script>
</body>
</body>
</html>