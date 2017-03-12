<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Borrar usuario</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../../estilo/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../../estilo/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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

<header>
        <div class="header-content">
            <div class="header-content-inner">
                <h2 id="homeHeading">Borrar un usuario</h2>
                <hr>

<?php

  //Abrimos la conexion y hacemos un if para saber si admin o no, ni no lo es nos manda a la pagina principal
  session_start();
    if ($_SESSION["rol"]!='admin'){
       session_destroy();
     header("Location:../");
  //en caso contrario me crea la conexion
    }else{
        $connection = new mysqli("localhost", "root", "", "proyectophp");
        //Comprobamos que se ha realizado la conexion
        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }
    }

  //cogemos por get el campo id del archivo anterior para poder borrar al usuario
  if (isset($_GET["id"])) {

    $id=$_GET["id"];  
    
    echo "<br></br>";
      
    //Construimos la consulta que borra al usuario
    $borrar = $connection->query("DELETE FROM usuarios
      WHERE cod_usuario=$id");


        //Si la consulta no se ha hecho, me dara mensaje de error
        if ($borrar==false) {
            
          echo "<br/><br/><br/><br/><br/><br/>";
          echo "<h3 id='homeHeading'>No se ha eliminado ningun usuario</h3>";
          echo "<br/><br/><br/>";
        // en caso contrario, nos dira que se ha eliminado
        } else {
          
          echo "<br/><br/><br/><br/><br/><br/>";
          echo "<h3 id='homeHeading'>El usuario se ha eliminado correctamente</h3>";
          echo "<br/><br/><br/>";
        }
  //en caso que no exista ese id, habrá fallo en la conexion
  } else {
      echo "Fallo en la conexion";
  }

 ?>
             </div>
        </div>
    </header> 
    <br></br> 
    <a href="view_user.php">Volver</a>
    <br></br>
       
        <!-- jQuery -->
    <script src="../../../estilo/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../estilo/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/estilo/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="/estilo/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="../../estilo/js/creative.min.js"></script>

</body>

</html>
        