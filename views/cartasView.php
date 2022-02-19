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
    <title>Document</title>
    <style>
        h1 {
            font-size: 65px;
        }

        .col-12 {
            text-align: center;

        }

        /* pregurntar a carlos el tamaño del div de las img */
        .tam {
            height: 100px;
            width: 150px;
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
                $("#flip").slideDown("slow");
            }, function() {
                $("#flip").css({
                    "textShadow": "white 10px 10px 10px"
                });
            });



        });
    </script>

</head>

<body>
    <header class="container-fluid bg-success">
        <div class="col-12 ">
            <h1>Encuentra las parejas</h1>
            <div id="flip">Jornadas Culturales Día de Andalucía</div>
        </div>

    </header>
    <div class="container" id="mostrar">

    </div>
    <footer class="container-fluid bg-success">
        <div class="row">
            <ul class="" style="list-style-type: none">
                <li>
                    <h5 name="puntuacion" id="puntuacion">Puntuacion</h5>
                </li>
                <li>
                    <h5 id="intentos">Intentos</h5>
                </li>
                <li>
                    <h5 id="vidas">Vidas</h5>
                </li>
            </ul>
        </div>
        <p id="nivel" style="visibility: hidden;">1</p>
    </footer>
</body>

</html>