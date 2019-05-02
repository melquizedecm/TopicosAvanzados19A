<?php
require_once '../templates/config.php';
if(isset($_GET["id"])){
	$sql="DELETE FROM usuarios
		  WHERE id=:id";

	try {
		$statementDelete=$conexion->prepare($sql);
		$statementDelete->bindValue(parameter:':id', $_GET["id"]);
		$statementDelete->execute();
	} catch (PDOException $error){
		echo $error->getMessage();
	}
}
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

<h2>Eliminar Usuarios</h2>
<?php if(isset($statementDelete)) echo "Usuario eliminado": ?>
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
		<td><a href="delete.php?id=<?php echo $fila["id"]; ?>">Eliminar</a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<a href="index.php">Volver</a>
<?php require_once '../templates/footer.php'; ?>


<?php
require_once '../core/Config.php';

//CONECTARME A LA BASE DE DATOS
$config=new Config();
$conexion=$config->conectar();

//recibir variables
if (isset($_POST['id'])) {
    $id= $_POST['id'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $status= $_POST['status'];
    $sql = "UPDATE users SET username='".$username."',password='".md5($password)."' WHERE id='".$id."'";
    $conexion->query($sql);
}

if (isset($_POST['action'])){
    if ($_POST['action']='eliminar'){
        $id=$_POST['id'];
        $sql="UPDATE users SET status='0' WHERE id='".$id."'";
            $conexion->query($sql);
    }
}
    //para poder ponerlo en conexion o marcha
    $conexion->query($sql);
}
?>