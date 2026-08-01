<?php
include "conexion.php";

$id = $_GET["id"];

$sql = "DELETE FROM productos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
  <?php

echo "Módulo eliminar productos funcionando";

?>
}
?>