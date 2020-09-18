<?php
        //Importo al php externo
        require("../model/usuario.php");
        require("cifrado_password.php");

        //Variables del formulario
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repPassword = $_POST["repPassword"];
        $message = "";
       
        if($password === $repPassword){
                
                $usuario = new Usuario();

                //Ciframos la contraseña
                $contraCifrada =  cifradoMurcielago($password);
                
                $resp = $usuario->registrarUsuario($name,$lastname,$gender,$email,$contraCifrada);

                if($resp){
                        $message = "Se inserto el usuario exitosamente";    
                }else{
                        $message = "No se pudo insertar el usuario";        
                }

        }else{
                $message = "Las contraseñas no coinciden";
        }

?>