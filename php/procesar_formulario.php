<?php
// Establecer la conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datos";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$participante = $_POST['participante'];
$tematica = $_POST['tematica'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$País = $_POST['País'];
$provincia = $_POST['provincia'];


// Insertar los datos en la base de datos
$sql = "INSERT INTO dato (nombre, tematica, email, telefono, País, provincia, participante, cedula) VALUES ('$nombre', '$tematica', '$email', '$telefono', '$País', '$provincia', '$participante', '$cedula')";

if ($conn->query($sql) === TRUE) {
   // Mostrar el mensaje de éxito
   echo "Los datos se guardaron correctamente.";

   // Redireccionar a la página de pago después de unos segundos
   header("Refresh: 5; URL=https:index.html"); // Reemplaza "pagina_de_pago.php" con el nombre de la página de pago Asegurarse de que el script se detenga después de la redirección
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
