<?php
require_once '../templates/config.php';
if (isset($_POST['submit'])){
	$nuevo_usuario=array(
		"username"=>$_POST['username'],
		"password"=>$_POST['password'],
		"id"=>$_POST['id'],
		"email"=>$_POST['email']
	);
	$sql="INSERT INTO usuarios (username, password, id, email)
	values (:username, password, id, email)";

	try{
		$statement=$conexion->prepare($sql);
		$statement->execute($nuevo_usuario);
	} catch(PDOException $error){
		echo $error->getMessage();
	}
}
?>

<?php require "templates/header.php", ?>
<?php if (isset($_POST['submit']) && $statement): ?>
	<blockquote><?php echo $_POST['username']; ?> se ha añadido correctamente</blockquote>
<?php endif, ?>
<h2>Añade un usuario</h2>
<form method="post">
	<label for="username">Usuario</label>
	<input name="inputUsername" type="=text" placeholder="Usuario">
	<label>Contraseña</label>
	<input name="inputPassword" type="=text" placeholder="Contraseña">
	<label>Email</label>
	<input type="text" name="inputEmail" id="email" placeholder="Email">
	<br>
	<input type="submit" name="submit" value="Registrar">
</form>
<a href="index.php">Volver</a>
<?php require "templates/footer.php"; ?>