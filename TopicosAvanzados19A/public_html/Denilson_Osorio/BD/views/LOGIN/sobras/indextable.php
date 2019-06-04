<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
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
</head>
<body>

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
								<th class="column6">Hora</th>
								<th class="column6">Despachador</th>
								<th class="column6">Acciones</th>
							</tr>
						</thead>

						<?php while($filaventa=$tablaventa->fetch_array(MYSQLI_BOTH)){
							if ($filaventa[11]==1){ ?>

							<tr>

								<td><?php echo $filaventa[1]; ?></td>
								<td><?php echo $filaventa[2]; ?></td>
								<td><?php echo $filaventa[3]; ?></td>
								<td><?php echo $filaventa[4]; ?></td>
								<td><?php echo $filaventa[5]; ?></td>
								<td><?php echo $filaventa[6]; ?></td>
								<td><?php echo $filaventa[7]; ?></td>
								<td><?php echo $filaventa[8]." ".$filaventa[9]." ".$filaventa[10]; ?></td>
									<td><button type="buttton" onclick="eliminarVenta('<?php echo $filaventa[0]; ?>');">Eliminar</button> </td>
							</tr>
						<?php }
					} ?>
						<tbody>
								<tr>
									<td class="column1">2017-09-29 01:22</td>
									<td class="column2">200398</td>
									<td class="column3">iPhone X 64Gb Grey</td>
									<td class="column4">$999.00</td>
									<td class="column5">1</td>
									<td class="column6">$999.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-28 05:57</td>
									<td class="column2">200397</td>
									<td class="column3">Samsung S8 Black</td>
									<td class="column4">$756.00</td>
									<td class="column5">1</td>
									<td class="column6">$756.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-26 05:57</td>
									<td class="column2">200396</td>
									<td class="column3">Game Console Controller</td>
									<td class="column4">$22.00</td>
									<td class="column5">2</td>
									<td class="column6">$44.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-25 23:06</td>
									<td class="column2">200392</td>
									<td class="column3">USB 3.0 Cable</td>
									<td class="column4">$10.00</td>
									<td class="column5">3</td>
									<td class="column6">$30.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-24 05:57</td>
									<td class="column2">200391</td>
									<td class="column3">Smartwatch 4.0 LTE Wifi</td>
									<td class="column4">$199.00</td>
									<td class="column5">6</td>
									<td class="column6">$1494.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-23 05:57</td>
									<td class="column2">200390</td>
									<td class="column3">Camera C430W 4k</td>
									<td class="column4">$699.00</td>
									<td class="column5">1</td>
									<td class="column6">$699.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-22 05:57</td>
									<td class="column2">200389</td>
									<td class="column3">Macbook Pro Retina 2017</td>
									<td class="column4">$2199.00</td>
									<td class="column5">1</td>
									<td class="column6">$2199.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-21 05:57</td>
									<td class="column2">200388</td>
									<td class="column3">Game Console Controller</td>
									<td class="column4">$999.00</td>
									<td class="column5">1</td>
									<td class="column6">$999.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-19 05:57</td>
									<td class="column2">200387</td>
									<td class="column3">iPhone X 64Gb Grey</td>
									<td class="column4">$999.00</td>
									<td class="column5">1</td>
									<td class="column6">$999.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-18 05:57</td>
									<td class="column2">200386</td>
									<td class="column3">iPhone X 64Gb Grey</td>
									<td class="column4">$999.00</td>
									<td class="column5">1</td>
									<td class="column6">$999.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-22 05:57</td>
									<td class="column2">200389</td>
									<td class="column3">Macbook Pro Retina 2017</td>
									<td class="column4">$2199.00</td>
									<td class="column5">1</td>
									<td class="column6">$2199.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-21 05:57</td>
									<td class="column2">200388</td>
									<td class="column3">Game Console Controller</td>
									<td class="column4">$999.00</td>
									<td class="column5">1</td>
									<td class="column6">$999.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-19 05:57</td>
									<td class="column2">200387</td>
									<td class="column3">iPhone X 64Gb Grey</td>
									<td class="column4">$999.00</td>
									<td class="column5">1</td>
									<td class="column6">$999.00</td>
								</tr>
								<tr>
									<td class="column1">2017-09-18 05:57</td>
									<td class="column2">200386</td>
									<td class="column3">iPhone X 64Gb Grey</td>
									<td class="column4">$999.00</td>
									<td class="column5">1</td>
									<td class="column6">$999.00</td>
								</tr>

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
