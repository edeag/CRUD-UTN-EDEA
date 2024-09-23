<?php 
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

require_once("../includes/db.php");

$operation = isset($_GET["op"]) ? $_GET["op"] : null;
$email = isset($_POST["email"]) ? trim($_POST["email"]) : null;
$password = isset($_POST["password"]) ? trim($_POST["password"]) : null;

if ($operation == "LOGIN") {
    $stmt = $conx->prepare("SELECT * FROM usuarios WHERE email = ? AND BINARY password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();

    if ($res->num_rows !== 1) {
        header("Location: ../views/login.php?error=1");
        die();
    }
} else if ($operation == "REGISTER") {
    $username = isset($_POST["username"]) ? trim($_POST["username"]) : null;
    $re_password = isset($_POST["re_password"]) ? trim($_POST["re_password"]) : null;
    
    if (empty($username) || empty($email) || empty($password) || empty($re_password)) {
        header("Location: ../views/register.php?error=3");
        die();
    }    
    if ($password !== $re_password) {
        header("Location: ../views/register.php?error=1");
        die();
    }
    if (strlen($password) < 8) {
        header("Location: ../views/register.php?error=4");
        die();
    }

    $stmt = $conx->prepare("SELECT * FROM usuarios WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $res = $stmt->get_result();
    $stmt->close();

    if ($res->num_rows !== 0) {
        header("Location: ../views/register.php?error=2");
        die();
    }

    $stmt = $conx->prepare("INSERT INTO usuarios (email, password, username) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $password, $username);
    $stmt->execute();
    $stmt->close();
} else if ($operation == "LOGOUT") {
    session_destroy();
    header("Location: ../views/login.php");
    die();
} else if ($operation == "DELETE") {
    $userID = isset($_GET["user"]) ? trim($_GET["user"]) : null;
    if ($userID == null) {
        header("Location: ../views/dashboard.php?error=1");
        die();
    }

    $stmt = $conx->prepare("SELECT * FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    $res = $stmt->get_result();
    $user = $res->fetch_object();
    $stmt->close();

    if ($res->num_rows !== 1) {
        header("Location: ../views/dashboard.php?error=1");
        die();
    }

    $stmt = $conx->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $userID);
    $stmt->execute();

    header("Location: ../views/dashboard.php?done=2");
    die();
} else {
    header("Location: ../views/login.php");
    die();
}

$_SESSION["email"] = $email;
header("Location: ../views/dashboard.php");
die();
?>
