<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta name="description" content="Restaurante-Viña del Mar">
        <meta name="author" content="Marketify">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Restaurante-Viña del mar</title>

        <!-- STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/plugins.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script type="text/javascript" src="jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="dist/Chart.bundle.min.js"></script>
        <script type="text/javascript">
            $(document)
                    .ready(
                            function () {
                                var datos = {
                                    labels: ["Enero", "Febrero", "Marzo",
                                        "Abril", "Mayo"],
                                    datasets: [{
                                            label: "Visitas Web",
                                            backgroundColor: "rgba(220,220,220,0.5)",
                                            data: [4, 12, 9, 7, 5]
                                        },

                                        {
                                            label: "Visitas Restaurante",
                                            backgroundColor: "rgba(151,100,205,0.5)",
                                            data: [9, 6, 15, 6, 17]
                                        }]
                                };

                                var canvas = document.getElementById('chart')
                                        .getContext('2d');
                                window.bar = new Chart(canvas, {
                                    type: "line",
                                    data: datos,
                                    options: {
                                        elements: {
                                            rectangle: {
                                                borderWidth: 1,
                                                borderColor: "rgb(0,255,0)",
                                                borderSkipped: 'bottom'
                                            }
                                        },
                                        responsive: true,
                                        title: {
                                            display: true,
                                            text: "Grafica"
                                        }
                                    }
                                });

                                setInterval(function () {
                                    var newData = [
                                        [getRandom(), getRandom(), getRandom(),
                                            getRandom() * -1, getRandom()],
                                        [getRandom(), getRandom(), getRandom(),
                                            getRandom(), getRandom()],
                                        [getRandom(), getRandom(), getRandom(),
                                            getRandom(), getRandom()], ];

                                    $.each(datos.datasets, function (i, dataset) {
                                        dataset.data = newData[i];
                                    });
                                    window.line.update();
                                }, 5000);

                                function getRandom() {
                                    return Math.round(Math.random() * 100);
                                }

                            });
        </script>
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
        <!-- /STYLES -->
        <!-- /STYLES boton -->
        <style type="text/css">
            .boton_personalizado {
                text-decoration: none;
                padding: 10px;
                font-weight: 600;
                font-size: 20px;
                color: #ffffff;
                background-color: #1883ba;
                border-radius: 6px;
                border: 2px solid #0016b0;
            }

            .boton_personalizado:hover {
                color: #1883ba;
                background-color: #ffffff;
            }
        </style>
    </head>

    <body>

        <!-- WRAPPER ALL -->
        <div class="edina_tm_wrapper_all">

            <div id="edina_tm_popup_blog">
                <div class="container">
                    <div class="inner_popup scrollable"></div>
                </div>
                <span class="close"><a href="#"></a></span>
            </div>

            <!-- HEADER -->
            <header class="edina_tm_header">
                <div class="edina_tm_navigation_wrap">
                    <div class="container">
                        <div class="navigation_inner">
                            <div class="logo">
                                <a class="dark_logo" href="#"><img src="#" alt="" /></a>
                            </div>
                            <div class="nav_list_wrap">
                                <div class="menu">
                                    <ul class="anchor_nav">
                                        <li><a href="#home">Inicio</a></li>
                                        <li><a href="#about">Acerca</a></li>
                                        <li><a href="#services">Servicios</a></li>
                                        <li><a href="#portfolio">Menu</a></li>
                                        <li><a href="#testimonials">Opiniones</a></li>
                                        <li><a href="#estadisticas">Estadisticas</a></li>
                                        <li><a href="#contact">Contactanos</a></li>
                                        <li><a href="#ubicacion">Ubicacion</a></li>
                                        <li><a href="Acceso/pages-login.html">Acceso</a></li>

                                    </ul>
                                </div>
                                <div class="social_icons_wrap">
                                    <ul>
                                        <li><a href="#"><i class="xcon-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="edina_tm_trigger">
                                <div class="hamburger hamburger--collapse-r">
                                    <div class="hamburger-box">
                                        <div class="hamburger-inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="edina_tm_mobile_menu_wrap">
                    <div class="mob_menu">
                        <ul class="anchor_nav">
                            <li><a href="#home">Inicio</a></li>
                            <li><a href="#about">Acerca</a></li>
                            <li><a href="#services">Servicios</a></li>
                            <li><a href="#portfolio">Menu</a></li>
                            <li><a href="#testimonials">Opiniones</a></li>
                            <li><a href="#estadisticas">Estadisticas</a></li>
                            <li><a href="#contact">Contactanos</a></li>
                            <li><a href="#ubicacion">Ubicacion</a></li>
                            <li><a href="Acceso/pages-login.html">Acceso</a></li>

                    </div>
                </div>
            </header>
            <!-- /HEADER -->

            <!-- CONTENT -->
            <div class="edina_tm_content">

                <!-- HERO -->
                <div class="edina_tm_section" id="home">
                    <div class="edina_tm_hero_header">
                        <div class="edina_tm_universal_box_wrap">
                            <div class="bg_wrap">
                                <div class="overlay_image hero jarallax" data-speed="0"></div>
                                <div class="overlay_video"></div>
                                <div class="overlay_color hero"></div>
                            </div>
                            <div class="content hero">
                                <div class="container hero">
                                    <div class="hero_title">
                                        <img src="img/hero/image.png" alt="" />
                                    </div>
                                </div>
                                <div class="edina_tm_discover_wrap anchor">
                                    <span> <a href="#about">Descubre</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /HERO -->

                <!-- ABOUT -->
                <div class="edina_tm_section" id="about">
                    <div class="container">
                        <div class="edina_tm_main_title_holder_wrap about">
                            <div class="title_wrap">
                                <span>Acerca de Nosotros</span>
                            </div>
                        </div>
                        <div class="edina_tm_about_wrap">
                            <div class="author_wrap">
                                <div class="leftbox"></div>
                                <div class="rightbox">
                                    <div class="name_holder">
                                        <h3>Viña del Mar</h3>
                                    </div>
                                    <div class="definition">
                                        <p>Con más de 30 años de experiencia, somos líderes en especialidades de mariscos, contamos con el mejor en servicio, calidad y cantidad. Ven y conocenos.</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /ABOUT -->

                <!-- Categorias de productos -->
                <div class="edina_tm_section" id="services">
                    <div class="edina_tm_services_total_wrap">
                        <div class="container">
                            <div class="edina_tm_main_title_holder_wrap">
                                <div class="title_wrap">
                                    <span>Servicios</span>
                                </div>
                            </div>
                            <div class="edina_tm_services_wrap">
                                <div class="edina_tm_list_wrap" data-column="3" data-space="70">
                                    <ul class="total">
                                        <li class="wow fadeIn" data-wow-duration="1.2s">
                                            <div class="inner_list">
                                                <div class="service_icon">
                                                    <img class="svg" src="img/svg/cup-of-drink.svg" alt="" />
                                                </div>
                                                <div class="service_title">
                                                    <h3>Bebidas</h3>
                                                </div>

                                                <span class="first"></span> <span class="second"></span>
                                            </div>
                                        </li>
                                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                            <div class="inner_list">
                                                <div class="service_icon">
                                                    <img class="svg" src="img/svg/purchase.svg" alt="" />
                                                </div>
                                                <div class="service_title">
                                                    <h3>Desyunos</h3>
                                                </div>

                                                <span class="first"></span> <span class="second"></span>
                                            </div>
                                        </li>
                                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.4s">
                                            <div class="inner_list">
                                                <div class="service_icon">
                                                    <img class="svg" src="img/svg/restaurant.svg" alt="" />
                                                </div>
                                                <div class="service_title">
                                                    <h3>Almuerzos</h3>
                                                </div>

                                                <span class="first"></span> <span class="second"></span>
                                            </div>
                                        </li>

                                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                            <div class="inner_list">
                                                <div class="service_icon">
                                                    <img class="svg" src="img/svg/share.svg" alt="" />
                                                </div>
                                                <div class="service_title">
                                                    <h3>Area infantil</h3>
                                                </div>

                                                <span class="first"></span> <span class="second"></span>
                                            </div>
                                        </li>
                                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                            <div class="inner_list">
                                                <div class="service_icon">
                                                    <img class="svg" src="img/svg/adobe-illustrator.svg" alt="" />
                                                </div>
                                                <div class="service_title">
                                                    <h3>Area climatizada</h3>
                                                </div>

                                                <span class="first"></span> <span class="second"></span>
                                            </div>
                                        </li>
                                        <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="1s">
                                            <div class="inner_list">
                                                <div class="service_icon">
                                                    <img class="svg" src="img/svg/seo-performance-marketing-graphic.svg" alt="" />
                                                </div>
                                                <div class="service_title">
                                                    <h3>Area Privada</h3>
                                                </div>

                                                <span class="first"></span> <span class="second"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /SERVICES -->

                <!-- Mini Menu -->
                <div class="edina_tm_section" id="portfolio">
                    <div class="container">
                        <div class="edina_tm_portfolio_wrap">
                            <div class="edina_tm_main_title_holder_wrap portfolio">
                                <div class="title_wrap">
                                    <span>Menu</span>
                                </div>
                            </div>
                            <ul class="edina_tm_portfolio_filter">
                                <li><a href="#" class="current" data-filter="*">Todo</a></li>
                                <li><a href="#" data-filter=".Bebidas">Bebidas</a></li>
                                <li><a href="#" data-filter=".Desayuno">Desayunos</a></li>
                                <li><a href="#" data-filter=".Almuerzo">Almuerzos</a></li>
                            </ul>
                            <ul class="edina_tm_portfolio_list gallery_zoom">
                                <li class="Bebidas">
                                    <div class="list_inner">
                                        <div class="image_wrap">
                                            <img src="img/portfolio/600x600.jpg" alt="" />
                                            <div class="main_image"></div>
                                        </div>
                                        <div class="definition_portfolio">
                                            <span class="first"><a class="zoom" href="img/portfolio/5.jpg">Coca-Cola</a></span> <span class="second">Bebidas</span>
                                        </div>
                                    </div>
                                </li>


                                <li class="Bebidas">
                                    <div class="list_inner">
                                        <div class="image_wrap">
                                            <img src="img/portfolio/600x600.jpg" alt="" />
                                            <div class="main_image"></div>
                                        </div>
                                        <div class="definition_portfolio">
                                            <span class="first"><a class="zoom" href="img/portfolio/2.jpg">Martini</a></span> <span class="second">Bebidas</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="Desayuno">
                                    <div class="list_inner">
                                        <div class="image_wrap">
                                            <img src="img/portfolio/600x600.jpg" alt="" />
                                            <div class="main_image"></div>
                                        </div>
                                        <div class="definition_portfolio">
                                            <span class="first"><a class="zoom" href="img/portfolio/3.jpg">TORTILLA CON JAMÓN</a></span> <span class="second">Desayuno</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="Desayuno">
                                    <div class="list_inner">
                                        <div class="image_wrap">
                                            <img src="img/portfolio/600x600.jpg" alt="" />
                                            <div class="main_image"></div>
                                        </div>
                                        <div class="definition_portfolio">
                                            <span class="first"><a class="zoom" href="img/portfolio/4.jpg">Desayuno estilo americano</a></span> <span class="second">Desyuno</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="Desayuno">
                                    <div class="list_inner">
                                        <div class="image_wrap">
                                            <img src="img/portfolio/600x600.jpg" alt="" />
                                            <div class="main_image"></div>
                                        </div>
                                        <div class="definition_portfolio">
                                            <span class="first"><a class="zoom" href="img/portfolio/6.jpg">Enfrijoladas</a></span> <span class="second">Desayuno</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="Almuerzo">
                                    <div class="list_inner">
                                        <div class="image_wrap">
                                            <img src="img/portfolio/600x600.jpg" alt="" />
                                            <div class="main_image"></div>
                                        </div>
                                        <div class="definition_portfolio">
                                            <span class="first"><a class="zoom" href="img/portfolio/7.jpg">Pechuga de pollo al horno con papa y vegetales</a></span> <span class="second">Almuerzo</span>
                                        </div>
                                    </div> <!-- Boton de descargar -->

                                <li align="center">
                                    <div align="center">

                                        <a class="boton_personalizado" href="img/menu/Menu.pdf">Descargar Menu</a>
                                    </div>
                                </li>


                                <!-- Boton de descargar -->

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /PORTFOLIO -->

                <!-- Opiniones -->
                <div class="edina_tm_section" id="testimonials">
                    <div class="edina_tm_testimonial_wrap">
                        <div class="edina_tm_universal_box_wrap">
                            <div class="bg_wrap hero">
                                <div class="overlay_image testimonial jarallax" data-speed="0"></div>
                                <div class="overlay_color testimonial"></div>
                            </div>
                            <div class="content testimonial">
                                <div class="edina_tm_main_title_holder_wrap testimonial">

                                    <div class="title_wrap">
                                        <span>Opiniones</span>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="carousel_wrap">
                                        <ul class="owl-carousel">
                                            <li class="item">
                                                <div class="inner">
                                                    <div class="image_holder">
                                                        <img src="img/clients/1.jpg" alt="" />
                                                    </div>
                                                    <div class="definition">
                                                        <p>Muchas felicidades al chef y al personal, excelente atención, todo muy rico, el ceviche delicioso, mi familia y yo estamos muy contentos por el trato recibido y por todas sus atenciones!! Muchas gracias!!</p>
                                                    </div>
                                                    <div class="svg_wrap">
                                                        <i class="xcon-quote-left"></i>
                                                    </div>
                                                    <div class="name_holder_wrap">
                                                        <span class="name">Tex Auais</span> <span class="job">Cliente Frecuente</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="inner">
                                                    <div class="image_holder">
                                                        <img src="img/clients/2.jpg" alt="" />
                                                    </div>
                                                    <div class="definition">
                                                        <p>Excelente servicio uno de los mejores restaurantes de Progreso.</p>
                                                    </div>
                                                    <div class="svg_wrap">
                                                        <i class="xcon-quote-left"></i>
                                                    </div>
                                                    <div class="name_holder_wrap">
                                                        <span class="name">Angelica Rodriguez Navarro</span> <span class="job">Cliente Casual</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="inner">
                                                    <div class="image_holder">
                                                        <img src="img/clients/3.jpg" alt="" />
                                                    </div>
                                                    <div class="definition">
                                                        <p>Es de los mejores restaurantes del puerto Progreso su exquisita comida y la maravillosa atenvion hace que regreses a disfrutar de el ademas que su ubicacion es perfecta cerquita de la playa y el clima siempre es riquisimo, simplemente lo mejor de lo mejor!.</p>
                                                    </div>
                                                    <div class="svg_wrap">
                                                        <i class="xcon-quote-left"></i>
                                                    </div>
                                                    <div class="name_holder_wrap">
                                                        <span class="name">Circe Codwelle</span> <span class="job">Cliente Casual</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /TESTIMONIALS -->

                <div class="edina_tm_section" id="estadisticas">
                    <div class="edina_tm_main_title_holder_wrap visit">

                        <div class="title_wrap">
                            <span>Estadisticas</span>
                        </div>
                    </div>




                    <div id="canvas-container" style="width: 50%;" align="center">
                        <canvas id="chart" width="500" height="350"></canvas>
                    </div>







                    <!-- CONTACT -->
                    <div class="edina_tm_section" id="contact">
                        <div class="edina_tm_main_title_holder_wrap contact">

                            <div class="title_wrap">
                                <span>Contáctanos</span>
                            </div>
                        </div>
                        <div class="edina_tm_contact_wrap">
                            <div class="short_info">
                                <div class="container">
                                    <div class="subtitle">
                                        <p class="wow fadeIn" data-wow-duration="1.2s">¿Alguna Pregunta? Ponte en contacto con nosotros y te responderemos en breve..</p>
                                    </div>
                                </div>
                            </div>
                            <div class="main_input_wrap">
                                <form method="POST" action="../../../FrontEnd/modal/contact.php" class="contact_form" id="contact_form">
                                    <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                                    <div class="empty_notice">
                                        <span>Por favor, rellene los campos requeridos</span>
                                    </div>
                                    <div class="wrap wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                        <input name="name" type="text" placeholder="Nombre">
                                    </div>
                                    <div class="wrap wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.4s">
                                        <input name="email" type="text" placeholder="E-mail">
                                    </div>
                                    <div class="wrap wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                        <textarea name="message" placeholder="Tu mensaje"></textarea>
                                    </div>
                                    <div class="edina_tm_button wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                        <a id="send_message" href="#">Enviar Mensaje</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /CONTACT -->
                    <!-- PARTNERS -->
                    <div class="edina_tm_section">
                        <div class="edina_tm_partners_wrap_total">
                            <div class="edina_tm_universal_box_wrap">
                                <div class="bg_wrap">
                                    <div class="overlay_image partners jarallax" data-speed="0"></div>
                                    <div class="overlay_color partners"></div>
                                </div>
                                <div class="content partners">
                                    <div class="container">
                                        <div class="edina_tm_partners_wrap">
                                            <ul class="owl-carousel">
                                                <li class="item"><img src="img/partners/1.png" alt="" /></li>
                                                <li class="item"><img src="img/partners/3.png" alt="" /></li>
                                                <li class="item"><img src="img/partners/5.png" alt="" /></li>
                                                <li class="item"><img src="img/partners/6.png" alt="" /></li>
                                                <li class="item"><img src="img/partners/7.png" alt="" /></li>
                                                <li class="item"><img src="img/partners/3.png" alt="" /></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /PARTNERS -->
                    <!-- NEWS -->



                    <div class="edina_tm_main_title_holder_wrap news" id="ubicacion">

                        <div class="title_wrap">
                            <span>Ubicacion</span>
                        </div>
                    </div>
                    <div>
                        <!--  -->
                        <div class="google-maps">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d929.3920256114596!2d-89.65510186096476!3d21.288557188137563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5ed136ae0634d1de!2sRestaurante+Vi%C3%B1a+del+Mar!5e0!3m2!1ses-419!2smx!4v1551141940886" width="1860" height="950" frameborder="0" style="border: 0" allowfullscreen></iframe>
                        </div>
                        <!--  -->
                    </div>

                </div>
                <!-- /NEWS -->
                <!-- FOOTER -->
                <div class="edina_tm_section">
                    <div class="edina_tm_footer_wrap">
                        <p class="wow fadeIn" data-wow-duration="1.2s">
                            &copy;Creado por <a href="#home">Viña del Mar</a>
                        </p>
                    </div>
                </div>
                <!-- /FOOTER -->

            </div>
            <!-- /CONTENT -->

            <!-- TOP TOP -->
            <div class="edina_tm_to_top_wrap">
                <a href="#">Volver hacia arriba</a>
            </div>
            <!-- /TO TOP -->

        </div>
        <!-- / WRAPPER ALL -->

        <!-- SCRIPTS -->
        <script src="js/jquery.js"></script>
        <!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
        <script src="js/plugins.js"></script>
        <script src="js/init.js"></script>
        <!-- /SCRIPTS -->

    </body>
</html>

