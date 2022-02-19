<html>

<head>
    <title>Puntuaciones</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     
</head>

<body class="text-center container">

<i class="bi bi-box-arrow-left"></i>

    <!-- mostrar puntuacion usuario maxima -->


    <div class="text-light titulo">
        <h1>Mi puntuacion mas alta</h1>
    </div>

    <div class="row col-6  mt-5 mb-5 offset-md-3">
        <table class="table table-dark table-striped" border="1">
            <tr>
                <th>Usuario</th>
                <th>Puntuacion</th>
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
    <br><br><br><br><br><br><br><br>
    
    <!-- mostrar puntuaciones totales -->

    <div class="text-light">
        <h1>Puntuaciones todos los usuarios</h1>
    </div>


    <div class="row col-6  mt-5 mb-5 offset-md-3">
        <table class="table table-dark table-striped" border="1">
            <tr>
                <th>Usuario</th>
                <th>Puntuacion</th>
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
</body>

</html>


<style>
    .container {
        background-image: url(images/mezquita.jpg);
        background-size: auto 100%;
    }


</style>