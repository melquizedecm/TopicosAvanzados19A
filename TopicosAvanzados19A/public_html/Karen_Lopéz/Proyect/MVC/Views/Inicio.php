<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <!--titulo de la ventana-->
  <title>Bienvenido</title>
<!--librerias-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:700'>
  <!--css-->
      <link rel="stylesheet" href="css/style.css">
  <style>
    h1 { color: #fff; }
  </style>

<body>
  <r><!--me pone envertical todo-->
    <!--titulo de la pagina-->
<h1> ¡Bienvenido!</h1>

<!--<div class="wrapper">
    <a class="button"  onclick="location='Ordenar.php'" href="#">Ordenar</a>
</div>-->
<!--botones-->
<div class="wrapper">
    <a class="button" onclick="location='Inventario.php'" href="#">Inventario</a>
</div>
<div class="wrapper">
    <a class="button"onclick="location='Ventas.php'" href="#">Ventas</a>
</div>
<div class="wrapper">
    <a class="button" onclick="location='AdminUsuarios.php'" href="#">Administrador de usuarios</a>
</div>
<div class="wrapper">
    <a class="button" onclick="location='Login.php'" href="#">Cerrar sesion</a>
</div>
<!--parte de la librerias y diseño de los botones-->
<!-- Filter: https://css-tricks.com/gooey-effect/ -->
<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
        <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
            <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
        </filter>
    </defs>
</svg>
</body>
</html>
