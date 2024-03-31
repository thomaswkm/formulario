<?php

$ip = "localhost";
$usuario = "root";
$password = "G#5tRd@9qXs!";
$database = "formulario";
$conn = new mysqli($ip, $usuario, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: ". $conn->connect_error);
}
echo "Conexión exitosa. ";
?>
