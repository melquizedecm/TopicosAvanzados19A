<?php
session_start();
if(!isset($_SESSION['user'])){
  header("location: Login.php");
}
require_once '../../core/Config.php';

////CONECTARME A LA BASE DE DATOS
$config = new Config();
$conexion = $config->conectar();
////Consultas para llamar a los datos que se pusieron en la venta
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


////Realizar una consulta

////Ejecutar una consulta y obtener la tabla

////Obtener la primera fila de la tabla
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Editar Ventas</title>
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

<script>
////funcion para agregar la venta
    function Agregar() {
        document.getElementById("form3").style.display = "inline";
    }
//// funcion editar no funciona esta wea >:v
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
<!-- creacion de la tabla-->
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Cliente</th>
								<th class="column2">Comida</th>
								<th class="column3">Precio</th>
								<th class="column4">Cantidad</th>
								<th class="column5">Importe</th>
								<th class="column6">Fecha</th>
								<th class="column7">Hora</th>
								<th class="column8">Despachador</th>
								<th class="column9">Accion 1</th>
                <th class="column10">Accion 2</th>
							</tr>
						</thead>

						<?php while($filaventa=$tablaventa->fetch_array(MYSQLI_BOTH)){
							if ($filaventa[11]==1){ ?>

							<tr>
                <!-- llamar a las variables-->
								<td><?php echo $filaventa[1]; ?></td>
								<td><?php echo $filaventa[2]; ?></td>
								<td><?php echo $filaventa[3]; ?></td>
								<td><?php echo $filaventa[4]; ?></td>
								<td><?php echo $filaventa[5]; ?></td>
								<td><?php echo $filaventa[6]; ?></td>
								<td><?php echo $filaventa[7]; ?></td>
								<td><?php echo $filaventa[8]." ".$filaventa[9]." ".$filaventa[10]; ?></td>
								<td><button type="buttton" onclick="editarComida('<?php echo $filacomidas[1]; ?>')">Editar</button></td>
                <td><button type="buttton" onclick="eliminarVenta('<?php echo $filaventa[0]; ?>');">Eliminar</button></td>
							</tr>
						<?php }
					} ?>
						<tbody>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/maintable.js"></script>

</body>
</html>
