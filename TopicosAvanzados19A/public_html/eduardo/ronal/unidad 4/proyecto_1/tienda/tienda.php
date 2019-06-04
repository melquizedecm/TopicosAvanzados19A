<!DOCTYPE html>
<html>
    <head>

        <!llamada de librerias >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos</title>

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

    <link rel="stylesheet" type="text/css" href="estilostablas.css">


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
           
            <li><a href="../usuario/vista_usuario.php">Comprar</a></li>
            <li><a href="../loginPHP-master/index.php">Login</a></li>


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
                        <p class="tittles-pages">Selecione una opcion</p>
                        <br><br><br>
                    </div>
                    <!--------------------------------------------------------------------------------------------->

                    <center>
                        <a href="../loginPHP-master/index.php" class="btn btn-success">Ir a Login</a>
                       
                        <th colspan="9"> <a href="../usuario/vista_usuario.php"> <button type="button" class="btn btn-info">Ir a Comprar</button></a></th>


                    </center>  



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




                                    </tr>

                                    <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </center>


                    <footer class="footer"> <!parte del diseño de la paginaen la que se modifica el aspecto visual>
                        <div class="container-fluid">
                            <div class="col-xs-12 text-center">
                                <h3>Siguenos en</h3>
                                <ul class="list-unstyled list-social-icons">
                                    <li >
                                        <a href="https://www.facebook.com/">
                                            <i class="fa fa-facebook" style="background-color: #3B5998;"></i> 
                                        </a>
                                    </li>

                                    <li>
                                        <a href="https://twitter.com/">
                                            <i class="fa fa-twitter"  style="background-color: #56A3D9;"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/">
                                            <i class="fa fa-youtube" style="background-color: #BF221F;"></i>
                                        </a>
                                    </li>
                                </ul>
                                <h4>MeridaStore &copy; 2019</h4>
                            </div>
                        </div>
                    </footer>



                    </body>

                    </html>
