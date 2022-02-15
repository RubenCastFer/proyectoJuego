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

// $nivel=$_POST["nivel"];
$nivel = 3;
//rellenar array con fotos
$nivel1 = [
    [
        "name" => "alhambra",
        "img" => "./img/alhambra.jpg",
        "id" => 1,
    ],
    [
        "name" => "cadiz",
        "img" => "./img/cadiz.jpg",
        "id" => 2
    ],
    [
        "name" => "alhambra",
        "img" => "./img/alhambra.jpg",
        "id" => 1
    ],

    [
        "name" => "mezquita",
        "img" => "./img/mezquita.jpg",
        "id" => 4
    ],
    [
        "name" => "giralda",
        "img" => "./img/giralda.jpg",
        "id" => 3
    ],

    [
        "name" => "mezquita",
        "img" => "./img/mezquita.jpg",
        "id" => 4
    ],

    [
        "name" => "cadiz",
        "img" => "./img/cadiz.jpg",
        "id" => 2
    ],

    [
        "name" => "giralda",
        "img" => "./img/giralda.jpg",
        "id" => 3
    ]
];
$nivel2 = [
    [
        "name" => "alhambra",
        "img" => "./img/alhambra.jpg",
        "id" => 1,
    ],
    [
        "name" => "cadiz",
        "img" => "./img/cadiz.jpg",
        "id" => 2
    ],
    [
        "name" => "alhambra",
        "img" => "./img/alhambra.jpg",
        "id" => 1
    ],

    [
        "name" => "mezquita",
        "img" => "./img/mezquita.jpg",
        "id" => 4
    ],

    [
        "name" => "plaza españa",
        "img" => "./img/plaza_españa.jpg",
        "id" => 5
    ],

    [
        "name" => "giralda",
        "img" => "./img/giralda.jpg",
        "id" => 3
    ],

    [
        "name" => "catedral jerez",
        "img" => "./img/catedral_jerez.jpg",
        "id" => 7
    ],

    [
        "name" => "alcazaba malaga",
        "img" => "./img/alcazaba_malaga.jpg",
        "id" => 6
    ],

    [
        "name" => "mezquita",
        "img" => "./img/mezquita.jpg",
        "id" => 4
    ],

    [
        "name" => "cadiz",
        "img" => "./img/cadiz.jpg",
        "id" => 2
    ],

    [
        "name" => "plaza españa",
        "img" => "./img/plaza_españa.jpg",
        "id" => 5
    ],

    [
        "name" => "castillo jaen",
        "img" => "./img/castillo_jaen.jpg",
        "id" => 8
    ],

    [
        "name" => "catedral jerez",
        "img" => "./img/catedral_jerez.jpg",
        "id" => 7
    ],

    [
        "name" => "alcazaba malaga",
        "img" => "./img/alcazaba_malaga.jpg",
        "id" => 6
    ],

    [
        "name" => "giralda",
        "img" => "./img/giralda.jpg",
        "id" => 3
    ],

    [
        "name" => "castillo jaen",
        "img" => "./img/castillo_jaen.jpg",
        "id" => 8
    ]
];
$nivel3 = [
    [
        "name" => "alhambra",
        "img" => "./img/alhambra.jpg",
        "id" => 1,
    ],
    [
        "name" => "cadiz",
        "img" => "./img/cadiz.jpg",
        "id" => 2
    ],
    [
        "name" => "alhambra",
        "img" => "./img/alhambra.jpg",
        "id" => 1
    ],

    [
        "name" => "mezquita",
        "img" => "./img/mezquita.jpg",
        "id" => 4
    ],

    [
        "name" => "plaza españa",
        "img" => "./img/plaza_españa.jpg",
        "id" => 5
    ],

    [
        "name" => "alcazar carmona",
        "img" => "./img/alcazar_carmona.jpg",
        "id" => 11
    ],

    [
        "name" => "alcazar carmona",
        "img" => "./img/alcazar_carmona.jpg",
        "id" => 10
    ],

    [
        "name" => "giralda",
        "img" => "./img/giralda.jpg",
        "id" => 3
    ],

    [
        "name" => "catedral jerez",
        "img" => "./img/catedral_jerez.jpg",
        "id" => 7
    ],

    [
        "name" => "alcazaba malaga",
        "img" => "./img/alcazaba_malaga.jpg",
        "id" => 6
    ],

    [
        "name" => "alcazar carmona",
        "img" => "./img/alcazar_carmona.jpg",
        "id" => 10
    ],

    [
        "name" => "mezquita",
        "img" => "./img/mezquita.jpg",
        "id" => 4
    ],

    [
        "name" => "catedral ubeda",
        "img" => "./img/catedral_ubeda.jpg",
        "id" => 9
    ],

    [
        "name" => "castillo aracena",
        "img" => "./img/castillo_aracena.jpg",
        "id" => 12
    ],

    [
        "name" => "cadiz",
        "img" => "./img/cadiz.jpg",
        "id" => 2
    ],

    [
        "name" => "alcazar carmona",
        "img" => "./img/alcazar_carmona.jpg",
        "id" => 11
    ],

    [
        "name" => "plaza españa",
        "img" => "./img/plaza_españa.jpg",
        "id" => 5
    ],

    [
        "name" => "castillo jaen",
        "img" => "./img/castillo_jaen.jpg",
        "id" => 8
    ],

    [
        "name" => "castillo aracena",
        "img" => "./img/castillo_aracena.jpg",
        "id" => 12
    ],

    [
        "name" => "catedral jerez",
        "img" => "./img/catedral_jerez.jpg",
        "id" => 7
    ],

    [
        "name" => "alcazaba malaga",
        "img" => "./img/alcazaba_malaga.jpg",
        "id" => 6
    ],

    [
        "name" => "giralda",
        "img" => "./img/giralda.jpg",
        "id" => 3
    ],

    [
        "name" => "castillo jaen",
        "img" => "./img/castillo_jaen.jpg",
        "id" => 8
    ],

    [
        "name" => "catedral ubeda",
        "img" => "./img/catedral_ubeda.jpg",
        "id" => 9
    ]
];

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
