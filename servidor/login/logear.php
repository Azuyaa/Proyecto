<?php session_start();
    include "../../clases/Auth.php";
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $Auth = new Auth();

    if ($Auth->logear($usuario, $password)) {
        header("location:/login/home/index.html");
    } else {
        echo "Clave o usuario incorrecta intenta de nuevo";
    }

?>