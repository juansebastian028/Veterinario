<?php

    require("conexion.php");

    class Mascota extends Conexion{

        private $conexion_db;

        public function __construct(){

            $this->conexion_db = Conexion::conectar();
        }

        public function getMascostas(){
            $sql = 'SELECT mascota.id, mascota.nombre AS nombreMascota, raza.nombre AS nombreRaza, mascota.nombreDueno, mascota.imagen FROM mascota INNER JOIN raza ON mascota.razaId = raza.id';

            if($exec_query = $this->conexion_db->query($sql)){
    
                $result= $exec_query->fetch_all(MYSQLI_ASSOC);

                return $result;
            }
        }

        private function getRazas(){
            $sql = 'SELECT nombre FROM raza';

            if($exec_query = $this->conexion_db->query($sql)){
    
                $result= $exec_query->fetch_all(MYSQLI_ASSOC);

                return $result;
            }

        }

        public function eliminarMascota($id){
            $sql = "DELETE FROM mascota WHERE id=$id";
            

            if ($this->conexion_db->query($sql)) {
                 return true;
              } else {
                 return false;
              }
        }

        public function registrarMascota($name, $breed, $ownerName, $img){

            $razas = $this->getRazas();
            $encontrado = false;

            if(!$encontrado){

                foreach($razas as $raza){
                    
                    if($raza['nombre'] === $breed){
                        $encontrado =  true;
                    }
                }
            }

            if(!$encontrado){
                $this->registrarRaza($breed); 
            }

            $sql = 'INSERT INTO mascota(nombre, nombreDueno, razaId, imagen) VALUES (?,?,(SELECT id FROM raza WHERE raza.nombre=?),?)';

            $result = $this->conexion_db->prepare($sql);

            $result->bind_param("ssss",$name,$ownerName,$breed,$img);
            $result->execute(); 
            
            return $result;

        }

        private function registrarRaza($breed){

            $sql = 'INSERT INTO raza(nombre) VALUES (?)';
            
            $result = $this->conexion_db->prepare($sql);

            $result->bind_param("s",$breed);
            $result->execute();   
        }

    }
?>