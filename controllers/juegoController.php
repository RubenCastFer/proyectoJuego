<?php
session_start();

function menu(){
    include "./views/menuView.php";
}

function listarPuntuaciones()
{
    require "./models/juegoModel.php";

    $puntuaciones = getPuntuaciones();

    $unaPuntuacion = getPuntuacionUser($_SESSION['id']);

    include "./views/scoreView.php";
}

function cartas(){
    include "./views/cartasView.php";
}
