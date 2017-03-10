<?php
require 'conexion.php';
require 'usuario.php';

$username = 'kevin';
$password = 'root';

$usuario = Usuario::login($username,$password);

var_dump($usuario);