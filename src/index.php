<?php
include "conexion.php";

$resultado = $conn->query("SELECT * FROM productos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Productos</title>
</head>
<body>

<h1>Sistema CRUD de Productos</h1>

<a href="crear.php">Agregar Producto</a>

<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Acciones</th>
    </tr>

    <?php while ($fila = $resultado->fetch_assoc()) { ?>
    <tr>
        <td><?= $fila["id"] ?></td>
        <td><?= $fila["nombre"] ?></td>
        <td><?= $fila["precio"] ?></td>
        <td><?= $fila["cantidad"] ?></td>
        <td>
            <a href="editar.php?id=<?= $fila["id"] ?>">Editar</a> |
            <a href="eliminar.php?id=<?= $fila["id"] ?>">Eliminar</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>