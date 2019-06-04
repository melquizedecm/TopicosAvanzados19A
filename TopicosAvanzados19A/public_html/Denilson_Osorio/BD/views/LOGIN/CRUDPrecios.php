<?php
session_start();
if(!isset($_SESSION['user'])){
  header("location: Login.php");
}
require_once '../../core/Config.php';

////CONECTARME A LA BASE DE DATOS
$config = new Config();
$conexion = $config->conectar();
////consultas
$sql="SELECT comida.Nombre, comida.ID_comida,comida.status FROM comida";
$tablacomida = $conexion->query($sql);

$sqlcomidas="SELECT comida.Nombre, comida.ID_comida,comida.status FROM comida";
$tablacomidas = $conexion->query($sqlcomidas);

$sqlprecio="SELECT precio.Precio, precio.ID_p,precio.status FROM precio";
$tablaprecio=$conexion->query($sqlprecio);

$sqlprecios="SELECT precio.Precio, precio.ID_p,precio.status FROM precio";
$tablaprecios=$conexion->query($sqlprecios);

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

?>
<!DOCTYPE html>
<html lang="es">
  <head>
<title>Editar Precios</title>
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
    <meta charset="utf-8">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        function Agregar() {
            document.getElementById("form3").style.display = "inline";
        }.
        ////no sirve el editar :'c
        function editar(form) {
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
        }
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
  </head>
  <body>

    <div class="content">
      <div class="limiter">
    		<div class="container-table100">
    			<div class="wrap-table100">
    				<div class="table100">
    					<table>
    						<thead>
    							<tr class="table100-head">
            <th colspan="3" ><center>Precios</center></th>
          </thead>
          <td>Nuevo Precio</td>
          <td><input id="agregarprecio" type="text" value=""></td>
          <td><button type="buttton" onclick="agregarPrecio()">Agregar</button></td>
          <tbody>
            <thead>
              <tr class="table100-head">
              <th>Precios</th>
              <th>Cambiar precios</th>
              <th>Acciones</th>

            </thead>
            <tr>
              <?php while ($filaprecios=$tablaprecios->fetch_array(MYSQLI_BOTH)) {
                if ($filaprecios[2]==1) {
               ?>
              <td><?php echo $filaprecios[0]; ?></td>
              <!--editar error-->
              <td><input id="editar_precio" type="text" value="[ingresar precio nuevo]"></td>
              <td><button type="buttton" onclick="editar_precio('<?php echo $filacomidas[1]; ?>')">Editar</button><button onclick="eliminarPrecio('<?php echo $filaprecios[1]; ?>')" type="buttton">Eliminar</button></td>
            </tr>
          <?php }} ?>
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
  </body>
</html>
