<?php
require_once '../core/configCR.php';
$sql = "SELECT * FROM users";
try{
	$statement=$conexion->prepare($sql);
	$statement->execute();
	$resultado=$statement->fetchAll();
} catch(PDOException $error){
	echo $error->getMessage();
}
?>

<?php require_once 'header.php'; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Papeleria y tienda "Hanabi"</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/estilos.css">
    <body style="background-image:url('../img/dobla-papeles.jpg'); -webkit-background-size: cover;">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
            function editar(form) {
                //recepcion de variables;
                var id = form.campo0.value;
                var username = form.campo1.value;
                var password = form.campo2.value;
                var email= form.campo3.value;
                var status = form.campo4.value;

                alert(username + " -- " + password + " -- " + email);
                ///llamar a la controlador de usuarios/////
                $.post('../controllers/users.php',
                        {
                            'id': id,
                            'username': username,
                            'password': password,
                            'email' : email,
                            'action': "editar"
                        },
                        function(data, status){
                            alert(data + " --- " + status);
                        });
                return false;
            }

            function eliminar(id) {
                alert(id);
                $.post('../controllers/users.php',
                        {
                            'id': id,
                            'action': 'eliminar'
                        });
                return false;
            }
        </script>
    </head>
    <body>
        <div class="content">
            <table class="" border="1" width="80%">
                <center>
                <thead>
                <th>Id</th>
                <th>Usuario</th>
                <th>Password</th>
                <th>Email</th>
                <th>Status</th>
                <th>Acciones</th>
                </thead>
                <tbody>
            </center>

                   <?php foreach ($resultado as $fila) { ?>
                        <tr>
                    <form onsubmit="editar(this);
                            return false;" method="post">
                        <td> <input type="text" name="campo0" value="<?php echo $fila[0]; ?>"></td>
                        <td> <input type="text" name="campo1" value="<?php echo $fila[1]; ?>"></td>
                        <td> <input type="text" name="campo2" value="<?php echo $fila[2]; ?>"></td>
                        <td> <input type="text" name="campo4" value="<?php echo $fila[3]; ?>"></td>
                        <td> <input type="text" name="campo3" value="<?php echo $fila[6]; ?>"></td>
                        <td><button type="submit">Editar</button> </td>
                        <td><a href="" onclick="eliminar('<?php echo $fila[0]; ?>');">eliminar</href></td>
                    </form>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <center>
                <input type="button" value="Regresar" onclick="location='vista.php'"/>
                </center>
        </div>
    <script src="JS/jquery-3.1.1.min.js"></script>
    <script src="JS/main.js"></script>
</body>
</body>
</head>
</html>