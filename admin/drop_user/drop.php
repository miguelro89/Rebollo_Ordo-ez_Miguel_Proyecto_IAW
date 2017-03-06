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
    <link href="../../estilo/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../../estilo/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<?php

  //Open the session
  session_start();
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

  //Already logged
  if (isset($_GET["id"])) {

    $id=$_GET["id"];  
    echo $id;
      
    //BUILDING THE DELETE  QUERY
    $borrar = $connection->query("DELETE FROM usuarios
      WHERE cod_usuario=$id");


        //No rows returned
        if ($borrar->rows===0) {
          echo "No se ha eliminado ningun usuario";
        } else {

          echo "El usuario se ha eliminado correctamente";
        }

  } else {
      echo "Fallo en la conexion";
  }

 ?>
<br></br>
    <a href="../panel.php">Volver</a>
    <br></br>
    <!-- jQuery -->
    <script src="../../estilo/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../estilo/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/estilo/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="/estilo/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="../../estilo/js/creative.min.js"></script>

</body>

</html>
        
   