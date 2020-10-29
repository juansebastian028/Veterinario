<?php
    require('../../model/mascotaModel.php');
    header("Content-type: application/text; charset=utf-8");

    $mascota = new Mascota();
    $resp = $mascota->getMascostas();
    Mascota::cerrarConexion();
    
    echo json_encode($resp);
?>