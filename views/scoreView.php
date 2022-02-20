<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>

    <script type="text/javascript" src=".\js\puntuaciones.js"></script>
    <title>Puntuaciones</title>
    <style>
        .table tr th {
            text-align: center;
            background-color: #27AE60;
        }

        .table tr td {
            text-align: center;
            background-color: #52BE80;
        }

        table {
            width: 100%;
            opacity: 70%;
            font-size: 40px;
        }

        body {
            background-image: url(images/mezquita.jpg);
            background-size: auto 100%;
        }

        .btn-flotante {
            font-size: 16px;
            /* Cambiar el tamaño de la tipografia */
            text-transform: uppercase;
            /* Texto en mayusculas */
            font-weight: bold;
            /* Fuente en negrita o bold */
            color: #ffffff;
            /* Color del texto */
            border-radius: 5px;
            /* Borde del boton */
            letter-spacing: 2px;
            /* Espacio entre letras */
            background-color: #27AE60;
            /* Color de fondo */
            padding: 18px 30px;
            /* Relleno del boton */
            position: fixed;
            bottom: 40px;
            right: 40px;
            transition: all 300ms ease 0ms;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            z-index: 99;
        }

        .btn-flotante:hover {
            background-color: white;
            color: #000;
            /* Color de fondo al pasar el cursor */
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
            transform: translateY(-7px);
        }

        @media only screen and (max-width: 600px) {
            .btn-flotante {
                font-size: 14px;
                padding: 12px 20px;
                bottom: 20px;
                right: 20px;
            }
        }
    </style>

</head>

<body class="text-center">
    <!-- mostrar puntuacion usuario maxima -->

    <div class="container-fluid">
        <a href="index.php?controller=juego&action=menu" class="btn-flotante">
            < ATRAS </a>
                <div class="text-light titulo">
                    <h1>Mi puntuacion</h1>
                </div>
                <div class="row mt-5 mb-5 ">
                    <table class="table table-striped">
                        <tr>
                            <th>Usuario</th>
                            <th>Puntuación</th>
                        </tr>


                        <?php

                        $contador = 0;
                        foreach ($unaPuntuacion as $puntuacion) :
                            if ($contador == 0) : ?>
                                <tr>
                                    <td><?php echo $puntuacion['usuario'] ?></td>
                                    <td><?php echo $puntuacion['puntuacion'] ?></td>
                                </tr>
                        <?php
                            endif;
                            $contador++;
                        endforeach; ?>

                    </table>

                </div>


                <!-- mostrar puntuaciones totales -->

                <div class="text-light">
                    <h1 id="click">Puntuaciones todos los usuarios</h1>
                </div>


                <div class="row mt-5 mb-5 " id=tablaUsuarios>
                    <table class="table table-striped">
                        <tr>
                            <th>Usuario</th>
                            <th>Puntuación</th>
                        </tr>


                        <?php

                        $contador = 0;
                        foreach ($puntuaciones as $puntuacion) :
                            if ($contador < 20) : ?>
                                <tr>
                                    <td><?php echo $puntuacion['usuario'] ?></td>
                                    <td><?php echo $puntuacion['puntuacion'] ?></td>
                                </tr>
                        <?php
                            endif;
                            $contador++;
                        endforeach; ?>

                    </table>
                </div>
    </div>

</body>

</html>
