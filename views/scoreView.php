<html>

<head>
    <title>Puntuaciones</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
</head>

<body>

    <!-- mostrar puntuacion usuario maxima -->


    <h1>Mi puntuacion mas alta</h1>

    <div class="col-4">
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
    <!-- mostrar puntuaciones totales usuario  con desplegable-->

    <h1>Todas las puntuaciones de un usuario</h1>

    <div class="col-4">
        <table class="table table-dark table-striped" border="1">
            <tr>
                <th>Usuario</th>
                <th>Puntuacion</th>
            </tr>

            <?php

            foreach ($unaPuntuacion as $puntuacion) : ?>
                <tr>
                    <td><?php echo $puntuacion['usuario'] ?></td>
                    <td><?php echo $puntuacion['puntuacion'] ?></td>
                </tr>
            <?php

            endforeach; ?>

        </table>
    </div>


    <br><br><br><br><br><br><br><br>
    <!-- mostrar puntuaciones totales -->

    <h1>Puntuaciones todos los usuarios</h1>

    <div class="col-4">
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