<?php
require 'usuarios.php';

$usuario = $_POST['txtUsuario'];
$passwd = $_POST['txtPassword'];

header('Content-Type: application/json');
echo Usuario::login($usuario,$passwd);