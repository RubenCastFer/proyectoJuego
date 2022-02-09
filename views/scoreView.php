<html>

<head>
    <title>Puntuaciones</title>
</head>

<body>

    <table border="1">
        <tr>
            <th>Usuario</th>
            <th>Puntuacion</th>
        </tr>

        <?php foreach ($puntuaciones as $puntuacion) : ?>
            <tr>
                <td><?php echo $puntuacion['usuario'] ?></td>
                <td><?php echo $puntuacion['punt'] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>