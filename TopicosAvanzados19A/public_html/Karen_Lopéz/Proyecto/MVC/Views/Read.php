<?php
require_once '../core/configCR.php';
if (isset($_POST['submit'])){
	$sql="SELECT* FROM users
	WHERE username = :username";
	try{
		$statement=$conexion->prepare($sql);
		$statement->bindParam(':username', $_POST['username'],PDO::PARAM_STR);
		$statement->execute();
		$resultado=$statement->fetchAll();
	} catch(PDOException $error){
		echo $error->getMessage();
	}
}
?>
<?php require_once '../core/configCR.php'; ?>

<?php
if(isset($_POST['submit'])){
	if($resultado && $statement->rowCount()>0){ ?>
		
<h2>Resultado</h2>
 <table class="" border="1" width="80%">
	<thead>
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Email</th>
			<th>Status</th>
			<th>Fecha y hora de registro</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($resultado as $fila) { ?>
		<tr>
			<td><?php echo $fila['id']; ?></td>
			<td><?php echo $fila['username']; ?></td>
			<td><?php echo $fila['email']; ?></td>
			<td><?php echo $fila['status']; ?></td>
			<td><?php echo $fila['created_at']; ?></td>
		</tr>
	<?php } ?>
</tbody>
</table>
		<?php }else{ ?>
			<blockquote>No hay usuarios registrados con ese Username<?php echo $_POST['username']; ?></blockquote>
			<?php }
} ?>

<h2>Buscar un usuario</h2>
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
<form method="POST">
	<center>
	<label for="username">Usuario</label>
		<input type="text" name="username" id="username">
		<input type="submit" name="submit" value="Buscar">
		</center>
</form>
<input type="button" value="Volver" onclick="location='vista.php'"/>
<?php require_once 'header.php'; ?>
</body>
</body>