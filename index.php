<?php

  //Abrir la sesion
  session_start();

  if (isset($_SESSION["user"])) {
    //Sesion creada
    //Mostrar la sesion y tipo
    var_dump($_SESSION);
  } else {
    session_destroy();
    header("Location: login.php");
  }


 ?>
