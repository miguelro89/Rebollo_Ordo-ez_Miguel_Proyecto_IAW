

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

    //TESTING IF THE CONNECTION WAS RIGHT
    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
        exit();
    }
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
