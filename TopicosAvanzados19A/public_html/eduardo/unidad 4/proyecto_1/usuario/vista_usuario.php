<!DOCTYPE html>
<html>
    <head>

        <!llamada de librerias >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compras</title>

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
            <li><a href="../tienda/tienda.php">inicio</a></li>
            <li><a href="../loginPHP-master/index.php">Login</a></li>
           


        </ul>

        <i class="fa fa-bars visible-xs btn-mobile"></i>
    </nav>
    <div class="content-page cover-background font-content-index">
        <div class="jumbotron">
            <h1 class="tittles-pages">Productos disponibles</h1>

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

                </div>  
            </div>
                    <div class="col-xs-12 text-center">
                        <p class="tittles-pages">Selecione una opcion</p>
                        <br><br><br>
                    </div>
                    <!--------------------------------------------------------------------------------------------->
                    <div class="row">
                        <div class="col-md-12">


                            <title>Mostrar Imagen</title>

                            <!-- <link rel="stylesheet" type="text/css" href="estilostablas.css"> estilo de la tabla-->
                           
                          
                            <center>
                                <table border="1">
                                    <thead>

                                    <title>Matxus - información de productos</title>
                                    <tr>

                                    </tr>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>PRECIO</th>
                                        <th>ESTADO</th>
                                        <th>MARCA</th>
                                        <th>IMAGEN</th>
                                        <th colspan="2">OPCIONES</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("conexion.php");
                                        $query = "SELECT * FROM tabla_imagen";
                                        $resultado = $conexion->query($query);
                                        while ($row = $resultado->fetch_assoc()) {
                                            ?>

                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['nombre']; ?></td>
                                                <td><?php echo $row['precio']; ?></td>
                                                <td><?php echo $row['estado']; ?></td>
                                                <td><?php echo $row['marca']; ?></td>
                                                <td><img height="120px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
                                                <th><button type='button' class='btn btn-success'><a href="modificar.php?id=<?php echo $row['id']; ?>"><button>comprar</button></a></th>




                                            </tr>

                                            <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </center>
                        </div>
                    </div>
                    </section>
                </div>
            </div>
            </body>

            </html>
