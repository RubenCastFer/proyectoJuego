<?php

function crearConexion()
{
    $servidor = "localhost";
    $baseDatos = "juego";
    $usuario = "developer";
    $pass = "developer";
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
    try {

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

function updatePuntuacionUser($usuario, $puntuacion)
{
    try {

        $db = crearConexion();

        $sql = $db->prepare("UPDATE `puntuacion` SET `puntuacion`=? WHERE usuario = ?");

        $sql->bindParam(1, $puntuacion);
        $sql->bindParam(2, $usuario);
        $sql->execute();
        
        
    } catch (PDOException $e) {
        return null;
    }
    $db = null;
}


$nivel1 = [
    [
        "name" => "La Alhambra, Granada",
        "img" => "./img/alhambra.jpg",
        "id" => 1,
    ],
    [
        "name" => "Catedral de Cádiz",
        "img" => "./img/cadiz.jpg",
        "id" => 2
    ],
    [
        "name" => "La Alhambra, Granada",
        "img" => "./img/alhambra.jpg",
        "id" => 1
    ],

    [
        "name" => "Puente y Tajo de Ronda (Málaga)",
        "img" => "./img/ronda.jpg",
        "id" => 6
    ],

    [
        "name" => "La Mezquita, Córdoba",
        "img" => "./img/mezquita.jpg",
        "id" => 4
    ],
    [
        "name" => "La Giralda, Sevilla",
        "img" => "./img/giralda.jpg",
        "id" => 3
    ],

    [
        "name" => "La Mezquita, Córdoba",
        "img" => "./img/mezquita.jpg",
        "id" => 4
    ],

    [
        "name" => "La Maestranza de Sevilla",
        "img" => "./img/la maestranza.jpg",
        "id" => 5
    ],

    [
        "name" => "Catedral de Cádiz",
        "img" => "./img/cadiz.jpg",
        "id" => 2
    ],

    [
        "name" => "La Maestranza de Sevilla",
        "img" => "./img/la maestranza.jpg",
        "id" => 5
    ],

    [
        "name" => "Puente y Tajo de Ronda (Málaga)",
        "img" => "./img/ronda.jpg",
        "id" => 6
    ],  

    [
        "name" => "La Giralda, Sevilla",
        "img" => "./img/giralda.jpg",
        "id" => 3
    ]
];

//añadir un par mas de fotos
$nivel2 = [
    [
        "name" => "La Alhambra, Granada",
        "img" => "./img/alhambra.jpg",
        "id" => 1,
    ],
    [
        "name" => "Catedral de Cádiz",
        "img" => "./img/cadiz.jpg",
        "id" => 2
    ],
    [
        "name" => "La Alhambra, Granada",
        "img" => "./img/alhambra.jpg",
        "id" => 1
    ],

    [
        "name" => "La Mezquita, Córdoba",
        "img" => "./img/mezquita.jpg",
        "id" => 4
    ],

    [
        "name" => "Plaza de España, Sevilla",
        "img" => "./img/plaza_españa.jpg",
        "id" => 5
    ],

    [
        "name" => "La Giralda, Sevilla",
        "img" => "./img/giralda.jpg",
        "id" => 3
    ],

    [
        "name" => "Catedral de Jerez",
        "img" => "./img/catedral_jerez.jpg",
        "id" => 7
    ],

    [
        "name" => "La Alcazaba de Málaga",
        "img" => "./img/alcazaba_malaga.jpg",
        "id" => 6
    ],

    [
        "name" => "La Mezquita de Córdoba",
        "img" => "./img/mezquita.jpg",
        "id" => 4
    ],

    [
        "name" => "Catedral de Cádiz",
        "img" => "./img/cadiz.jpg",
        "id" => 2
    ],

    [
        "name" => "Plaza de España, Sevilla",
        "img" => "./img/plaza_españa.jpg",
        "id" => 5
    ],

    [
        "name" => "Castillo de Jaén",
        "img" => "./img/castillo_jaen.jpg",
        "id" => 8
    ],

    [
        "name" => "Catedral de Jerez",
        "img" => "./img/catedral_jerez.jpg",
        "id" => 7
    ],

    [
        "name" => "La Alcazaba de Málaga",
        "img" => "./img/alcazaba_malaga.jpg",
        "id" => 6
    ],

    [
        "name" => "La Giralda, Sevilla",
        "img" => "./img/giralda.jpg",
        "id" => 3
    ],

    [
        "name" => "El Castillo de Jaén",
        "img" => "./img/castillo_jaen.jpg",
        "id" => 8
    ]
];

//alcazar carmona quitar 2
$nivel3 = [
    [
        "name" => "La Alhambra, Granada",
        "img" => "./img/alhambra.jpg",
        "id" => 1,
    ],
    [
        "name" => "Catedral de Cádiz",
        "img" => "./img/cadiz.jpg",
        "id" => 2
    ],
    [
        "name" => "La Alhambra, Granada",
        "img" => "./img/alhambra.jpg",
        "id" => 1
    ],

    [
        "name" => "La Mezquita, Córdoba",
        "img" => "./img/mezquita.jpg",
        "id" => 4
    ],

    [
        "name" => "Plaza de España, Sevilla",
        "img" => "./img/plaza_españa.jpg",
        "id" => 5
    ],

    [
        "name" => " Torre del Oro (Sevilla)",
        "img" => "./img/torredeloro.jpg",
        "id" => 11
    ],

    [
        "name" => "Alcázar, Carmona (Sevilla)",
        "img" => "./img/alcazar_carmona.jpg",
        "id" => 10
    ],

    [
        "name" => "La Giralda, Sevilla",
        "img" => "./img/giralda.jpg",
        "id" => 3
    ],

    [
        "name" => "Catedral de Jerez",
        "img" => "./img/catedral_jerez.jpg",
        "id" => 7
    ],

    [
        "name" => "La Alcazaba de Málaga",
        "img" => "./img/alcazaba_malaga.jpg",
        "id" => 6
    ],

    [
        "name" => "Alcázar, Carmona (Sevilla)",
        "img" => "./img/alcazar_carmona.jpg",
        "id" => 10
    ],

    [
        "name" => "La Mezquita, Córdoba",
        "img" => "./img/mezquita.jpg",
        "id" => 4
    ],

    [
        "name" => "Catedral, Úbeda (Jaén)",
        "img" => "./img/catedral_ubeda.jpg",
        "id" => 9
    ],

    [
        "name" => "Castillo, Aracena (Huelva)",
        "img" => "./img/castillo_aracena.jpg",
        "id" => 12
    ],

    [
        "name" => "Catedral de Cádiz",
        "img" => "./img/cadiz.jpg",
        "id" => 2
    ],

    [
        "name" => "Torre del Oro, Sevilla",
        "img" => "./img/torredeloro.jpg",
        "id" => 11
    ],

    [
        "name" => "Plaza de España, Sevilla",
        "img" => "./img/plaza_españa.jpg",
        "id" => 5
    ],

    [
        "name" => "Castillo de Jaén",
        "img" => "./img/castillo_jaen.jpg",
        "id" => 8
    ],

    [
        "name" => "Castillo , Aracena (Huelva)",
        "img" => "./img/castillo_aracena.jpg",
        "id" => 12
    ],

    [
        "name" => "Catedral de Jerez",
        "img" => "./img/catedral_jerez.jpg",
        "id" => 7
    ],

    [
        "name" => "La Alcazaba de Málaga",
        "img" => "./img/alcazaba_malaga.jpg",
        "id" => 6
    ],

    [
        "name" => "La Giralda, Sevilla",
        "img" => "./img/giralda.jpg",
        "id" => 3
    ],

    [
        "name" => "Castillo, Jaén",
        "img" => "./img/castillo_jaen.jpg",
        "id" => 8
    ],

    [
        "name" => "Catedral, Úbeda",
        "img" => "./img/catedral_ubeda.jpg",
        "id" => 9
    ]
];

if(isset($_POST["nivel"])){
    $nivel=$_POST["nivel"];

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

}
