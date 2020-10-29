<?php
    require('../../model/mascotaModel.php');
    header("Content-type: application/json; charset=utf-8");
    
    $name = $_POST["name"];
    $breed = $_POST["breed"];
    $ownerName = $_POST["ownerName"];
    $imgName = $_FILES['image']['name'];
    $imgType = $_FILES['image']['type'];
    $imgSize = $_FILES['image']['size'];
    $filename = $_FILES['image']['tmp_name'];
    $destinationFolder = $_SERVER[ 'DOCUMENT_ROOT'] . '/uploads/';

    require_once('../../model/imgServer.php');

    $imgServer = new ImageServer($imgName,$imgType,$imgSize,1000000);

    if($imgServer->validate_img_format()){

        if($imgServer->check_limit_size_img()){

            $imgServer->upload_image($filename,$destinationFolder);

            $mascota = new Mascota();
            $resp = $mascota->registrarMascota($name,$breed,$ownerName,$imgName);
            Mascota::cerrarConexion();
        
            if($resp){
                echo json_encode("Mascota registrada exitosamente");    
            }else{
                echo json_encode("No se pudo registrar la mascota");        
            }  
            
        }else{
            echo json_encode("El tamaño de la imagen es demasiado grande");
        }

    }else{
        echo json_encode("El archivo no es un formato de imagen válido");
    } 
?>