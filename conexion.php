<?php
$servername = "localhost";
$username = "id22199835_wiintt";
$password = "kaLu0811._";
$dbname = "id22199835_todo_list";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}