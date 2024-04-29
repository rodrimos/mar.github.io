<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "coordenadas_db";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión establecida correctamente con la base de datos.<br>";
}

// Obtener las coordenadas enviadas por JavaScript
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];

// Insertar las coordenadas en la base de datos
$sql = "INSERT INTO coordenadas (latitud, longitud) VALUES ('$latitud', '$longitud')";

if ($conn->query($sql) === TRUE) {
    echo "Coordenadas guardadas correctamente";
} else {
    echo "Error al guardar las coordenadas: " . $conn->error;
}

$conn->close();
?>
