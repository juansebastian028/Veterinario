<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <?php
        session_start();

        if(!isset($_SESSION["email"])){
            header("location:../view/login.php");
        }
    ?>
    <nav>
        <ul class="navbar">

            <li class="navbar__item"> 
                <p class="navbar__text--bold">Bienvenid@: 
                    <span class="navbar__text--normal"><?= $_SESSION["email"]?></span> 
                </p> 
            </li>

            <div class="navbar__links-container">
                <li class="navbar__item"> 
                    <a class="navbar__link "href="veterinarios.php">Veterinarios</a> 
                </li>

                <li class="navbar__item"> 
                    <a class="navbar__link "href="mascotas.php">Mascotas</a> 
                </li>

                <li class="navbar__item"> 
                    <a class="navbar__link navbar__link--secundary" href="../controller/signOff.php">Cerrar Sesión</a> 
                </li>
            </div>

        </ul>
    </nav>
</body>
</html>