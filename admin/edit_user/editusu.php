 <?php
            
            
            
            
        if (!isset($_POST["nombre"])) {
          
          //Conexion a la base de datos (localhost, usuario, contraseña, bd).
            $id=$_GET['id'];
          $consulta = "select * from usuarios where cod_usuario=$id";
            
    
       
          if ($result = $connection->query($consulta)) {
              if ($result->num_rows===0) {
                echo "No existe el usuario";
              } else {
                  
                $obj = $result->fetch_object();
                echo "<form action='view_edit.php' method='post'>";
                  echo "<input type='hidden' value='$obj->cod_usuario' name='codigo' type='text' required>";
                  echo "<p>Nombre usuario: <input value='$obj->nombre' name='nombre' type='text' required></p>";
                  echo "<p>Apellidos: <input value='$obj->apellidos' name='apellido' type='text'></p>";
                  echo "<p>Correo electronico: <input value='$obj->color' name='email' type='text'></p>";
                  echo "<p>Contraseña: <input value='$obj->password' name='pass' type='text'></p>";
        
            $connection = new mysqli("localhost", "root", "", "proyecto");
            if ($connection->connect_errno) {
                printf("Connection failed: %s\n", $connection->connect_error);
                exit();
            }
            $query="SELECT * FROM usuarios WHERE cod_usuario=$id";
            if ($result = $connection->query($query)) {
                $obj = $result->fetch_object();
                $codigo=$obj->cod_usuario;
            }
              }
              
          } else {
                echo "Wrong Query";
                } 
        } else {
            
            
            
            if ($insert = $connection->query("update usuarios set cod_usuario='".$_POST["codigo"]."', nombre='".$_POST["nombre"]."',  apellidos='".$_POST["apellido"]."', correo_electronico='".$_POST["email"]."', Contraseña='".$_POST["pass"]."' where cod_usuario=".$_POST['codigo'].";")) {
                          
                          
            echo "<h3 id='homeHeading'>Los datos han sido modificados correctamente</h3>";
            
           
             } else {
                
                mysqli_error($connection);
                
             }
            
            
             
        }
    ?>