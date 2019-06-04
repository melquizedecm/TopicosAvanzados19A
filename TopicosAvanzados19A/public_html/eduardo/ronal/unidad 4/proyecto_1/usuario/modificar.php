<html>
<head>
  
        <!llamada de librerias >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador</title>

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!--------------------------------------------------------------------------------------------->
    <!titulo y barra de menu suprior>
<div class="page-container">
    <nav class="full-reset nav-phonestore">
        <div class="logo tittles-pages">
            MeridaStore
        </div>

        <ul class="list-unstyled full-reset navigation-list">
            <li><a href="../index.php">inicio</a></li>
            <li><a href="vista_usuario.php">Productos</a></li>
            <li><a href="../loginPHP-master/index.php">Login</a></li>
          

        </ul>

        <i class="fa fa-bars visible-xs btn-mobile"></i>
    </nav>
    <div class="content-page cover-background font-content-index">
        <div class="jumbotron">
            <h1 class="tittles-pages">compras</h1>

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
                        <p class="tittles-pages">Registre su compra</p>
                        <br><br><br>
                    </div>
                    <!--------------------------------------------------------------------------------------------->

<?php


   include("conexion.php");
   $id= $_REQUEST['id'];
   $query = "SELECT * FROM tabla_imagen WHERE id='$id'";
   $resultado = $conexion->query($query);
   $row= $resultado->fetch_assoc();

  ?>
  <center><br/><br/><br/>
    <form action="proceso_modificar.php?id=<?php echo $row['id']; ?> " method="POST" enctype="multipart/form-data">

    <input type="text" REQUIRED name ="cantidad" placeholder="cantidad..." value="<?php  echo $row['cantidad']; ?>" /><br/><br/>
    <input type="text" REQUIRED name ="comprador" placeholder="comprador..." value="<?php  echo $row['comprador']; ?>" /><br/><br/>

      <input type="submit" value="ACEPTAR">
    </form>

  </center>
</body>

</html>
