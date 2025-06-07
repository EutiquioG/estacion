<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estacion_meteorologica";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$temperatura = $_POST['temperatura'];
$humedad = $_POST['humedad'];
$presion = $_POST['presion'];

$sql = "INSERT INTO datos (temperatura, humedad, presion)
VALUES ('$temperatura', '$humedad', '$presion')";

if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
