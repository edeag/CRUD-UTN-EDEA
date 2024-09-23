<?php

$servidor = "127.0.0.1";
$user = "root";
$password = "";
$database = "primera_db";

$conx = new mysqli($servidor, $user, $password, $database);

if ($conx->connect_error){
    die("Error de conexión: ". $conx->connect_error);
}

?>