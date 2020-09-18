<?php

    if(isset($_POST["logIn"])){
        
        require("../controller/login.php");
    
        $message="";
    
        if($numsFila !== 0){
    
            session_start();
            $_SESSION["email"] = $email;
            header("location:registeredUsers.php");
    
        }else{
                $message = "Correo o contraseña incorrecta";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="form-container">
                <legend>Login</legend>
                <label for="email">Correo Electrónico</label>
                <input type="email" name="email" placeholder="Tu correo electrónico" required>
                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="Tu contraseña" required>
                <input type="submit" value="Ingresar" name="logIn">
                <div class="checkbox-container">
                    <input type="checkbox" name="rememberUser">
                    <label for="rememberUser">Recordar Usuario</label>
                </div>
                <?php if(!empty($message)):?>
                    <p> <?= $message ?></p>
                <?php endif ?>

                <p>¿No tienes cuenta? <a href="register.php">Click aquí</a></p> 
            </form> 
    </div>
</body>
</html>