<?php
include "conexion.php";

$id = $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];

    $sql = "UPDATE productos
            SET nombre='$nombre',
                precio='$precio',
                cantidad='$cantidad'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$resultado = $conn->query("SELECT * FROM productos WHERE id=$id");
$fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
</head>
<body>

<h2>Editar Producto</h2>

<form method="POST">

    Nombre:<br>
    <input type="text" name="nombre" value="<?= $fila['nombre'] ?>" required><br><br>

    Precio:<br>
    <input type="number" step="0.01" name="precio" value="<?= $fila['precio'] ?>" required><br><br>

    Cantidad:<br>
    <input type="number" name="cantidad" value="<?= $fila['cantidad'] ?>" required><br><br>

    <button type="submit">Actualizar</button>

</form>

<br>

<a href="index.php">Volver</a>

</body>
</html>