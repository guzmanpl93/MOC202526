<?php
include 'usuario.php';
session_start(); //Nota, si quieres que algo se ejecute, colocar encima session_start();

$user = $_GET['user'];
$pass = $_GET['pass'];
$valido = false;

$valores = [
    ["usuario" => "admin", "password" => "1234"],
    ["usuario" => "Guzman", "password" => "MOC2526"],
    ["usuario" => "Ana", "password" => "Ana"],
];

foreach($valores as $values){
    if ($values["usuario"] == $user && $values["password"] == $pass) {
        $valido = true;
    }
}


$usuario = new Usuario($user, $pass);


if($valido) {
    $_SESSION['usuario'] = $user; //Para almacenar el ususario
    $_SESSION['user'] = serialize($usuario);
    header("Location: index.php");
} else {
    header("Location: login.php");
}

?>