<?php
include("conexion.php");
$conn = conectar();

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2']; 
// Agrega aquí las demás preguntas

// Insertar datos en la base de datos
$sql = "INSERT INTO respuestas (nombre, edad, email, q1, q2) VALUES ('$nombre', '$edad', '$email', '$q1', '$q2')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Respuestas guardadas correctamente.');
            window.location.href = 'results.html';
          </script>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
