<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modificar usuarios</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../../estilo/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../../../estilo/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
    <br></br>
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
        $consulta="SELECT * FROM usuarios WHERE cod_usuario=$id";
        $result= $connection -> query($consulta);
        
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
    //TESTING THE CONECTION
    ?>
       
    <?php if(!isset($_POST['nombre'])) : ?>
        <form method="post">
             <br>
                 <span>Nombre: </span><input type="text" name="nombre" value="<?php echo $ver_datos->nombre?>"><br/><br/>
                 <span>Apellido: </span><input type="text" name="apellido" value="<?php echo $ver_datos->apellidos?>"><br/><br/>
                 <span>Correo electronico: </span><input type="email" name="email" value="<?php echo $ver_datos->correo_electronico?>"><br/><br/>                   
                 <input class="btn btn-primary btn-xl page-scroll" name="submit" type="submit" >
        </form>
        
    <?php else : ?>
    <?php
     
        //Cada campo corresponde al propio de la BD, por post le pasamos el nombre que le hemos dado en el formulario
        $nombre=$_POST['nombre'];
        $ape=$_POST['apellido'];
        $email=$_POST['email'];
        //con el update modificamos los campos y al tenerlos en variables nuevas no hace falta pasarlas por post ya que lo hemos hecho premiamente
        $consulta ="UPDATE usuarios SET nombre='$nombre',  apellidos='$ape', correo_electronico='$email' WHERE cod_usuario=$id";
        $modificar = $connection->query($consulta);
        //para saber si la consulta es buena o mala
        if ($modificar==false) {
            
            echo "<br/><br/><br/><br/><br/><br/>";
            echo "<h3 id='homeHeading'>No se ha modificado al usuario elegido</h3>";
            echo "<br/><br/><br/>";
            
        } else {
            
            echo "<br/><br/><br/><br/><br/><br/>";
            echo "<h3 id='homeHeading'>Cambios en los datos del usuario realizados correctamente</h3>";
            echo "<br/><br/><br/>";
        }
    ?>
 <?php endif ?>
  
<br></br>
    <a href="view_edit.php">Volver</a>
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


      