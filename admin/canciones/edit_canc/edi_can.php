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
    <link href="../../../estilo/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../../../estilo/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
           $id=$_GET['id'];
        $consulta="SELECT * FROM canciones WHERE id_cancion=$id";
        $result= $connection -> query($consulta);
        
        if(!$result){
            echo "error al obtener datos de la cancion";
        }else{
             $ver_datos = $result->fetch_object();
        }
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
             <br></br>
                 <span>Nombre_cancion: </span><input type="text" name="nombre" value="<?php echo $ver_datos->nombre_cancion?>"><br/><br/>
                 <span>Autores: </span><input type="text" name="autores" value="<?php echo $ver_datos->autores?>"><br/><br/>
                 <span>Año_publicacion: </span><input type="text" name="ao" value="<?php echo $ver_datos->ao_publicacion?>"><br/><br/>
                 <span>Id_genero: </span><input type="text" name="genero" value="<?php echo $ver_datos->id_genero?>"><br/><br/>
                 <span>Enlace_youtube: </span><input type="text" name="enlace" value="<?php echo $ver_datos->enlace_youtube?>"><br/><br/>       
                 <input class="btn btn-primary btn-xl page-scroll" name="submit" type="submit" >
        </form>
        
    <?php else : ?>
    <?php
     //Cada campo coresponde al propio de la BD, por post le pasamos el nombre que le hemos dado en el formulario
        $id=$_GET['id'];
        $nomb=$_POST['nombre'];
        $autor=$_POST['autores'];
        $ano=$_POST['ao'];
        $genero=$_POST['genero'];
        $enlace=$_POST['enlace'];
      
    //con el update modificamos los campos y al tenerlos en variables nuevas no hace falta pasarlas por post ya que lo hemos hecho premiamente
        $consulta="update canciones set nombre_cancion='$nomb',  autores='$autor', ao_publicacion='$ano', id_genero='$genero',enlace_youtube='$enlace' where id_cancion=$id";
        $borrar = $connection->query($consulta);


        //para saber si la consulta es buena o mala
        if ($borrar==true) {
            echo "<br></br>";
            echo "La cancion se ha modificado correctamente";
        } else {
            echo "No se ha modificado ninguna cancion";
        }
 ?>
 
 <?php endif ?>
 
<br></br>
    <a href="view_canc.php">Volver</a>
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
    <script src="../../../estilo/js/creative.min.js"></script>

</body>

</html>