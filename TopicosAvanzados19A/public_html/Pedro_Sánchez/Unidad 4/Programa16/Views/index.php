<!--
*	Source: config.php
*	Description: CRUD
*	Date: 11/04/2019
*	Autor: Sánchez Cárdenas Pedro Adrián.
*/
-->
<!DOCTYPE html>
<?php
  require_once "../Core/Config.php";
  //Consulta
  $config= new Config();
  $link=$config->conectar();
  $sql="SELECT * FROM users";

  $tablaUsers=$link->query($sql);


  //Registro de usuario
  if(isset($_POST['inputName'])){
    $name=$_POST['inputName'];
    $password=md5($_POST['inputPassword']);
    $sql="INSERT INTO users (user_name,pass) VALUES ('".$name."','".$password."')";
    $link->query($sql);
  }

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>
    <script>
      function agregar(){
        document.getElementById('form2').style.display="inline";
      }
      function ocultar(){
        document.getElementById('form2').style.display="none";
      }
      function editar(form){

        var id=form.campo0.value;
        var user=form.campo1.value;
        var pass=form.campo2.value;

        alert(user+"--"+id);
        $.post('../Controllers/user.php',
                {
                    'id': id,
                    'username': user,
                    'password': pass,
                    'action': "editar"
                },
                function(data, status){
                    alert(data + " --- " + status);
                });

      }

    </script>
    <!--Formulario para registrar un nuevo usuario-->
    <input type="button" value="Agregar Usuario" onclick="agregar()">
    <input type="button" value="Editar usuario" onclick="agregar()">
    <div id="form2" style="display:none;">
      <form method="post">
        <h3>Registrarse</h3>
        <label>Usuario</label>
        <input name="inputName" type="text" placeholder="Nombre de Usuario"><br>
        <label>Contraseña:</label>
        <input type="password" placeholder="Contraseña" name="inputPassword"><br>
        <input type="submit" value="Registrar" onclick="ocultar()">
      </form>
    </div>
    <!--Tabla para mostrar mis datos -->
    <table class="" border="1" width="70%">
      <thead>
        <th>Id</th>
        <th>User</th>
        <th>Password</th>
        <th>Status</th>
        <th>Acciones</th>
      </thead>
      <tbody>
        <?php
        //While para imprimir todos los registros
          while($filaUsers= $tablaUsers->fetch_array(MYSQLI_BOTH)){
         ?>

        <tr align="center">
          <form onsubmit="editar(this)">
            <td><input  name="campo0" type="text" readonly="readonly" value="<?php echo $filaUsers[0];?>"></td>
            <td><input name="campo1" type="text" name="usuario" value="<?php echo $filaUsers[1];?>"></td>
            <td><input name="campo2" type="text" name="contraseña" value="<?php echo $filaUsers[2];?>"></td>
            <td><input name="campo3" type="text" readonly="readonly" value="<?php echo $filaUsers[3];?>"></td>
            <td><input type="submit" value="Editar">-<input type="button" value="Eliminar"></td>
          </form>
        </tr>
        <?php
        //Cierro el ciclo while
            }
         ?>
      </tbody>
    </table>



  </body>
</html>
