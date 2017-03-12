<?php
//cerramos la conexion y la destruimos para desloguearse y mandarnos al index
session_start();
unset ($SESSION['username']);
session_destroy();

header('Location: ../');

?>
       