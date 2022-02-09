<?php

function listarPuntuaciones()
{
    require "./models/scoreModel.php";

    $puntuaciones = getPuntuaciones();

    include "./views/scoreView.php";
}


function puntuacionAlta()
{
    require "./models/scoreModel.php";

    $puntuaciones = getPuntuacionMayorUser($_GET['id']);

    include "./views/scoreView.php";
}
