<?php 
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (!isset($_SESSION["email"]) || empty($_SESSION["email"])) {
    header("Location: login.php");
    die();
}

require_once("../includes/db.php");

$userID = isset($_GET["user"]) ? $_GET["user"] : header("Location: dashboard.php?error=1") && die();
$stmt = $conx->prepare("SELECT * FROM usuarios WHERE id = ?");
$stmt->bind_param("i", $userID);
$stmt->execute();
$res = $stmt->get_result();
$user = $res->fetch_object();
$stmt->close();

if ($res->num_rows !== 1) {
    header("Location: dashboard.php?error=1");
    die();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newUsername = isset($_POST["username"]) ? trim($_POST["username"]) : null;
    $newEmail = isset($_POST["email"]) ? trim($_POST["email"]) : null;
    $newPassword = isset($_POST["password"]) ? trim($_POST["password"]) : null;

    if (empty($newUsername) || empty($newEmail) || empty($newPassword)) {
        header("Location: edit.php?error=1&user=" . $userID);
        die();
    }
    if (strlen($newPassword) < 8) {
        header("Location: edit.php?error=2&user=" . $userID);
        die();
    }

    $stmt = $conx->prepare("UPDATE usuarios SET username = ?, email = ?, password = ? WHERE id = ?");
    $stmt->bind_param("sssi", $newUsername, $newEmail, $newPassword, $userID);
    $stmt->execute();
    $stmt->close();

    header("Location: dashboard.php?done=1");
    die();
}

$error = isset($_GET["error"]) ? $_GET["error"] : null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="../includes/css/styles.css">
    <script src="../includes/js/functions.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Editar Usuario</h1>
        <?php if ($error == 1) { ?>
            <div class="error">Los campos no pueden estar vacíos!</div>
        <?php } elseif ($error == 2) { ?>
            <div class="error">La contraseña debe tener al menos 8 caracteres!</div>
        <?php } ?>

        <form method="post" action="">
            <label>Nombre de usuario:</label><br>
            <input type="text" name="username" value="<?php echo $user->username; ?>" required><br>
            <label>Email:</label><br>
            <input type="text" name="email" value="<?php echo $user->email; ?>" required><br>
            <label>Contraseña:</label><br>
            <div class="password-container">
                <input class="password" type="password" name="password" value="<?php echo $user->password; ?>" required>
                <button type="button" name="toggleButton" class="toggleButton" onclick="togglePassword()">Mostrar</button>
            </div>
            <input type="submit" value="Editar">
        </form>
    </div>
</body>
</html>