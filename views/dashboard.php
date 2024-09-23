<?php 
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (!isset($_SESSION["email"]) || empty($_SESSION["email"])) {
    header("Location: login.php");
    die();
}

require_once("../includes/db.php");
$res = $conx->query("SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="../includes/js/functions.js" defer></script>
    <link rel="stylesheet" href="../includes/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Administrar Usuarios</h1>
        <a href="register.php">Registrar Usuario</a>
        
        <?php
        $error = isset($_GET["error"]) ? $_GET["error"] : null;
        $done = isset($_GET["done"]) ? $_GET["done"] : null;

        if ($error == 1) {
            echo "<div class='error'>Error al modificar/eliminar usuario, intente nuevamente.</div>";
        }
        if ($done == 1) {
            echo "<div class='done'>Los campos han sido modificados con éxito.</div>";
        }
        if ($done == 2) {
            echo "<div class='done'>El usuario ha sido eliminado con éxito.</div>";
        }
        ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $res->fetch_object()) { ?>
                <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->username; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->password; ?></td>
                    <td>
                        <a href="edit.php?user=<?php echo $row->id; ?>">Editar</a> |
                        <a href="#" onclick="popup('../controllers/UserController.php?op=DELETE&user=<?php echo $row->id; ?>', '<?php echo $row->username?>')">Eliminar</a>                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <a href="../controllers/UserController.php?op=LOGOUT">Cerrar Sesión</a>
    </div>
</body>
</html>