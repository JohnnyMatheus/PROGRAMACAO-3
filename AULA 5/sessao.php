<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
    exit;
}

$usuario = $_SESSION['usuario'];
$email = $_COOKIE['email_usuario'] ?? 'Não lembrado';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo</title>
</head>
<body>
    <h2>Bem-vindo <?= $usuario?></h2>
    <p>E-mail lembrado <?= $email?>  </p>

    <a href="logout.php">Sair</a>
</body>
</html>


