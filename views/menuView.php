<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
        span {
            text-align: center;
        }

        .btn {
            padding-top: 30px;
        }

        .btn-circle.btn-xl {

            margin: 50px;
            align-items: center;
            justify-content: center;

            width: 100px;
            height: 100px;
            text-align: center;
            border-radius: 50px;
            font-size: 25px;
            line-height: 1.33;
            position: center;
        }

        img {
            width: 100%
        }

        body {
            margin: 5px;
        }

        .carousel-caption {
            right: 0%;
            left: 0%;
        }

        h4 {
            color: white;
            font-weight: bold;

        }

        #escudo {
            width: 15%;
        }

        body {
            background-color: #52BE80;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-12 ">
                        <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="5000">
                                    <img src="images/cadiz.jpg" class="d-block w-100 rounded-3" alt="..." height="500px">
                                    <div class="carousel-caption d-none d-md-block" style="background-color: #52BE80; opacity: 0.5; width: 100%">
                                        <h4>Cortes de Cádiz de 1812</h4>

                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="images/mezquita.jpg" class="d-block w-100 rounded-3" alt="..." height="500px">
                                    <div class="carousel-caption d-none d-md-block" style="background-color: #52BE80; opacity: 0.5;">
                                        <h4>Mezquita de Córdoba</h4>

                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="5000">
                                    <img src="images/plaza-espana-sevilla.jpg" class="d-block w-100 rounded-3" alt="..." height="500px">
                                    <div class="carousel-caption d-none d-md-block" style="background-color: #52BE80; opacity: 0.5;">
                                        <h4>Plaza de España Sevilla</h4>

                                    </div>
                                </div>

                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-body">


                <div class="row">
                    <div class="col-12 ">

                        <div class="row justify-content-center align-items-center">
                            <img src="images/escudo.png" id="escudo" class="inline-block m-auto pt-3">

                            <a type="button" class="btn btn-success btn-circle btn-xl btn-outline-light" href='index.php?controller=juego&action=cartas'><span>Jugar</span></a>

                            <a type="button" class="btn btn-success btn-circle btn-xl btn-outline-light" href='index.php?controller=juego&action=listarPuntuaciones'>Puntos</a>

                            <a type="button" class="btn btn-success btn-circle btn-xl btn-outline-light" href='index.php?controller=usuarios&action=cerrarSesion'>Salir</a>

                            <img src="images/escudo.png" id="escudo" class="inline-block m-auto pt-3">
                        </div>

                    </div>
                </div>

                <script>
                    sessionStorage.setItem("vida", "3");
                    sessionStorage.setItem("nivel", "1");
                    sessionStorage.setItem("puntuacionFinal", "0");
                    sessionStorage.setItem("intentos", "8");

                </script>


            </div>
            <!-- /.panel-body -->


        </div>
    </div>

</body>

</html>