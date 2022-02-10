<html>

<head>
    <title>Puntuaciones</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
</head>

<body>

<h1>Mi puntuacion</h1>

    <table border="1">
        <tr>
            <th>Usuario</th>
            <th>Puntuacion</th>
        </tr>

        <?php foreach ($puntuaciones as $puntuacion) : ?>
            <tr>
                <td><?php echo $puntuacion['usuario'] ?></td>
                <td><?php echo $puntuacion['puntuacion'] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>