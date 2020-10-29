<?php

    require("config.php");

    class Conexion{

        public static function conectar(){

            $connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

            if($connection->connect_errno){

                die('Error ' . $connection->connect_error);
            }
            return $connection;
        }

        public static function cerrarConexion(){
            $conexion_db = Conexion::conectar();
            $conexion_db->close();
        }
    }
?>