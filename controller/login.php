<?php
    $email = $_POST["email"];
    $password = $_POST["password"];

    if($email == "juan123@gmail.com" && $password == "12345678"){
        echo "Has iniciado correctamente";
    }else{
        echo "Usuario o contraseña incorrecto";
    }

    // Alejo es gay
?>