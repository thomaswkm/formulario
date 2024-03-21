<?php

$ip = "localhost";
$usuario = "root";
$password = "";
$database = "formulario";
$conn = new mysqli($ip, $usuario, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: ". $conn->connect_error);
}
echo "Conexión exitosa. ";
?>
