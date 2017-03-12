<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../estilo/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../estilo/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="estilo/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Music is life</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                    <?php
                        session_start();
                        if ($_SESSION["rol"]!='admin') {
                            echo "<a href='../usuario/index.html'>Volver</a>";
                        } else {
                            echo "<a href='../admin/index.php'>volver</a>";
                        }
                    ?>
                    </li>
                    <li class="page-scroll">
                        <a href="../logueo/logout.php">Cerrar Sesion</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">NOTICIAS</span>
                        <hr class="star-light">
                        <span class="skills">Tu información sobre tu musica favorita</span>
                    </div>
                    <br></br> 
                    <div class="intro-text">
                        <img width="500px" height="275px" src="http://www.072reur.es/072/images/stories/072/noticias_img.jpg"></img>
					
            </div>
        </div>
    </header>
    

    <!-- Portfolio Grid Section -->
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                    <br></br>
                <span class="skills"><font color="blue" size="9">Dreambeach 2017</font></span>
					<br></br>
                    <span class="skills" align="justify">DreamBeach Villaricos sorprende con el mayor y más espectacular avance de su historia como punto de partida para su 5º aniversario. 20 artistas, 20 Top para Dreambeach. El festival apuesta por la alta calidad y la variedad en los diferentes estilos electrónicos.

                    ANDY C – ANGERFIST – ANNA – BORGORE – CHASE & STATUS (Dj Set & Rage) – FERRY CORSTEN – GONÇALO – JULIAN JEWEIL – NERVO – MAYA JANE COLES – MARCO CAROLA – MARSHMELLO – MATADOR (Live) – MOLLIE COLLINS – NETSKY (Dj) – NICKY ROMERO – OLIVER HELDENS – PACO OSUNA – POPOF – RADICAL REDEMPTION – TCHA-MI – QUINTINO – WILKINSON (Live) – W&W
                    <br></br>

                    Dreambeach Villaricos es uno de los pocos festivales que se puede permitir el lujo de vender 12000 abonos nada más salir y sin anunciar ningún artista pero está claro que los “dreamers” no quieren esperar demasiado y se merecen que el primer plato sea de lo más gustoso en este 5º Aniversario. Por eso Dreambeach cumple sus deseos y lanza el primer avance con más artistas de su historia, en número, en calidad y en diversidad de estilos.
                    <br></br>

                    Son los 20 artistas internacionales y nacionales que componen este primer avance donde se acogen todos los estilos de música electrónica desde drum&bass, techno, house y future house, dubstep, trance, minimal, dance, etc.
                    <br></br>

                    Otra de las novedades de este 5º Aniversario será una espectacular producción escenográfica temática no solo en los escenarios si no en un recinto que será transformado en un auténtico paraíso para disfrute y recreo de los “dreamers”. Una temática que la organización desvelará muy pronto.</span>
                    
            <br></br>        
            <div class="container"><font color="green">Más información en: &nbsp</font>
                    <a href="http://www.dreambeach.es/2017/" target='_blank'>Página oficial</a>                   
            </div>

            <br></br>
                <span class="skills" ><font color="blue" size="9">Winter Festival 2017</font></span>
					<br></br>
                    <span class="skills" align="justify">Nuevo año, nuevos retos, nuevas metas.... y con el nuevo año llega también Raveart!!! Vuelve el festival invernal con la mejor música electrónica que cada año te trae lo mas destacado del sonido breaks nacional e internacional, una cita que este año vuelve a SEVILLA, la provincia que lo vio nacer, a un lugar privilegiado que se convirtió en icono de la música más vanguardista en el que se dieron conocer muchos pesos pesados de la escena electrónica en Andalucía en los años 90. Se trata del antiguo complejo “Sevilla Mía”, en la actualidad reconvertido en un espacio para celebraciones y eventos con el nombre de COMPLEJO OASIS, un espacio que fue un gran icono de la música electrónica en Andalucía y que volverá a serlo muchos años después de que se vivieran aquellos grandes momentos. Para tan importante cita, hemos preparado un gran line up con los mejores artistas actuales tanto nacionales como internacionales, así como de las nuevas promesas, muchas de ellas ya consolidadas que no pueden faltar en la cita más vanguardista del Break en Andalucía, el Retro también tendrá cabida en un escenario para los amantes de los sonidos y emociones de hace años. El SÁBADO 18 DE MARZO es la fecha en la que “Sevilla Mía” volverá a rugir de nuevo...</span>
    
            <br></br>       
            <div class="container"><font color="green">Más información en: &nbsp</font>
                    <a href="https://www.ticketea.com/entradas-festival-winter-2017/" target='_blank'>Info + entradas</a>                   
            </div>
            <br></br>
    
                <span class="skills"><font color="blue" size="9">Noticias sobre DJ's/Productores</font></span>
					<br></br>
                    <span class="skills" align="justify">En la siguiente página encontrarás toda la informacion sobre tus djs y productores preferidos y algunos desconocidos, los cuales podrás sorprenderte, interesantes noticias y eventos siempre enfocados al género de ésta página, no tiene ningún desperdicio.</span>

            <br></br>       
            <div class="container"><font color="green">Más información en: &nbsp</font>
                    <a href="http://www.beatmashmagazine.com/" target='_blank'>Beatmash magazine</a>                   
            </div>
            <br></br>
            </div>
            </div>
        </div>
    <!-- Contact Section -->
    
    <!-- About Section -->
    

    <!-- Footer -->
 <footer class="text-center">
        <div class="footer-above" align="center">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-lg-12">
                        <h3>Location</h3>
                        <p>I.E.S TRIANA
                            <br>Sevilla, España</p>
                    </div>                  
                </div>
            </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- jQuery -->
    <script src="estilo/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="estilo/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="estilo/js/jqBootstrapValidation.js"></script>
    <script src="estilo/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="estilo/js/freelancer.min.js"></script>

</body>

</html>

