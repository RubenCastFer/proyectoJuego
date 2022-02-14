<?php

function crearConexion(){
    $servidor="localhost";
    $baseDatos="juego"; 
    $usuario= "root";
    $pass="root";
    // $usuario= "developer";
    // $pass="developer";
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

function getPuntuacionUser($usuario)
{
    try{

        $db = crearConexion();

        $sql = $db->prepare("SELECT * 
                                FROM puntuacion 
                                WHERE puntuacion.usuario = ? 
                                ORDER BY puntuacion.puntuacion DESC");

        $sql->bindParam(1, $usuario);
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

// $nivel=$_POST["nivel"];
$nivel=1;
//rellenar array con fotos
$nivel1=[[
    name=> "alhambra",
    img=> "./img/alhambra.jpg",
    id=> 1,
],
  [name=> "cadiz",
  img=> "./img/cadiz.jpg",
  id=> 2]
    
  ,
  [name=> "alhambra",
  img=> "./img/alhambra.jpg",
  id=> 1],
  
    [name=> "mezquita",
    img=> "./img/mezquita.jpg",
    id=> 4]
  ,
  [name=> "giralda",
  img=> "./img/giralda.jpg",
  id=> 3]
    
  ,
  
    [name=> "mezquita",
    img=> "./img/mezquita.jpg",
    id=> 4]
  ,
  
    [name=> "cadiz",
    img=> "./img/cadiz.jpg",
    id=> 2]
  ,
  
    [name=> "giralda",
    img=> "./img/giralda.jpg",
    id=> 3
]];
$nivel2=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
$nivel3=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32];

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