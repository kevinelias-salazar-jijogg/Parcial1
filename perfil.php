<?php
require 'usuario.php'; 
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location:login.php');
} else {
    $usuario = $_SESSION['usuario'];
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
</head>
<body bgcolor="grey">
    <form>
        <fieldset>
            <legend>Datos Usuario</legend>
                <label for="Image">Imagen</label>
                    <input type="image" name="image" id="image"value="<?= $usuario->foto;?>">
                <div class="divider"></div>
                <label for="txtUsuario">Usuario:</label>
                    <input type="text" name="txtUsuario" id="txtUsuario" disabled=true value="<?= $usuario->username;?>">
                <div class="divider"></div>
                <label for="txtEmail">Email:</label>
                    <input type="text" name="txtEmalil" id="txtEmail" disabled=true value="<?= $usuario->email;?>">
                <div class="divider"></div>
                <label for="txtNombre">Nombre:</label>
                    <input type="text" name="txtNombre" id="txtNombre" value="<?= $usuario->nombres;?>">
                <div class="divider"></div>
                <label for="txtApellidos">Apellidos:</label>
                    <input type="text" name="txtApellidos" id="txtApellidos" value="<?= $usuario->apellidos;?>">
                <div class="divider"></div>
                <label for="txtrol_id">rol_id:</label>
                    <input type="text" name="txtrol_id" id="txtrol_id" value="<?= $usuario->rol_id;?>">
            <div class="divider"></div>
            <button>Guardar</button>
        </fieldset>
    </form>
</body>
</html>