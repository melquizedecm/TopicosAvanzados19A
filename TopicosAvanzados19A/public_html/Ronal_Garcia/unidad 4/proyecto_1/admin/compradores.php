<!DOCTYPE html>
<html>
    <head>
        <!llamada de librerias >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ventas</title>

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
    <!--------------------------------------------------------------------------------------------->
    <!titulo y barra de menu suprior>
<div class="page-container">
    <nav class="full-reset nav-phonestore">
        <div class="logo tittles-pages">
            MeridaStore/Administrador/Ventas
        </div>

        <ul class="list-unstyled full-reset navigation-list">
            <li><a href="../tienda/tienda.php">inicio</a></li>
            <li><a href="vista_admin.php">Menu de Administrador</a></li>

        </ul>

        <i class="fa fa-bars visible-xs btn-mobile"></i>
    </nav>
    <div class="content-page cover-background font-content-index">
        <div class="jumbotron">
            <h1 class="tittles-pages">Productos Vendidos</h1>

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
                <p class="tittles-pages">Lista de ventas</p>
                <br><br><br>
            </div>
            <!--------------------------------------------------------------------------------------------->
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <table border="1">
                            <thead>

                         
                            <tr>

                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>PRECIO</th>
                                <th>ESTADO</th>
                                <th>MARCA</th>
                                <th>IMAGEN</th>
                                <th>Cantidad</th>
                                <th>Comprador</th>

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
                                        <td><?php echo $row['cantidad']; ?></td>
                                        <td><?php echo $row['comprador']; ?></td>




                                    </tr>

                                    <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </center>
                    </body>

                    </html>
