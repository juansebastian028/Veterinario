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
        
            <form action="../controller/login.php" method="post" class="form-container">
                <legend>Login</legend>
                <label for="email">Correo Electrónico</label>
                <input type="text" name="email" placeholder="Tu correo electrónico" required>
                <label for="password">Contraseña</label>
                <input type="password" name="password" placeholder="Tu contraseña" maxlength="20" minlength="7" required>
                <input type="submit" value="Ingresar">
            </form>
        
</div>
</body>
</html>