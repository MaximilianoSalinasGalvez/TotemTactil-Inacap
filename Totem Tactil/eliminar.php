<?php
include("conexion.php");

$id = $_REQUEST['id'];

$query = "DELETE FROM imagenes WHERE id='$id'";
$resultado = $conn->query($query);

if ($resultado) {
	header("location: modificar.php");
}
else
{
	echo "Error";
}

?>