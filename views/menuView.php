<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#escudo").click(function() {
                $(this).animate({
                    height: "300px"
                });
            });
            $("#escudo").click(function() {
                $(this).animate({
                    height: "250px"
                });
            });
        });

        $(document).ready(function() {
            $("#escudo").hover(function() {
                $(this).fadeTo(1000, 0.4);
            });
        });
    </script>
    <style>
        p {
            text-align: center;
        }

        button {
            text-align: center;
        }

        .btn-circle.btn-xl {

            margin: 50px;
            align-items: center;
            justify-content: center;

            width: 70px;
            height: 70px;
            text-align: center;
            border-radius: 15px;
            font-size: 18px;
            line-height: 1.33;
            position: center;
        }

        img {
            width: 100%
        }
    </style>
</head>

<body>
    <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">

            <h2 class="Encabezado"></h2>

            <header class="p-3 bg-success text-white">


                <header class="p-3 bg-success text-white">



                    <div class="row">
                        <div class="col-12 mt-3">
                            <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="5000">
                                        <img src="images/cadiz.jpg" class="d-block w-100" alt="..." height="500px">
                                        <div class="carousel-caption d-none d-md-block" style="background-color: grey; opacity: 0.7;">
                                            <h5>Cortes de Cádiz de 1812</h5>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="5000">
                                        <img src="images/mezquita.jpg" class="d-block w-100" alt="..." height="500px">
                                        <div class="carousel-caption d-none d-md-block" style="background-color: grey; opacity: 0.7;">
                                            <h5>Mezquita de Córdoba</h5>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="5000">
                                        <img src="images/plaza-espana-sevilla.jpg" class="d-block w-100" alt="..." height="500px">
                                        <div class="carousel-caption d-none d-md-block" style="background-color: grey; opacity: 0.7;">
                                            <h5>Plaza de España Sevilla</h5>
                                            <p></p>
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

                            <div class="row justify-content-center">
                                <a type="button" text-align="center" class="btn btn-primary btn-circle btn-xl" style="display: flex; align-items: center; justify-content: center;" href='index.php?controller=juego&action=cartas'><i class="fa fa-list">
                                        <p>Juega</p>
                                    </i>
                                </a>
                                <script>
                                    sessionStorage.setItem("vida", "3");
                                    sessionStorage.setItem("nivel", "1");
                                </script>
                                <a type="button" text-align="center" class="btn btn-secondary btn-circle btn-xl" style="display: flex; align-items: center; justify-content: center;" href='index.php?controller=juego&action=listarPuntuaciones'><i class="fa fa-list">
                                        <p>Puntos</p>
                                    </i>
                                </a>

                                <!-- <a type="button" class="btn btn-warning text-white btn-circle btn-xl"><i class="fa fa-heart">
                                <p>rank</p>
                            </i>
                        </a> -->
                                <a type="button" class="btn btn-danger btn-circle btn-xl" style="display: flex; align-items: center; justify-content: center;" href='index.php?controller=usuarios&action=cerrarSesion'><i class="fa fa-heart">
                                        <p>Salir</p>
                                    </i>
                                </a>
                            </div>
                            </form>


                        </div>
                </header>



        </div>
        <!-- /.panel-body -->

        <div class="container bg-white justify-content-center">
            <p><strong>Clicka o pasa el ratón por la imagen</strong></p>
            <img src="images/escudo.png" id="escudo" class="inline-block me-0">
        </div>
    </div>
</body>

</html>