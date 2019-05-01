<?php
require_once '../core/Config.php';
//
//Sourse: user.php
//Author: Karen López
//Date: 11/04/19
//Description: CRUD que permite gestionar los datos del usuario
//

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


<html lang="es">
    <head>
        <script>
            function agregar(){
                document.getElementById("form2").style.display="inline";
            }
            function editar(form){
                //recepcion de variable
                alert(form.campo.value());
                var id=form.campo0.value();
                var username=form.campo1.value();
                var passaword=form.campo2.value();
                var status=form.campo3.value();
                $.post('../controllers/user.php',
                {   'id': id,
                    'username': username,
                    'password': passaword,
                    'status': status
                });
                return false;
            }
        </script>
    </head>
    
    <body>
        <div id="form2" style="display: none;">
            <h3>Ingreso de Usuario</h3>
            <br>
            <!--significa que cera de forma oculta-->
            <form method="post">
                <label>Username:</label>
                <input name="inputUsername" type="=text" placeholder="Ingresa aqui tu nombre de usuario">
                <br>
                <label>Password:</label>
                <input name="inputPassword" type="=text" placeholder="ingresa aqui tu password">
                <br>
                <input type="submit" value="Registrar">
            </form>
        </div>   
    </body>
</html>
        <div class="content">
            <button value="agregar usuario" onclick="agregar();">Agregar Usuario</button>
            <table class="" border="1" width="100%">
                <thead>
                <th>ID</th>
                <th>Usuario</th>
                <th>Password</th>
                <th>Status</th>
                <th>Acciones</th>
                </thead>
                <tbody>
                    <?php
                    while ($fileUsers = $tablaUsers->fetch_array(MYSQLI_BOTH)) {
                        ?>
                        <tr>
                <form onsubmit="editar(this);">
                    <td><input type="text" name="campo0" value="<?php echo $fileUsers[0]; ?>"></td>
                        <td><input type="text" name="campo1" value="<?php echo $fileUsers[1]; ?>"></td>
                        <td><input type="text" name="campo2" value="<?php echo $fileUsers[2]; ?>"></td>
                        <td><input type="text" name="campo3" value="<?php echo $fileUsers[5]; ?>"></td>
                        <td><input type="submit" value="editar"></td>
                    </form>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>