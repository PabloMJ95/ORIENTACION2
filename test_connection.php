<?php
// Conexión a la base de datos
$host = 'localhost';
$user = 'root';  // Usuario predeterminado de MAMP
$password = 'root';  // Contraseña predeterminada de MAMP
$dbname = 'cuestionario_vocacional';  // Nombre de la base de datos

// Establecer la conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa";
}

$conn->close();
?>