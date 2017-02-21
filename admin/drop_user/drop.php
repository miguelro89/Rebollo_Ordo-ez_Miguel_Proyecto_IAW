

<?php

  //Open the session
  session_start();

    if ($_SESSION["rol"]!='admin'){
       session_destroy();
     header("Location:../");
  }
?

  if (!isset($_SESSION["user"])) {

    //User not logged
    session_destroy();
    header("Location: ../../index.html");
  }

  //Already logged
  if (isset($_GET["id"])) {

    //CREATING THE CONNECTION
    $connection = new mysqli("localhost", "miguel", "", "proyectophp");

    //TESTING IF THE CONNECTION WAS RIGHT
    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
        exit();
    }
      

    $selec_usuarios="select * from usuarios where id=?;";
      
    //BUILDING THE DELETE  QUERY
    $query = $connection->prepare("DELETE FROM usuarios
      WHERE id=?");

    //Binding the ? to the post values
    $query->bind_param("s",$_GET["id"]);

    if ($query->execute()) {

        //No rows returned
        if ($query->affected_rows===0) {
          echo "No user deleted";
        } else {

          echo "User deleted";
        }

    } else {
      echo "Wrong Query";

    }

  } else {

    echo "No element selected";
  }

 ?>
