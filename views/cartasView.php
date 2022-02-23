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
    <script src="./js/sweetalert.min.js"></script>
    <script src="./js/cartas.js" type="text/javascript"></script>
    <title>Panel</title>
    <style>

        h1 {
            font-size: 65px;
        }

        #boton{
            margin-top: 2px;
        }
        .centrar {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 600px;
        }

        .frente {
            width: 300px;
        }

        .atras {
            width: 300px;
        }

        .col-12 {
            text-align: center;

        }

        /* pregurntar a carlos el tamaño del div de las img */
        .tam {
            height: 150px;
            width: 300px;
        }

        @media (max-width: 1619px) {
            .tam {
                height: 100px;
                width: 200px;
            }

            .frente {
                width: 200px;
            }

            .atras {
                width: 200px;
            }
        }


        .oculto {
            display: none;
        }

        .visible {
            display: block;
        }

        .rotar {

            transition: 1s;
            animation: rotate 2s;
        }

        footer {
            text-align: center;
            background-color: #52BE80;
            padding: 10px;

        }

        h4 {
            align-items: center;
            justify-content: center;
            font-size: 50px;
            font-weight: bold;
        }

        header {
            background-color: #52BE80;
        }

        @keyframes rotate {
            0% {
                transform: rotateY(0deg);
            }

            100% {
                transform: rotateY(180deg);
            }
        }

        #flip {
            padding: 20px;
            font-size: 50px;
            display: none;
        }
    </style>
    <script>
        $(document).ready(function() {
            $("h1").hover(function() {
                var h1 = $("h1");
                h1.animate({
                    left: '20px'
                }, "slow");
                h1.animate({
                    fontSize: '3em'
                }, "slow");
                h1.animate({
                    opacity: '0.5'
                });

            });



        });
    </script>


</head>

<body>
    <header class="container-fluid ">
        <a type="button" id="boton" class="btn btn-success  btn-md btn-outline-light" href='index.php?controller=usuarios&action=cerrarSesion'>Salir</a>
        <a type="button" id="boton" class="btn btn-success  btn-md btn-outline-light" href='index.php?controller=juego&action=menu'>Menú</a>
        <div class="col-12 ">

            <h1>Encuentra las parejas</h1>

        </div>

    </header>
    <div class="container-fluid mr-5 col-sm-4 col-md-10 mr-lg-12 col-xl-12 " id="mostrar" height="100%">

    </div>

<div>
    <br><br>
</div>
    <p id="nivel" style="visibility: hidden;">1</p>
    <footer class="container-fluid fixed-bottom">
        <div class="row">
            <div class="col pie">
                <h4 name="puntuacion" id="puntuacion">Puntuación</h4>
            </div>
            <div class="col pie">
                <h4 id="intentos">Intentos</h4>
            </div>
            <div class="col pie">
                <h4 id="vidas">Vidas</h4>
            </div>
        </div>

    </footer>
</body>

</html>