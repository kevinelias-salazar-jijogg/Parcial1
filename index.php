<?php
require 'usuario.php';

session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location:login.php');
} else {
    $usuario = $_SESSION['usuario'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a mi plataforma</title>
    <style>
        a { color: blue; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .resaltado:hover {
            background-color: red;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body bgcolor="grey">
    <h2>Bienvenido <?= $usuario->getNombreCompleto(); ?></h2>
    <h2>Nombre de usuario: <span class="resaltado"><?= $usuario->username; ?></span></h2>
    <a href="perfil.php">Editar perfil</a>
</body>
</html>