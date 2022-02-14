<?php
session_start();

function menu(){
    include "./views/menuView.php";
}

function listarPuntuaciones()
{
    require "./models/juegoModel.php";

    var_dump($_SESSION['usuario']);
    $puntuaciones = getPuntuaciones();

    $unaPuntuacion = getPuntuacionUser($_SESSION['usuario']);

    include "./views/scoreView.php";
}

function cartas(){
    include "./views/cartasView.php";
    //llamar a arrays en un php para cada nivel, con ayax lo cargamos y creamos el tablero ramdom y que repita cada imagen 2 veces.
    
}
