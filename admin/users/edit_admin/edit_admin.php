<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Editar cuenta</title>

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
                        <a class="page-scroll" href="../users.php">Volver</a>
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
                <h2 id="homeHeading">Modificar cuenta</h2>
                <hr>
                <?php

                    session_start();

                    if ($_SESSION["rol"] != "admin") {
                        header('Location: ../index.html');
                    } else {
                        $connection = new mysqli("localhost", "root", "", "proyectophp"); 
                        //Metemos en una variable, el nombre a través del $_session
                        $id_usu=$_SESSION['username'];
                        //hacemos la consulta comparando los nombres de la BD con nuestro usuario logueado
                            $consulta="SELECT * FROM usuarios WHERE nombre='$id_usu'";
                            $result= $connection -> query($consulta);
                        //si la consulta no se ha realizado correctamente nos dara un mensaje de error, en caso contrario guardaremos todos los datos en una variable
                            if(!$result){
                                echo "error al obtener datos del usuario";
                            }else{
                                $ver_datos = $result->fetch_object();
                            }
                         //TESTING IF THE CONNECTION WAS RIGHT
                        if ($connection->connect_errno) {
                            printf("Connection failed: %s\n", $connection->connect_error);
                            exit();
                        }
                    }
                    //Si el rol "NO" es usuario redirigir a index.html
                


                if (!isset($_POST["nombre"])) :?> 
                    <form method="post">
                        <br>
                            <span>Nombre: </span><input type="text" name="nombre" value="<?php echo $ver_datos->nombre;?>"><br/><br/>
                            <span>Apellidos: </span><input type="text" name="apellido" value="<?php echo $ver_datos->apellidos?>"><br/><br/>
                            <span>Correo electronico: </span><input type="email" name="email" value="<?php echo $ver_datos->correo_electronico?>"><br/><br/>
                            <span>Contraseña: </span><input type="password" name="pass" value="<?php echo $ver_datos->password?>"><br/><br/>   
                            <input class="btn btn-primary btn-xl page-scroll" name="Submit" value="Enviar" type="submit" >
                    </form>

                <?php else: ?>
                <?php
                //pasamos todos los datos a nuevas variables para poder hacer despues el update más simple
                    $nombre=$_POST['nombre'];
                    $ape=$_POST['apellido'];
                    $correo=$_POST['email'];
                    $nuev_contra=$_POST['pass'];
                    $usuario=$_SESSION['username'];
                    $contra=$_SESSION['password'];


                        $consulta="UPDATE usuarios SET nombre='$nombre',  apellidos='$ape', correo_electronico='$correo', password=md5('$nuev_contra') where nombre='$usuario' and password='$contra'";
                


                        $mod_usu = $connection->query($consulta);
        
                
                        if (!$mod_usu) {

                            echo "<br/><br/><br/><br/><br/><br/>";
                            echo "<h3 id='homeHeading'>Error en la modificación de los datos</h3>";
                            echo "<br/><br/><br/>";


                       } else {

                            echo "<br/><br/><br/><br/><br/><br/>";
                            echo "<h3 id='homeHeading'>Los datos han sido modificados correctamente</h3>";
                            echo "<br/><br/>";
         
                       }
    

            ?>
              <?php endif ?>   
               
<br></br>
    <a href="../users.php">Volver</a>
<br></br>      
                
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