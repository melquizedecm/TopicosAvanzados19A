<?php
require_once '../templates/config.php';
if(isset($_GET['id'])){
	$sql = "SELECT * FROM usuarios
		WHERE id=id";
		try{
			$statement=$conexion->prepare($sql);
			$statement->bindValue(parameter: ':id', $_GET['id']);
			$statement->execute();
			$usuario=$statement->fetch(fetch_style PDO::FETCH_ASSOC);
		} catch(PDOException $error){
			echo $error->getMessage();
		}
	}else{
		echo "Se necesita un id";
		exit;
	}
	if(isset($_POST['submit'])){
		$usuario=[
			"id"->$_POST['id'],
			"username"->$_POST['username'],
			"password"->$_POST['password'],
			"email"->$_POST['email'],
			"fecha"->$_POST['fecha']
		];
		$sql="UPDATE usuarios
			  SET id=:id,
			  	username=:username,
			  	email=:email,
			  	password=:password,
			  	fecha=:fecha
			  	WHERE id=:id";

			  	try{
			  		$statement=$conexion->prepare($sql);
			  		$statement->execute($usuario);
			  	} catch(PDOException $error){
			  		echo $error->getMessage();
			  	}
	}
	?>
	<?php require_once '../templates/header.php'; ?>
	<?php if(isset($_POST['submit']) && $statement): ?>
		<blockquote><?php echo $_POST['id']; ?>Modificado correctamente</blockquote>
		<?php endif; ?>
		<h2>Editar usuario</h2>
		<form method="post">
			<?php foreach($usuario as $key => $value): ?>
				<label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
				<input type="text" name="<?php echo $key; ?>" id="<?php echo $key; ?>"
				value="<?php echo $value; ?>" <?php echo($key==='id' ? 'readonly' :null); ?>>
			<?php endforeach; ?>
			<input type="submit" name="submit" value="Modificar">
		</form>
		<a href="index.php">Volver</a>
		<?php require_once '../templates/footer.php'; ?>