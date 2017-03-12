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
    
    <style>
      span {
        width: 100px;
        display: inline-block;
        text-align: left;
      }
    </style>

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
                        <a href="../usuario/index.html">Volver</a>
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
                        <label class="name">ELECTRIK MUSIK</label>
                        <hr class="star-light">
                        <label class="skills">Tu web de música electronica, don't stop</label>
                    </div>
					<br></br>
					
            </div>
        </div>
    </header>



    <!-- Portfolio Grid Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Peticion de canciones</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <?php
            session_start();
                    //si la conexion es distinta a la de admin te redirige a la pagina principal y si no crea la conexion
                    if ($_SESSION["rol"]!='usuario'){
                            session_destroy();
                            header("Location:../");
                    }else{
                            $connection = new mysqli("localhost", "root", "", "proyectophp");
                            //TESTING IF THE CONNECTION WAS RIGHT
                            if ($connection->connect_errno) {
                                printf("Connection failed: %s\n", $connection->connect_error);
                                exit();
                            }
                    }
                    //Si el rol "NO" es usuario redirigir a index.php
                

            //para que el usuario pueda pedir una cancion, le pasamos uno de los campos del formulario

            if (!isset($_POST["nombre"])) : ?>                   

                    <form method="post">

                        <br>
                            <span>Nombre cancion: </span><input type="text" name="nombre"><br/><br/>
                            <span>Autor/es: </span><input type="text" name="autor"><br/><br/>
                            <input class="btn btn-primary btn-xl page-scroll" name="Submit" value="Enviar" type="submit" >
                    </form>

                <?php else: ?>
                <?php 
                //guardamos los campos del fomulario en variables nuevas
                $nomb=$_POST['nombre'];
                $autor=$_POST['autor'];
            
                //hacemos el insert con las variables nuevas y null porque es un campo autocompletado
                $consulta= "INSERT INTO peticiones VALUES(null,'$nomb','$autor')";
                    $result = $connection->query($consulta);
                    //si no se realiza bien la insercion nos dará un mensaje de error    
                    if (!$result) {

                        echo "<br/><br/><br/><br/><br/><br/>";
                        echo "<h2 id='homeHeading'>Error en la inserción de los datos</h2>";
                        echo "<br/><br/><br/>";

                       //en caso contrario te dira que si se han insertado
                    } else {

                        echo "<br/><br/><br/><br/><br/><br/>";
                        echo "<h3 id='homeHeading'>La peticion ha sido un exito</h3>";
                        echo "<br/><br/>";
                        echo "<h3 id='homeHeading'><a href='../usuario/index.html'>volver</a></h3>";
                        echo "<br/><br/>";
                    }
    
                    ?>
                <?php endif ?>
        </div>
        <br></br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4>El administrador se conecta todos los domingos a las <font color="red">21:00</font> para ver las peticiones de canciones de la semana, y acto seguido empieza a buscarlas y a introducirlas en la página web, para que las podáis disfrutar antes del lunes a las <font color="red">8:00</font></h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    
    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>ENJOY</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Beats_Music_logo.svg/250px-Beats_Music_logo.svg.png"></img>
                </div>
                <div class="col-lg-4 col-lg-offset-1">
                    <img src="http://3.bp.blogspot.com/-FbUDnXFXos0/UG3kzQL2NZI/AAAAAAAAACo/WAHTHsrZblw/s250/i%2Blove%2Bmusic.jpg"></img>
                </div>
            </div>
        </div>
    </section>

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
    <script src="../estilo/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../estilo/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../estilo/js/jqBootstrapValidation.js"></script>
    <script src="../estilo/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="../estilo/js/freelancer.min.js"></script>

</body>

</html>
