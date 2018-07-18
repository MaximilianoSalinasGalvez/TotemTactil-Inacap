<?php
include("conexion.php");
$id = $_REQUEST['id'];
$nombre = $_POST['nombre'];
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

$query = "UPDATE imagenes SET nombre='$nombre', ruta='$Imagen' WHERE id='$id'";
$resultado = $conn->query($query);

if ($resultado) {
	header("location: modificar.php");
}
else
{
	echo "Error";
}

?>