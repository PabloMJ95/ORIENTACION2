<?php
function conectar() {
    $host = "localhost:8889"; // Ajusta según tu configuración
    $user = "root"; 
    $pass = "root"; 
    $bd = "cuestionario_vocacional"; 

    $conn = mysqli_connect($host, $user, $pass, $bd);

    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    return $conn;
}
?>