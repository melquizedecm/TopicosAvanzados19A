<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" type="text/css" href="estilostablas.css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="estilosagregar.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
            MeridaStore/Administrador/Agregar 
        </div>

        <ul class="list-unstyled full-reset navigation-list">
            <li><a href="../tienda/tienda.php">inicio</a></li>
            <li><a href="compradores.php">ventas</a></li>
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

                        <center><br/><br/><br/>
                            <p class="texto">Agregar</p>
                            <div class="Agregar">
                                <form action="proceso_guardar.php" method="post" enctype="multipart/form-data">
                                    <span class="fontawesome-user"></span><input type="text" REQUIRED name="nombre" required placeholder="nombre" autocomplete="off">
                                    <span class="fas fa-dollar-sign"></span><input type="text" REQUIRED name="precio" required placeholder="precio" autocomplete="off">
                                    <span class="fontawesome-user"></span><input type="text" REQUIRED name="estado" required placeholder="estado" autocomplete="off">
                                    <span class="fontawesome-user"></span><input type="text" REQUIRED name="marca" required placeholder="marca" autocomplete="off">



                                    <input type="file" REQUIRED name="imagen"/><br/><br/>
                                    <input type="submit" value="aceptar" title="Aceptar">
                                </form>
                            </div>
                        </center>
                        </body>
                        </html>
