<?php
include 'datos.php';
$result = $conn->query("SELECT * FROM datos");
//echo $result;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos base de datos</title>
</head>

<body>
    <div class="container">
        <h1>Información de base de datos</h1>
        <table class="table mt-3">
            <tr>
                <th>ID</th>
                <th>temperatura</th>
                <th>humedad</th>
                <th>presion</th>
                <th>fecha</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['temperatura'] ?></td>
                    <td><?= $row['humedad'] ?></td>
                    <td><?= $row['presion'] ?></td>
                    <td><?= $row['fecha'] ?></td>
                    <td>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>
