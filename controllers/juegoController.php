<?php
session_start();

function menu()
{
    include "./views/menuView.php";
}

function listarPuntuaciones()
{
    require "./models/juegoModel.php";
    $usuario = $_SESSION['usuario'];
    var_dump($_POST['puntuacion']);
    if(isset($_POST['puntuacion'])) {
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

