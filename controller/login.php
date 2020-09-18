<?php
    //Importo php externo
    require("../model/usuario.php");
    require("cifrado_password.php");

    //Variables del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];

    $usuario = new Usuario();

    //Ciframos la contraseña
    $contraCifrada =  cifradoMurcielago($password);

    //Retorna 0 si no encontro el registro y 1 si lo encontro
    $numsFila = $usuario->validarUsuario($email,$contraCifrada);
    
?>