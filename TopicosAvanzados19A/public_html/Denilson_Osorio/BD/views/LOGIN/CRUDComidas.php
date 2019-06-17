<?php
session_start();
if(!isset($_SESSION['user'])){
  header("location: Login.php");
}
require_once '../../core/Config.php';

////CONECTARME A LA BASE DE DATOS
$config = new Config();
$conexion = $config->conectar();

$sql="SELECT comida.Nombre, comida.ID_comida,comida.status FROM comida";
$tablacomida = $conexion->query($sql);

$sqlcomidas="SELECT comida.Nombre, comida.ID_comida,comida.status FROM comida";
$tablacomidas = $conexion->query($sqlcomidas);

/*$sqlprecio="SELECT precio.Precio, precio.ID_p,precio.status FROM precio";
$tablaprecio=$conexion->query($sqlprecio);

$sqlprecios="SELECT precio.Precio, precio.ID_p,precio.status FROM precio";
$tablaprecios=$conexion->query($sqlprecios);*/

$usuario=$_SESSION['user'];

/*$sqlusuario="SELECT login.ID_login FROM login WHERE Nombre='$usuario' AND Contrasena='$contrasena'";
$tablausuario=$conexion->query($sqlusuario);
while ($filausuarios=$tablausuario->fetch_array(MYSQLI_BOTH)) {
  $idusuario=$filausuarios[0];
}
$sqlatiende="SELECT usuarios.ID_usuario, usuarios.Nombre, usuarios.Apellido_P,usuarios.Apellido_M FROM usuarios WHERE ID_login='$idusuario'";
$tablaatiende=$conexion->query($sqlatiende);
while ($filaatiende=$tablaatiende->fetch_array(MYSQLI_BOTH)) {
  $id_usuario=$filaatiende[0];
    $nombre= $filaatiende[1];
    $apellido_p= $filaatiende[2];
      $apellido_m= $filaatiende[3];
}*/

$sqlventas="SELECT venta.ID_venta, cliente.nombre, comida.Nombre, precio.Precio,venta.Cantidad, venta.Importe,venta.Fecha,venta.Hora, usuarios.Nombre, usuarios.Apellido_P,usuarios.Apellido_M,venta.status FROM cliente,venta,comida,precio,usuarios WHERE cliente.ID_Cliente=venta.ID_Cliente AND usuarios.ID_usuario=venta.ID_usuario AND comida.ID_comida=venta.ID_comida AND precio.ID_p=venta.ID_p";
$tablaventa=$conexion->query($sqlventas);

////Realizar una consulta

////Ejecutar una consulta y obtener la tabla

////Obtener la primera fila de la tabla
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/maintable.css">
    <!--===============================================================================================-->

    <script type="text/javascript" src="js/Ventas1.js">

    </script>
    <script type="text/javascript" src="js/Ventas.js">

    </script>
    <script type="text/javascript" src="js/Comidas.js">

    </script>
    <script type="text/javascript" src="js/Precio.js">

    </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        function Agregar() {
            document.getElementById("form3").style.display = "inline";
        }
        /*function editar(form) {
            //recepcion de variables;
            var id= form.campo0.value;
            var Nombre = form.campo1.value;
            var Fecha = form.campo2.value;
            var Hora = form.campo3.value;
            alert(cliente);
            ///llamar a la controlador de usuarios/////
            $.post('../controllers/cliente.php',
                    {
                        'id': id,
                        'Nombre': cliente,
                        'Fecha': Fecha,
                        'Hora': Hora,
                        'action': "editar"
                    },
                    function(id,cleinte){
                      alert(cliente);
                    }
                  );
            return false;
        }*/
        function eliminar(id) {
            $.post('../controllers/users.php',
                    {
                        'id': id,
                        'Nombre': Nombre,
                        'Fecha': Fecha,
                        'Hora': Hora,
                        'action': 'eliminar'
                    });
            return false;
        }
    </script>
    <meta charset="utf-8">
    <title>Editar Comidas</title>
  </head>
  <body>
    <div class="content">
      <div class="limiter">
    		<div class="container-table100">
    			<div class="wrap-table100">
    				<div class="table100">
              <!--tabla-->
    					<table>
    						<thead>
    							<tr class="table100-head">
            <th colspan="5" ><center>Comidas</center></th>
          </thead>
          <td>Nueva Comida</td>
          <td><input id="agregarcomida" type="text" value=""></td>
          <td><button type="buttton" onclick="agregarComida()">Agregar</button></td>
          <tbody>
            <thead>

    <!--EDICION DE COMIDAS-->
              <tr class="table100-head">
        <th colspan="5" ><center>Editar comidas</center></th>
      </thead>

      <thead>
        <tr class="table100-head">
        <th >ID de la comida a cambiar</th>
        <th>nombre de la comida a cambiar</th>
        <th>Accion</th>
      </thead>
      <!--controlador-->
      <form method="post" action="../../controllers/comida.php">
        <input type="hidden" name="editar" value="editar">

        <td><input type="text" name="inputId"></td>
        <td><input type="text" name="InputComida"></td>
        <td><input type="submit" name="" value="editar"></td>
      </form>
            <thead>
              <tr class="table100-head">
              <th>ID's Comidas</th>
              <th>Comidas</th>
              <th>Cambiar comida</th>
              <th>Accion 1</th>

            </thead>
            <tr>
              <!--php para agregar comida-->
              <?php while ($filacomidas=$tablacomidas->fetch_array(MYSQLI_BOTH)) {
               if ($filacomidas[2]==1) {
               ?>
              <td><?php echo $filacomidas[1]; ?></td>
              <td><?php echo $filacomidas[0]; ?></td>
              <td><input id="editarcomida" type="text" value=""></td>

              <td><button onclick="eliminarComida('<?php echo $filacomidas[1]; ?>')" type="buttton">Eliminar</button></td>
            </tr>
         <?php }
       } ?>
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    </div>



  </body>
</html>
