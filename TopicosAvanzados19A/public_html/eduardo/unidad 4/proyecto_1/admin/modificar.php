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
            MeridaStore/Administrador/Modificar 
        </div>

        <ul class="list-unstyled full-reset navigation-list">
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="vista_admin.php">Menu de Administrador</a></li>

        </ul>

        <i class="fa fa-bars visible-xs btn-mobile"></i>
    </nav>
    <div class="content-page cover-background font-content-index">
        <div class="jumbotron">
            <h1 class="tittles-pages">Agregar un nuevo producto</h1>

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
                        <p class="tittles-pages">Selecione una opcion</p>
                        <br><br><br>
                    </div>
                    <!--------------------------------------------------------------------------------------------->


          <center>
	            

  </center>

<?php


   include("conexion.php");
   $id= $_REQUEST['id'];
   $query = "SELECT * FROM tabla_imagen WHERE id='$id'";
   $resultado = $conexion->query($query);
   $row= $resultado->fetch_assoc();

  ?>
  <center><br/><br/><br/>
    <form action="proceso_modificar.php?id=<?php echo $row['id']; ?> " method="POST" enctype="multipart/form-data">
      <input type="text" REQUIRED name ="nombre" placeholder="Nombre..." value="<?php  echo $row['nombre']; ?>" /><br/><br/>
        <input type="text" REQUIRED name ="precio" placeholder="Precio..." value="<?php  echo $row['precio']; ?>" /><br/><br/>
          <input type="text" REQUIRED name ="estado" placeholder="Estado..." value="<?php  echo $row['estado']; ?>" /><br/><br/>
          <input type="text" REQUIRED name ="marca" placeholder="Marca..." value="<?php  echo $row['marca']; ?>" /><br/><br/>
      <img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/>
      <input type="file" REQUIRED name="imagen"/><br/><br/>
      <input type="submit" value="ACEPTAR">
    </form>

  </center>
</body>

</html>
