<?php
    require('../../model/mascotaModel.php');
    
    $id = json_decode($_GET["idMascota"]);

    $mascota = new Mascota();
    $estaEliminada = $mascota->eliminarMascota($id);
    Mascota::cerrarConexion();

    if($estaEliminada){
        echo json_encode("Se ha eliminado la mascota con exito");
    }else{
        echo json_encode("Se ha eliminado la mascota con exito");
    }
?>