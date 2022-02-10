<?php
session_start();
function listarPuntuaciones()
{
    require "./models/juegoModel.php";

    $puntuaciones = getPuntuaciones();

    include "./views/scoreView.php";
}


function puntuacionAlta()
{
    require "./models/juegoModel.php";

    $puntuaciones = getPuntuacionUser($_SESSION['id']);
    var_dump($puntuaciones);
    include "./views/scoreView.php";
}
