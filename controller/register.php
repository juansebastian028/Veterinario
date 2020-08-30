<?php
        //Importo al php externo
        require_once("datos_conexion.php");
        require_once("cifrado_password.php");

        //Declaracion de variables del formulario
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repPassword = $_POST["repPassword"];

       
        if($password === $repPassword){
                
                $conexion = mysqli_connect($servidorDB,$usernameDB,$passwordDB,$nameDB);

                if(!$conexion){
                        die("No se pudo conectar al servidor " . mysqli_connect);
                }

                echo "Conexión exitosa <br>";

                //Ciframos la contraseña
                $contraCifrada =  cifradoMurcielago($password);
                
                $consulta = "INSERT INTO usuario (`nombre`, `apellido`, `genero`, `correo`, `contrasena`) VALUES ('$name','$lastname','$gender','$email','$password')";

                $resp = mysqli_query($conexion,$consulta);

                if($resp){
                    echo "Se inserto el usuario exitosamente";    
                }else{
                    echo "No se inserto el usuario exitosamente";        
                }

                mysqli_close($conexion);
                
        }else{
                echo "Las contraseñas no coinciden";
        }

?>