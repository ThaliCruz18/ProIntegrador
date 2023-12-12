<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$user="root";
$password="12345678";
$bd="proyectointegrador";

// Parámetros recibidos desde el código QR
$curp = $_GET['curp'];

// Conecta a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Inserta los datos en la base de datos (esto es un ejemplo, puedes adaptarlo según tu estructura de base de datos)
$sql = "INSERT INTO `empleados` (`Id_Empleados`, `Nombre_E`, `Apellido_P`, `RFC`, `Puesto`, `Id_Areas`) VALUES (NULL, 'd', 'gfgb', 'gg', 'ggg', '1')";//Cambiar por la instruccion update

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}

// Cierra la conexión
$conn->close();
?>
