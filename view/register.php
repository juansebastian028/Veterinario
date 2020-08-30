<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        
            <form action="../controller/register.php" method="post" class="form-container">
                <legend>Register</legend>

                <label for="name">Nombre</label>
                <input type="text" name="name" placeholder="Tu nombre" required>

                <label for="lastname">Apellido</label>
                <input type="text" name="lastname" placeholder="Tu apellido" required>

                <label for="gender">Género</label>
                <div class="radio-container">
                    <input type="radio" name="gender" value="Masculino" required>
                    <label for="male">Masculino</label>

                    <input type="radio" name="gender" value="Femenino" required>
                    <label for="female">Femenino</label>
                </div>

                <label for="email">Correo Electrónico</label>
                <input type="mail" name="email" placeholder="Tu correo electrónico" required>

                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="Tu contraseña" pattern="^(?!\d+$)[a-zA-Z\d\s]+$" 
                title="Tu contraseña debe ser alfanúmerica" required>

                <label for="repPassword">Repetir Contraseña</label>
                <input type="password" name="repPassword" placeholder="Repite tu contraseña" pattern="^(?!\d+$)[a-zA-Z\d\s]+$" title="Tu contraseña debe ser alfanúmerica" required>

                <input type="submit" value="Registrarse" name="send-data">
            </form>
        
    </div>
</body>
</html>