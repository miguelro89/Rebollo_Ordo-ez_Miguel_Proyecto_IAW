<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECHNO</title>
  <body>
    <table>
      <tr>
          <td>id cancion</td>
          <td>nombre cancion</td>
          <td>autor/es</td>
          <td>Año publicacion</td>
          <td>id genero</td>
          <td>enlace</td>
          <td>puesto</td>
      </tr>

      <?php
        session_start();
      ?>

      <?php

        $conexion=mysqli_connect('localhost','miguel','','proyectophp');
        $consulta="SELECT * FROM canciones WHERE id_genero= 'techno' GROUP BY id_genero";
        $result = mysqli_query($conexion, $consulta);


      while ($fila=mysqli_fetch_array($result)) {
        echo "<tr><td>";
        echo $fila['id_cancion']."</td><td>";
        echo $fila['nombre_cancion']."</a></td><td>";
        echo $fila['autores']."</a></td><td>";
        echo $fila['ao_publicacion']."</td><td>";
        echo $fila['id_genero']."</td></tr>";
        echo $fila['enlace_youtube']."</td></tr>";
        echo $fila['puesto']."</td></tr>";
      }


      $result->close();
      unset($fila);
      unset($conexion);


?>
  </table>
  </body>
</html>
