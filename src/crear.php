<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];

    $sql = "INSERT INTO productos (nombre, precio, cantidad)
            VALUES ('$nombre','$precio','$cantidad')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto</title>
</head>
<body>

<h2>Agregar Producto</h2>

<form method="POST">

    Nombre:<br>
    <input type="text" name="nombre" required><br><br>

    Precio:<br>
    <input type="number" step="0.01" name="precio" required><br><br>

    Cantidad:<br>
    <input type="number" name="cantidad" required><br><br>

    <button type="submit">Guardar</button>

</form>

<br>

<a href="index.php">Volver</a>

</body>
</html>