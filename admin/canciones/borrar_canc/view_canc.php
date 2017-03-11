<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mostrar usuarios</title>

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
                        <a class="page-scroll" href="../canciones.php">Volver atras</a>
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
                <h2 id="homeHeading">Borrar cancion</h2>
                <hr>
                <?php
                    //abrimos sesion
                    session_start();
                    //si el rol es distinto de admin, me redirige al index
                    if($_SESSION["rol"] != "admin") {
                         session_destroy();
                            header("Location:../");
                    //Si el rol es admin me crea la conexion
                    } else {
                         $connection = new mysqli("localhost", "root", "", "proyectophp");
                       //Conexion a la base de datos (localhost, usuario, contraseña, bd).
                        if ($connection->connect_errno) {
                            printf("Connection failed: %s\n", $connection->connect_error);
                            exit();
                        }
                    }
                   
                
                ?>

                <table border="1">
                    <tr>
                     <th>id cancion</th>
                     <th>nombre cancion</th>
                     <th>autor/es</th>
                     <th>año publicacion</th>
                     <th>genero</th>
                     <th>enlace</th>
                    </tr>

                <?php


                //Para eliminar, seleccionamos todos los campos con una consulta
                if ($result = $connection->query("SELECT * FROM canciones;")) {
                } else {
                // Si no hace la consulta es error, por lo que muestro el error
                    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                }
                // mostramos todos los datos a traves del bucle de nuestras canciones y esa informacion la almacenamos en obj
                while($obj = $result->fetch_object()) {
                    echo "<tr>";
                        echo "<td>".$obj->id_cancion."</td>";
                        echo "<td>".$obj->nombre_cancion."</td>";
                        echo "<td>".$obj->autores."</td>";
                        echo "<td>".$obj->ao_publicacion."</td>";
                        echo "<td>".$obj->id_genero."</td>";
                        echo "<td>".$obj->enlace_youtube."</td>";
                        echo "<td><form id='form0' method='get'>
                          <a href='drop_canc.php?id=$obj->id_cancion'>
                            <img src='../../../imgs/borrar.jpeg' width='30%';/>
                          </a>
                        </form></td>";
                    echo "</tr>";
                }
          
          $result->close(); // Cierramos la consulta
          unset($obj);
          unset($connection); // Cierramos la conexión
          ?>
                  
                
                </table> 
                
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