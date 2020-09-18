<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();

        if(!isset($_SESSION["email"])){
            header("location:../view/index.php");
        }
    ?>

    <h1>Bienvenido</h1>
    <p>Has ingresado sesión correctamente</p>
    <a href="../controller/signOff.php">Cerrar Sesión</a>
</body>
</html>