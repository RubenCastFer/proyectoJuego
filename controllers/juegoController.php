<?php
session_start();
function listarPuntuaciones()
{
    require "./models/juegoModel.php";

    $puntuaciones = getPuntuaciones();

    $unaPuntuacion = getPuntuacionUser($_SESSION['id']);

    include "./views/scoreView.php";
}
