<?php
require_once '../core/Config.php';
//CONECTARME A LA BASE DE DATOS
$config=new Config();
$conexion=$config->conectar();

//con esta generamos una consulta
$sql = "SELECT * FROM users";
//se genera la consulta por medio de la base de datos, la consulta me la dara usuarios
//ejecutar una consulta y obtener la tabla
$tablaUsers = $conexion->query($sql);
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
    <body style="background-image:url('../img/dobla-papeles.jpg'); -webkit-background-size: cover;">
        <script src="../lib/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script>

            function agregar() {
                document.getElementById("form2").style.display = "inline";
            }

            function editar(form) {
                //recepcion de variables;
                var id = form.campo0.value;
                var username = form.campo1.value;
                var password = form.campo2.value;
                var status = form.campo3.value;

                alert(username + " -- " + password);
                ///llamar a la controlador de usuarios/////
                $.post('../Controllers/user.php',
                        {
                            'id': id,
                            'username': username,
                            'password': password,
                            'action': "editar"
                        },
                        function(data, status){
                            alert(data + " --- " + status);
                        });
                return false;   
            }

            function eliminar(id) {
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
        <div id="form2" style="display:none;">            
            <h3>Ingreso de Usuarios</h3>
            <br>
            <form method="post">
                <label>username:</label>
                <input type="text" name="inputUsername" placeholder="Ingresa aqui tu nombre de usuario">
                <br>
                <label>password</label>
                <input type="text" name="inputPassword" placeholder="Ingresat tu password">
                <br>
                <input type="submit" value="Registrar">
            </form>
        </div>
        <div class="content">
            <button value="agregar Usuario" onclick="agregar();">Agregar Usuario</button>
            <table class="" border="1" width="80%">

                <thead>
                <th>Id</th>
                <th>Usuario</th>
                <th>Password</th>
                <th>Status</th>
                <th>Acciones</th>
                </thead>
                <tbody>
                    <?php
                    while ($filaUsers = $tablaUsers->fetch_array(MYSQLI_BOTH)) {
                        ?>
                        <tr>
                    <form onsubmit="editar(this);
                            return false;" method="post">
                        <td> <input type="text" name="campo0" value="<?php echo $filaUsers[0]; ?>">   </td>
                        <td> <input type="text" name="campo1" value="<?php echo $filaUsers[1]; ?>">  </td>
                        <td> <input type="text" name="campo2" value="<?php echo $filaUsers[2]; ?>"></td>
                        <td> <input type="text" name="campo3" value="<?php echo $filaUsers[5]; ?>"></td>
                        <td><button type="submit">Editar</button> </td>
                        <td><button onclick="eliminar('<?php echo $filaUsers[0]; ?>');">eliminar</button></td>
                    </form>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

        </div>


    </div>
</div>
</body>
</html>