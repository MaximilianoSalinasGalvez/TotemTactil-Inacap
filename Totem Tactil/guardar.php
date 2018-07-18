<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

$query = "INSERT INTO imagenes(nombre,ruta) VALUES('$nombre','$Imagen')";
$resultado = $conn->query($query);

if ($resultado) {
	header("location: modificar.php");
}
else
{
	echo "Error";
}

?>