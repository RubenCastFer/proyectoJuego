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
}
