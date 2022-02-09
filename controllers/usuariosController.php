<?php
function login()
{
    require './models/usuariosModel.php';
    session_start();
    //    session_destroy();
    $error = "";
    if (empty($_SESSION["tipo"])) {
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
            var_dump($personaIdContrasenya);
            if ($personaIdContrasenya == false) {
                echo "usuario incorrecto";
            } else {
                var_dump(password_verify($contraseña, $personaIdContrasenya["contraseña"]));
                if (password_verify($contraseña, $personaIdContrasenya["contraseña"])) {
                    //echo "usuario y contraseña correctas";
                    $id = $personaIdContrasenya["id"];
                    $_SESSION["id"] = $id;
                    if (!empty($tipo)) {
                        $_SESSION["usuario"] = $usuario["usuario"];
                    }

                    // echo $_SESSION["usuario"];
                    // echo $_SESSION["usuario"]." ".$_SESSION["id"];
                    header("Location: ");
                } else {

                    $error = "usuario y contraseña incorrectas";
                    //echo $_SESSION["usuario"]." ".$_SESSION["id"];
                }
            }
        }
    } else if (!empty($_SESSION["usuario"])) {
        header("Location: ");
    } else{
        session_destroy();
    }
    include "./views/loginView.php";
}

function cerrarSesion(){
    session_start();
    session_destroy();
    header("Location: index.php?controller=usuarios&action=login");
    
}
?>