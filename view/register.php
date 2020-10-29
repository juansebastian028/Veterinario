<?php 
    if(isset($_POST["send-data"])){
        
        require("../controller/register.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/sessionStyles.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="form">
                <legend class="form__legend">Register</legend>

                <label for="name">Nombre</label>
                <input type="text" name="name" placeholder="Tu nombre" required>

                <label for="lastname">Apellido</label>
                <input type="text" name="lastname" placeholder="Tu apellido" required>

                <label for="gender">Género</label>

                <div class="radio-container">
                    <input type="radio" name="gender" value="Masculino" required>
                    <label class="radio-container__label" for="male">Masculino</label>

                    <input type="radio" name="gender" value="Femenino" required>
                    <label class="radio-container__label" for="female">Femenino</label>
                </div>

                <label for="email">Correo Electrónico</label>
                <input type="mail" name="email" placeholder="Tu correo electrónico" required>

                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="Tu contraseña" pattern="^(?!\d+$)[a-zA-Z\d\s]+$" 
                title="Tu contraseña debe ser alfanúmerica" maxlength="20" minlength="7" required>

                <label for="repPassword">Repetir Contraseña</label>
                <input type="password" name="repPassword" placeholder="Repite tu contraseña" pattern="^(?!\d+$)[a-zA-Z\d\s]+$" title="Tu contraseña debe ser alfanúmerica" maxlength="20" minlength="7" required>

                <input class="form__submit" type="submit" value="Registrarse" name="send-data">

                <?php if(!empty($message)):?>
                <p class="form__text"> <?= $message ?></p>
                <?php endif ?>
            </form>
        
    </div>
</body>
</html>