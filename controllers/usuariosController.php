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

            $persona = comprobarUsuario($usuario);
            var_dump($persona);
            if ($persona == false) {
                echo "usuario incorrecto";
            } else {
                var_dump(password_verify($contraseña, $persona["contraseña"]));
                if (password_verify($contraseña, $persona["contraseña"])) {
                    //echo "usuario y contraseña correctas";
                    $id = $persona["id"];
                    $usuario =$persona["usuario"];
                    $_SESSION["id"] = $id;   
                    $_SESSION["usuario"] = $usuario;
                    

                    
                    //echo $_SESSION["usuario"]." ".$_SESSION["id"];
                    header("Location: ");
                } else {
                    
                    echo $_SESSION["usuario"]." ".$_SESSION["id"];
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