<?php
require_once '../templates/config.php';
$sql = "SELECT * FROM usuarios";

try{
	$statement=$conexion->prepare($sql);
	$statement->execute();
	$resultado=$statement->fetchAll();
} catch(PDOException $error){
	echo $error->getMessage();
}
?>
<?php require_once '../templates/header.php'; ?>

<h2>Editar Usuarios</h2>
<table>
	<thead>
		<tr>
			<th>id</th>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Editar</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($resultado as $fila); ?>
		<tr>
		<td><?php echo $fila['id']; ?></td>
		<td><?php echo $fila['username']; ?></td>
		<td><?php echo $fila['password']; ?></td>
		<td><?php echo $fila['email']; ?></td>
		<td><?php echo $fila['fecha']; ?></td>
		<td><a href="update-single.php?id=<?php echo $fila["id"]; ?>">Editar</a></td>
		</tr>
		<?php endforeach; ?>	
	</tbody>
</table>
<a href="index.php">Volver</a>
<?php require_once '../templates/footer.php'; ?>