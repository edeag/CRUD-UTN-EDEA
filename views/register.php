<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../includes/css/styles.css">
    <script src="../includes/js/functions.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Registro</h1>
        <?php 
        $error = isset($_GET["error"]) ? $_GET["error"] : null;
        if ($error) {
            echo "<div class='error'>";
            if ($error == 1) {
                echo "La contraseña no coincide!";
            } elseif ($error == 2) {
                echo "Ese usuario ya existe!";
            } elseif ($error == 3) {
                echo "Los campos no pueden estar vacíos!";
            } elseif ($error == 4) {
                echo "La contraseña debe tener al menos 8 caracteres!";
            }
            echo "</div>";
        }
        ?>
        <form action="../controllers/UserController.php?op=REGISTER" method="post">
            <input type="text" name="username" placeholder="Nombre de Usuario" required><br>
            <input type="email" name="email" placeholder="ej: tunombre@ejemplo.com" required><br>
            <div class="password-container">
                <input type="password" name="password" class="password" placeholder="Contraseña" required>
                <button type="button" name="toggleButton" class="toggleButton" onclick="togglePassword()">Mostrar</button>
            </div>
            <input type="password" name="re_password" class="re_password" placeholder="Confirmar Contraseña" required><br>
            <input type="submit" value="Registrarse">
        </form>
        <p>¿Ya tienes una cuenta? Inicia sesión <a href="login.php">aquí</a></p>
    </div>
</body>
</html>