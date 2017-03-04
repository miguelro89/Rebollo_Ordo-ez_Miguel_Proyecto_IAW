<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modificar cancion</title>

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
  }

  //Already logged
  if (isset($_GET["id"])) {

    $id=$_GET["id"];  
    
    //CREATING THE CONNECTION
    $connection = new mysqli("localhost", "root", "", "proyectophp");

    //TESTING THE CONECTION
    ?>
        <form method="post">
             <?php
             //CREATING THE CONNECTION
             $connection = new mysqli("localhost", "root", "", "proyectophp");
             //TESTING IF THE CONNECTION WAS RIGHT
             if ($connection->connect_errno) {
                 printf("Connection failed: %s\n", $connection->connect_error);
                 exit();
             }
            ?>
            
             <br>
                 <span>Nombre_cancion: </span><input type="text" name="nombre"><br/><br/>
                 <span>Autores: </span><input type="text" name="apellido"><br/><br/>
                 <span>Año_publicacion: </span><input type="email" name="email"><br/><br/>
                 <span>Id_genero: </span><input type="password" name="pass"><br/><br/>
                 <span>Enlace_youtube: </span><input type="text" name="enlace"><br/><br/>       
                 <input class="btn btn-primary btn-xl page-scroll" name="Submit" valutype="submit" >
                    </form>
    <?php
    echo $id;
      
    //BUILDING THE DELETE  QUERY
    $borrar = $connection->query("update canciones set nombre_cancion='".$_POST["nombre_cancion"]."',  autores='".$_POST["autores"]."', ao_publicacion='".$_POST["ao_publicacion"]."', id_genero='".$_POST["id_genero"]."',enlace_youtube='".$_POST["enlace_youtube"]."' where id_cancion=$id");


        //No rows returned
        if ($borrar->rows===0) {
          echo "No se ha modificado ninguna cancion";
        } else {

          echo "La cancion se ha modificado correctamente";
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