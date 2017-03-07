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
</head>
<body>
  <?php

  //Open the session
  session_start();
    //si la conexion es distinta a la de admin te edirige a la pagina principal y si no crea la conexion
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

    //TESTING THE CONECTION
    ?>
       
    <?php if(!isset($_POST['nombre'])) : ?>
        <form method="post">
             <br>
                 <span>Nombre_cancion: </span><input type="text" name="nombre"><br/><br/>
                 <span>Autores: </span><input type="text" name="autores"><br/><br/>
                 <span>Año_publicacion: </span><input type="text" name="ao"><br/><br/>
                 <span>Id_genero: </span><input type="text" name="genero"><br/><br/>
                 <span>Enlace_youtube: </span><input type="text" name="enlace"><br/><br/>       
                 <input class="btn btn-primary btn-xl page-scroll" name="submit" type="submit" >
        </form>
        
    <?php else : ?>
    <?php
        $id=$_GET['id'];
      
    //BUILDING THE DELETE  QUERY
        $consulta="update canciones set nombre_cancion='".$_POST["nombre"]."',  autores='".$_POST["autores"]."', ao_publicacion='".$_POST["ao"]."', id_genero='".$_POST["genero"]."',enlace_youtube='".$_POST["enlace"]."' where id_cancion=$id";
        $borrar = $connection->query($consulta);
       /* while($obj = $borrar->fetch_object()) {
            echo '<form action= edi_can.php method="post">;
                echo "<span>".$obj->nombre."name=nombre" </span>";
                echo "<span>".$obj->autores."</span>" name="autores";
                echo "<span>".$obj->ao."</span>" name="ao";
                echo "<span>".$obj->genero."</span>" name="genero";
                echo "<span>".$obj->enlace."</span>" name="enlace";
            echo </form>';
                
        };*/

        //para saber si la consulta es buena o mala
        if ($borrar==true) {
            echo "La cancion se ha modificado correctamente";
        } else {
            echo "No se ha modificado ninguna cancion";
        }
 ?>
 
 <?php endif ?>
 
<br></br>
    <a href="../edit_canc/view_canc.php">Volver</a>
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