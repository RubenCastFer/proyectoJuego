<?php
session_start();
if (empty($_SESSION["usuario"])) {
    header("Location: index.php?controller=usuarios&action=signUp");
}

function menu()
{
    include "./views/menuView.php";
}

function listarPuntuaciones()
{
    require "./models/juegoModel.php";
    $usuario = $_SESSION['usuario'];
    
    if(isset($_COOKIE["puntuacionFinal"])) {
        
        $puntuacion=$_COOKIE["puntuacionFinal"];
        updatePuntuacionUser($usuario, $puntuacion);
        
    }
    
    $puntuaciones = getPuntuaciones();

    $unaPuntuacion = getPuntuacionUser($usuario);

    include "./views/scoreView.php";
}

function cartas()
{
    
    

    include "./views/cartasView.php";

    //llamar a arrays en un php para cada nivel, con ayax lo cargamos y creamos el tablero ramdom y que repita cada imagen 2 veces.    
}

