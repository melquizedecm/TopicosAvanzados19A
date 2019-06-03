<!--
Authors: Francisco Montalvo
Jesus Lira
Cosme Magaña
Description: Este es el php de inicio de sesion donde validamos el usuario y contraseña

-->

<?php

//se inicia una sesion 

session_start();
require_once '../Core/Config.php';
  $conexion=new Config();
  $link=$conexion->conectar();


//consulta SQL para obtener el usuario contraseña y status para posteriormente validar


  $sqlusuario="SELECT usuario.matricula, usuario.contrasenia, alumnos.Status FROM usuario,alumnos WHERE alumnos.Status=1 AND alumnos.matricula=usuario.matricula";
  $tablausuario=$link->query($sqlusuario);
  $sqlusuario2="SELECT usuario2.matricula, usuario2.contrasenia,trabajadores.Status,usuario2.tipo FROM usuario2,trabajadores WHERE usuario2.matricula=trabajadores.matricula";
  $tablausuario2=$link->query($sqlusuario2);
  $tablausuario3=$link->query($sqlusuario2);

//Para validar si existe una accion con el id


	if(isset($_POST['username'])){
		$usuario=$_POST["username"];
		$contrasena=$_POST["pass"];


    //validaciones del usuario y contraseña

			while($filausuario=$tablausuario->fetch_array(MYSQLI_BOTH)){
				if($usuario==$filausuario[0] && $contrasena==$filausuario[1] && $filausuario[2]==1){

					$bandera=true;
					break;
				}else{
				$bandera=false;
			}
		}
			while($filausuario2=$tablausuario2->fetch_array(MYSQLI_BOTH)){
				if($usuario==$filausuario2[0] && $contrasena==$filausuario2[1] && $filausuario2[2]==1 && $filausuario2[3]==2){
					$bandera1=true;
					$tipo=2;
					break;
				}else{
					$bandera1=false;
				}
			}

      while($filausuario3=$tablausuario3->fetch_array(MYSQLI_BOTH)){
        if($usuario==$filausuario3[0] && $contrasena==$filausuario3[1] && $filausuario3[2]==1 && $filausuario3[3]==3){
          $bandera2=true;
          $tipo=3;
          break;
        }else{
          $bandera2=false;
        }
      }

//validaciones de banderas

			if($bandera){
        $_SESSION['usuario']=$usuario;

				header("Location: perfil/perfil.php");
			}
			if($bandera1){
         $_SESSION['usuario']=$usuario;
					header("Location: Admin/tables2.php");
				}

        if($bandera2){
           $_SESSION['usuario']=$usuario;
            header("Location: Admin/tables.php");
          }



			 if($bandera==false && $bandera1==false && $bandera2==false){
			echo'<script type="text/javascript">
    				alert("Usuario o contraseña incorrectos");
    				</script>';
			}

		}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ingresar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-70">
						Bienvenidos
					</span>
					<span class="login100-form-avatar">
						<img src="images/logo2.png" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" id="username" type="text" name="username">
						<span class="focus-input100" data-placeholder="Usuario"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" id="pass" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Contraseña"></span>
					</div>

						<div class="container-login100-form-btn">
							<input class="login100-form-btn" type="submit" value="Ingresar">

						</div>

					<br>
					<div class="container-login100-form-btn">

						<button class="login100-form-btn" onclick="location.href='index.html'">
							Inicio
						</button>
					</div>

					<ul class="login-more p-t-190">
						<li class="m-b-8">
							<span class="txt1">
								Olvidaste
							</span>

							<a href="#" class="txt2" onclick="alert('Estamos trabajando en ello!')">
								Usuario / Contraseña?
							</a>
						</li>


					</ul>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/mainlogin.js"></script>

</body>
</html>
