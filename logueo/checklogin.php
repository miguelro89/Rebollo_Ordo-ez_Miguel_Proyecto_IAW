<?php
  session_start();
?>

<?php
            //hacemos la conexion con la base de datos
            $connection = new mysqli('localhost', 'root', '', 'proyectophp');
            //comprobación de errores
            if ($connection->connect_error) {
             die("La conexion ha fallado: " . $connection->connect_error);
            }
            //guardamos en variables el nombre de usuario y la pass en md5, ya que el logueo se hace con el nombre y la contraseña
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $consulta = "SELECT * FROM usuarios WHERE nombre ='$username' AND password='$password'";
            $result = $connection->query($consulta);
            $obj=$result->fetch_object();
            //si hacemos el obj de la consulta con los datos correctos, me redirige a admin o user dependiendo del rol que posee, si no al estar vacio me redirige al index ya que no se encuentra en la BD
            if ($obj!=NULL) {
                $_SESSION["username"]=$obj->nombre;
                $_SESSION["rol"] = $obj->rol;
                $_SESSION["password"] = $obj->password;
                //si el rol es distinto de admin mandame al index del usuario, en caso contrario al index del admin
                if ($obj->rol!="admin") {
                    header('Location: ../usuario/index.html');
                 } else {
                     header('Location: ../admin/index.php');
                }
             //si no encuentra esos datos en la base de datos me da fallos y no loguea
             } else {
                header('Location: index.html?msg=error');
             }
            //cerramos la conexion
             mysqli_close($connection);
?>
