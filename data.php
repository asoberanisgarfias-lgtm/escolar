<?php
$hostname = 'sql3.freesqldatabase.com'; // o el nombre del host de tu base de datos
$username = 'sql3800841';
$password = 'jkXYn52dN1';
$database = 'sql3800841';

// Crea la conexión
$conn = mysqli_connect($hostname, $username, $password, $database);

// Verifica la conexión
if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}

echo "Conexión exitosa";

// Aquí irían tus consultas SQL...

// Cierra la conexión
mysqli_close($conn);
?>
