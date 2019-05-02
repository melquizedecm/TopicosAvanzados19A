<?php
require "config.php";
if (isset($_POST['submit'])){
	$sql="SELECT*
	FROM usuarios
	WHERE username=username";
	try{
		$statement=$conexion->prepare($sql);
		$statement->bindParam(parameter:*:username, &variable:$_POST['username'], data_type PDO::PARAM_STR);
		$statement->execute();
		$resultado=$statement->fetchAll();
	} catch(PDOExecption $error){
		echo $error->getMessage();
	}
}
?>
<?php require "templates/header.php"; ?>

<?php
if(isset($_POST['submit'])){
	if($resultado && $statement->rowCount()>0){ ?>
<h2>Resultado</h2>
<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Email</th>
			<th>Fecha de registro</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($resultado as $fila); ?>
		<tr>
			<td><?php echo $fila['id']; ?></td>
			<td><?php echo $fila['username']; ?></td>
			<td><?php echo $fila['fecha']; ?></td>
		</tr>
	<?php endforeach; ?>
</tbody>
</table>
		<?php }else{ ?>
			<blockquote>No hay usuarios registrados con ese Username<?php echo $_POST['username']; ?></blockquote>
			<?php }
} ?>

<h2>Buscar un usuario</h2>

<form>
	<label for="username">Usuario</label>
		<input type="text" name="username" id="username">
		<input type="submit" name="submit" value="Buscar">
</form>

<a href="index.php">Volver</a>
<?php require "templates/footer.php"; ?>