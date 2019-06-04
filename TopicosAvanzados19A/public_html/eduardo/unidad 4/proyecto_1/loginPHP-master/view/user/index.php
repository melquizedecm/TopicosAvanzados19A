

<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../index.php');
  }

?>
<!DOCTYPE html>
<html>
  <head>
  
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registro</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/shortcut-icon.ico" />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </head>
  <body>
      
      <div class="page-container">
    <nav class="full-reset nav-phonestore">
        <div class="logo tittles-pages">
            MeridaStore
        </div>

        <ul class="list-unstyled full-reset navigation-list">
            <!-- ucfirst convierte la primera letra en mayusculas de una cadena -->
    Hola usuario estandar <?php echo ucfirst($_SESSION['nombre']); ?>
    <a href="../../controller/cerrarSesion.php">
      <button type="button" name="button">Cerrar sesion</button>
 </a>
            <li><a href="../../../tienda/tienda.php">inicio</a></li>
            <li><a href="../../../usuario/vista_usuario.php">Compras</a></li>


        </ul>

         <i class="fa fa-bars visible-xs btn-mobile"></i>
    </nav>
    <div class="content-page cover-background font-content-index">
        <div class="jumbotron">
            <h1 class="tittles-pages">Bienvenidos</h1>

        </div>
        <section class="OS-phones section">
            <div class="container">
                <div class="row">

                </div>
            </div>   
        </section>
        <section class="news-promo-content section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                       
                        <br><br><br>
                    </div>
        
    
  </body>
</html>
