<?php

require_once '../Core/Config.php';
  $conexion=new Config();
  $link=$conexion->conectar();

	$sql="SELECT usuarios.nombre, usuarios.ap, usuarios.usuario,usuarios.id_u,usuarios.status FROM usuarios";
  $tablaadmin=$link->query($sql);

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
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
<style type="text/css">
  body, html {
  height: 100%;
}

.bg {
  /* The image used */
  background-image: url("https://previews.123rf.com/images/macrovector/macrovector1705/macrovector170500708/79221586-fondo-blanco-con-diferentes-art%C3%ADculos-de-papeler%C3%ADa-ilustraci%C3%B3n-vectorial-realista.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  </style>
</head>
<body>

	<div class="bg">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-51">
						~ Nuevo usuario ~
					</span>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Usuario es requerido">
						<input class="input100" id="adduser" type="text"  placeholder="Ingrese un nombre de usuario">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "nombre es requerido">
						<input class="input100" id="addnomb" type="text"  placeholder="Ingrese su nombre">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "apellido es requerido">
						<input class="input100" id="addapp" type="text" placeholder="Ingrese su apellido paterno">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Contraseña es requerido">
						<input class="input100" id="addpass" type="password"  placeholder="Ingrese una Contraseña">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						</div>
            <div class="container-login100-form-btn m-t-17">
              <button class="login100-form-btn"  type="submit" name="submit" onclick="agregarUser()">
                Registrarse
              </button>
            </div>

					</div>
					<div>
						<a href="#" class="txt1" onclick="location='Login.php'">
							Volver
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js" type="f3fb90b7366debd175696b71-text/javascript"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js" type="f3fb90b7366debd175696b71-text/javascript"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js" type="f3fb90b7366debd175696b71-text/javascript"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js" type="f3fb90b7366debd175696b71-text/javascript"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js" type="f3fb90b7366debd175696b71-text/javascript"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js" type="f3fb90b7366debd175696b71-text/javascript"></script>
	<script src="vendor/daterangepicker/daterangepicker.js" type="f3fb90b7366debd175696b71-text/javascript"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js" type="f3fb90b7366debd175696b71-text/javascript"></script>
<!--===============================================================================================-->
	<script src="js/main.js" type="f3fb90b7366debd175696b71-text/javascript"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="f3fb90b7366debd175696b71-text/javascript"></script>
	<script type="f3fb90b7366debd175696b71-text/javascript">
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="f3fb90b7366debd175696b71-|49" defer=""></script></body>
</html>
