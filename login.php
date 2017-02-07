<?php
require 'usuarios.php';

session_start();
header('Content-Type: application/json');

if($_SESSION['user']){ 
    echo json_encode($_SESSION['user']);
} else {
    $usuario = $_POST['txtUsuario'];
    $passwd = $_POST['txtPassword'];
    echo Usuario::login($usuario,$passwd);
}