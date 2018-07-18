 <?php
$servername = "localhost";
$user = "root";
$password = "";
$bd = "prueba";

// Create connection
$conn = mysqli_connect($servername, $user, $password, $bd);

// Check connection
if (!$conn) {
    die("Conexion fallada: " . mysqli_connect_error());
}


?>