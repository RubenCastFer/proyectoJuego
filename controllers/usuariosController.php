<?php
    session_start();
    if (!empty($_SESSION["tipo"])) {
        header("Location: index.php?controller=juego&action=menu");
    }
function login()
{
    require './models/usuariosModel.php';

    //    session_destroy();
    $error = "";
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuario = $_POST["usuario"];
            $usuario = strip_tags($usuario);
            $usuario = stripslashes($usuario);
            $usuario = htmlspecialchars($usuario);

            $contraseña = $_POST["pass"];
            $contraseña = strip_tags($contraseña);
            $contraseña = stripslashes($contraseña);
            $contraseña = htmlspecialchars($contraseña);

            $personaIdContrasenya = comprobarUsuario($usuario);
            //var_dump($personaIdContrasenya);
            if ($personaIdContrasenya == false) {
                $error = "<p style='color:red'>Usuario y contraseña incorrectas.</p>";
            } else {
                //var_dump(password_verify($contraseña, $personaIdContrasenya["contraseña"]));
                if (password_verify($contraseña, $personaIdContrasenya["contraseña"])) {
                    //echo "usuario y contraseña correctas";
                    $id = $personaIdContrasenya["id"];
                    $_SESSION["id"] = $id;
                    
                        $_SESSION["usuario"] = $personaIdContrasenya["usuario"];
                    

                    //echo $_SESSION["usuario"]." ".$_SESSION["id"];
                    header("Location: index.php?controller=juego&action=menu");
                } else {

                    $error = "<p style='color:red'>Usuario y contraseña incorrectas.</p>";
                    //echo $_SESSION["usuario"]." ".$_SESSION["id"];
                }
            }
        }
    
    include "./views/loginView.php";
}

function signUp()
{
    require './models/usuariosModel.php';
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (insertaUser($_POST['usuario'], password_hash($_POST['pass'], PASSWORD_DEFAULT))) {
            header("Location: index.php?controller=juego&action=menu");
            // $error = "<p style='color:green'>Usuario registrado correctamente.</p>";
        } else {
            $error = "<p style='color:red'>El usuario ya existe.</p>";
        }
    } 

    include "./views/signUpView.php";
}

function cerrarSesion()
{
    session_start();
    session_destroy();
    header("Location: index.php?controller=usuarios&action=login");
}
