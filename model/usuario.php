<?php
    require("conexion.php");

    class Usuario extends Conexion{
        
        public function __construct(){

            parent::__construct();
        }

        public function registrarUsuario($name, $lastname, $gender, $email, $password){

            $sql = 'INSERT INTO usuario (`nombre`, `apellido`, `genero`, `correo`, `contrasena`) VALUES (?,?,?,?,?)';

            $result = $this->conexion_db->prepare($sql);

            $result->bind_param("sssss",$name,$lastname,$gender,$email,$password);
        
            $result->execute();
            return $result;
                 
        }

        public function validarUsuario($email, $password){

            $sql = 'SELECT * FROM usuario WHERE correo = ? AND contrasena=?';

            $result = $this->conexion_db->prepare($sql);

            $result->bind_param("ss",$email,$password);

            $result->execute();
            $result->store_result();
            return $result->num_rows;
            
        }
    }
?>