<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Añadir usuario</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../../estilo/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../../../estilo/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="../../../estilo/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../../../estilo/css/creative.min.css" rel="stylesheet">
    
    <style>
      span {
        width: 100px;
        display: inline-block;
        text-align: left;
      }
    </style>
    
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top affix">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Music is life</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="../videos.php">Volver atras</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../../../logueo/logout.php">Cerrar sesion</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#contact"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h2 id="homeHeading">Añadir un video</h2>
                <hr>
                
                <?php

                    session_start();
                    //si la conexion es distinta a la de admin te redirige a la pagina principal y si no crea la conexion
                    if ($_SESSION["rol"]!='admin'){
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
                    //Si el rol "NO" es admin redirigir a index.php
                

            //para que el admin pueda insertar una cancion, cogemos por post un campo del formulario

            if (!isset($_POST["nombre"])) : ?>                   

                    <form method="post">

                        <br>
                            <span>Nombre video: </span><input type="text" name="nombre"><br/><br/>
                            <span>Deejay: </span><input type="text" name="deejay"><br/><br/>
                            <span>Lugar: </span><input type="text" name="lugar"><br/><br/>
                            <span>Genero: </span><input type="text" name="genero"><br/><br/>
                            <span>Enlace: </span><input type="text" name="enlace"><br/><br/>
                            <input class="btn btn-primary btn-xl page-scroll" name="Submit" value="Enviar" type="submit" >
                    </form>

                <?php else: ?>
                <?php 
                //insertamos en variables los valores del formulario, para hacer despues la insercion de los datos
                    $nombre=$_POST['nombre'];
                    $deejay=$_POST['deejay'];
                    $lugar=$_POST['lugar'];
                    $genero=$_POST['genero'];
                    $enlace=$_POST['enlace'];
                
                //creamos la variable consulta y hacemos la consulta con las variables definidas anteriormente
                $consulta= "INSERT INTO videos VALUES(NULL,'$nombre','$deejay','$lugar','$genero','$enlace')";
                    $result = $connection->query($consulta);
                    //si la consulta no se ha realizado, no muestra un error   
                    if (!$result) {
                            echo "<br/><br/><br/><br/><br/><br/>";
                            echo "<h2 id='homeHeading'>No se ha podido insertar el video</h2>";
                            echo "<br/><br/><br/>";

                    //en caso contrario
                    } else {
                            echo "<br/><br/><br/><br/><br/><br/>";
                            echo "<h3 id='homeHeading'>El video ha sido añadido</h3>";
                            echo "<br/><br/>";
                            echo "<h3 id='homeHeading'><a href='../videos.php'>volver</a></h3>";
                            echo "<br/><br/>";
                       }
    
                    ?>
                <?php endif ?>
                
                
            </div>
        </div>
    </header>   

   

    <!-- jQuery -->
    <script src="../../../estilo/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../estilo/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/estilo/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="/estilo/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="../../../estilo/js/creative.min.js"></script>

</body>

</html>