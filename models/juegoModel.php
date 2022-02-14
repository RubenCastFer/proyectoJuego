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

    $result = $db->query('SELECT * 
                            FROM puntuacion 
                            ORDER BY puntuacion.puntuacion DESC');
    $puntuaciones = array();
    while ($puntuacion = $result->fetch(PDO::FETCH_ASSOC)) {
        $puntuaciones[] = $puntuacion;
    }


    $db = null;
    return $puntuaciones;
}

function getPuntuacionUser($id)
{
    try{

        $db = crearConexion();

        $sql = $db->prepare("SELECT * 
                                FROM puntuacion 
                                WHERE puntuacion.usuario = ? 
                                ORDER BY puntuacion.puntuacion DESC");

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
//SELECT * FROM puntuacion WHERE puntuacion.usuario = 'ruben' ORDER BY puntuacion.puntuacion DESC

$nivel=$_POST["nivel"];

//rellenar array con fotos
$nivel1=[];
$nivel2=[];
$nivel3=[];

switch ($nivel) {
    case '1':
        echo json_encode($nivel1);
        break;
    case '2':
        echo json_encode($nivel2);
        break;
    case '3':
        echo json_encode($nivel3);
        break;
    default:
        echo json_encode($nivel1);
        break;
}

?>