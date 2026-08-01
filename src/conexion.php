<?php

$host = "db";
$user = "root";
$password = "123456";
$database = "crud_productos";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>