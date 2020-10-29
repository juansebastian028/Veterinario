<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinarios</title>
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
                    <a class="navbar__link "href="registeredUsers.php">Principal</a> 
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
    
    <button class="btn btn--center btn--primary" id="btnRegister">Registrar</button>

    <main class="container">

        <div class="card">
            <div class="image-container">
                <img class="card__image" src="https://www.housecallveterinarycareny.com/images/staff-bios/elizabeth-goodland-veterinarian-2.jpg" alt="">
            </div>
            <h3 class="card__title">Nombre y Apellidos</h3>
            <ul class="card__list">
                <li class="card__item"> <p>Cédula:</p> </li>
                <li class="card__item"> <p>Epecialidad:</p> </li>
            </ul>
        </div>
    </main>
    <div class="modal" id="registerModal">
        <form class="form">
            <legend class="form__legend">Ingresa los datos del Veterinario</legend>
            <input class="form__input" type="text" name="cc" placeholder="Cédula">
            <input class="form__input" type="text" name="nombre" placeholder="Nombre">
            <input class="form__input" type="text" name="apellido" placeholder="Apellido">
            <input class="form__input" type="text" name="especialidad" placeholder="Especialidad">
            
            <div class="btn-group">
                <input class="btn btn--center btn--danger btn--30" id="btnCancel" type="button" value="Cancelar">
                <input class="btn btn--center btn--primary btn--30" type="submit" value="Registar">
            </div>

        </form>
    </div>

    <script src="js/showModal.js"></script>
</body>
</html>