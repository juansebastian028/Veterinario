<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas</title>
    <!--Normalize-->
    <link rel="stylesheet" href="styles/normalize.css">
    <!--Own CSS-->
    <link rel="stylesheet" href="styles/index.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!--Alertyfyjs-->
    <link rel="stylesheet" href="alertifyjs/css/alertify.min.css">
    <link rel="stylesheet" href="alertifyjs/css/themes/default.min.css">
    <link rel="stylesheet" href="alertifyjs/css/themes/semantic.min.css">
    <link rel="stylesheet" href="alertifyjs/css/themes/bootstrap.min.css">
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
                    <a class="navbar__link "href="veterinarios.php">Veterinarios</a> 
                </li>

                <li class="navbar__item"> 
                    <a class="navbar__link navbar__link--secundary" href="../controller/signOff.php">Cerrar Sesión</a> 
                </li>
            </div>

        </ul>
    </nav>
    
    <button class="btn btn--center btn--primary"  id="btnRegister">Registrar</button>

    <main class="container">

    </main>
    
    <div class="modal" id="registerModal">
        <form class="form" method="POST" enctype="multipart/form-data">
            <legend class="form__legend">Ingresa los datos de la mascota</legend>
            <input class="form__input" type="text" name="name" placeholder="Nombre">
            <input class="form__input" type="text" name="breed" placeholder="Raza">
            <input class="form__input" type="text" name="ownerName" placeholder="Nombre dueño">
            <input class="form__input" type="file" name="image">
            
            <div class="btn-group">
                <input class="btn btn--center btn--danger btn--30" id="btnCancel" type="button" value="Cancelar">
                <input class="btn btn--center btn--primary btn--30" type="submit" value="Registar">
            </div>

        </form>
    </div>

    <!--Alertyfy JS-->
    <script src="alertifyjs/alertify.min.js"></script>
    <!--Own JS-->
    <script src="js/showModal.js"></script>
    <script src="js/sendMascotas.js"></script>
</body>
</html>