<?php
  session_start();
?>

<?php
            //conexion
            $connection = new mysqli('localhost', 'root', '', 'proyectophp');
            //comprobación de errores
            if ($connection->connect_error) {
             die("La conexion ha fallado: " . $connection->connect_error);
            }
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM usuarios WHERE nombre = '$username' AND password='$password'";
            $result = $connection->query($sql);
            $obj=$result->fetch_object();
            if ($result->num_rows > 0) {

                $_SESSION["username"]=$obj->nombre;
                $_SESSION["rol"] = $obj->rol;
                $_SESSION["password"] = $obj->password;

                if ($obj->rol!="admin") {
                  header('Location: ../usuario/');
                 } else {
                     header('Location: ../admin/');
                }

             } else {
                header('Location: index.html?msg=error');
             }

             mysqli_close($connection);
?>
