<?php

include("conexion.php");

if(isset($_POST['register'])){
    if(
        strlen(string: $_POST['name']) >= 1 &&
        strlen(string: $_POST['email']) >= 1 &&
        strlen(string: $_POST['direction']) >= 1 &&
        strlen(string: $_POST['phone']) >= 1 &&
        strlen(string: $_POST['password']) >= 1 
        ) {
            $name=trim(string: $_POST['name']);
            $email=trim(string: $_POST['email']);
            $direction=trim(string: $_POST['direction']);
            $phone=trim(string: $_POST['phone']);
            $password=trim(string: $_POST['password']);
            $fecha=date(format: "d/m/y");
            $consulta="INSERT INTO datos(nombre,email,direccion,telefono,contraseña,fecha)
               VALUES('$name','$email','$direction','$phone','$password','$fecha')";
            $resultado=mysqli_query(mysql: $conex,query: $consulta);
            if($resultado) {
             ?>
             <h3 class="success" >Tu registro se ha completado</h3>
             <?php   
            } else {
             ?>
                <h3 class="error"> </h3>
             <?php 
            }  
        } else {
            ?>
              <h3 class="error">Llena todos los campos</h3>
            <?php 
        }
}

?>