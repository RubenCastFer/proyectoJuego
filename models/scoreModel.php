<?php

function crearConexion(){
    $servidor="localhost";
    $baseDatos="juego"; 
    $usuario= "developer";
    $pass="developer";
    try {
        return new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
    } catch (PDOException $e) {
        return false;
    }
}


function getPuntuaciones()
{
    $db = crearConexion();

    $result = $db->query('SELECT usuario, puntuacion AS punt
                            FROM puntuacion
                            ORDER BY punt');
    $puntuaciones = array();
    while ($puntuacion = $result->fetch(PDO::FETCH_ASSOC)) {
        $puntuaciones[] = $puntuacion;
    }


    $db = null;
    return $puntuaciones;
}

function getPuntuacionMayorUser($id)
{
    try{

        $db = crearConexion();

        $sql = $db->prepare("SELECT u.id, u.usuario, p.usuario, MAX(p.puntuacion)
                                FROM usuarios u, puntuacion p
                                WHERE u.usuario = p.usuario
                                AND u.id = ?");

        $sql->bindParam(1, $id);
        $sql->execute();
        $matriz = [];
        while ($score = $sql->fetch(PDO::FETCH_BOTH)) {
            $matriz[] = $score;
        }
        return $matriz;
    } catch (PDOException $e) {
        return null;
    }
    $db = null;
}

?>