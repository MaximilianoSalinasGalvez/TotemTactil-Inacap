<?php

session_start();

$usuario = $_POST['nombre'];
$contra = $_POST['clave'];

include("conexion.php");

$proceso = $conn->query("SELECT * FROM administrador WHERE nombre='$usuario' AND clave='$contra'");

   
	if ($resultado = mysqli_fetch_array($proceso))
	{
		
        $_SESSION['u_nombre'] = $usuario;
        
        header("location: modificar.php");
	}
	else if(!$resultado = mysqli_fetch_array($proceso))
    {
        header("location: login.php");

    }
    

?>