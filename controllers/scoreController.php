<?php
session_start();
function listarPuntuaciones()
{
    require "./models/scoreModel.php";

    $puntuaciones = getPuntuaciones();

    include "./views/scoreView.php";
}


function puntuacionAlta()
{
    require "./models/scoreModel.php";

    $puntuaciones = getPuntuacionMayorUser($_SESSION['id']);
    var_dump($puntuaciones);
    include "./views/scoreView.php";
}
