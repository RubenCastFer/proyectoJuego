<?php
session_start();
if (!empty($_SESSION["usuario"])) {
    header("Location: index.php?controller=juego&action=menu");
}

function signUp()
{
    require './models/usuariosModel.php';
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $usuario = strip_tags($usuario);
        $usuario = stripslashes($usuario);
        $usuario = htmlspecialchars($usuario);
        $comprobar = comprobarUsuario($usuario);
        if (empty($comprobar)) {
            insertaUser($usuario);


            $_SESSION["usuario"] = $personaIdContrasenya["usuario"];
            header("Location: index.php?controller=juego&action=menu");
        } else {
            $error = "<p style='color:red'>El usuario ya existe inserte otro</p>";
        }
    }

    include "./views/signUpView.php";
}

function cerrarSesion()
{
    session_start();
    session_destroy();
    header("Location: index.php?controller=usuarios&action=signUp");
}
