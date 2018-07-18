<?php
    session_start();
    if(isset($_SESSION['u_nombre']))
    {
        header("location: modificar.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<title>Totem Táctil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/estilologin.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/favicon.jpg">
    <link rel="shortcut icon" href="img/inacap.png" width="200px" heigth="80px">
    <script src="js/jquery.js"></script>
    <!--
    <script>
        
        $(document).ready(function(){
            $("#boton").click(function(){
               
               verificar();
               
            });
            
            $("#usuario").keyup(function(){
                document.getElementById("lbl1").innerHTML = "";
            });
            $("#pass").keyup(function(){
                document.getElementById("lbl1").innerHTML = "";
            });
        });
        
        function verificar(){
            var user=$("#usuario").val();
            var pass=$("#pass").val();
            if(user==""){
                document.getElementById("lbl1").innerHTML = "Ingrese correctamente el usuario";
            }
            else if(pass==""){
                document.getElementById("lbl1").innerHTML = "Ingrese correctamente la contraseña";
            }
            else
            {
                window.location.href = "validar.php";
            }
        } 
        
          
    </script>
    -->
</head>
<body>
    <div id="contenedor_login">   
       <div id="contenedor_form">
           
            <form id="form_login" action="validar.php" method="POST">
            <h2> Panel Administración</h2>
            <input id="usuario" type="text" name="nombre" placeholder="&#128272; Usuario"><br>
            
            <input id="pass" type="password" name="clave" placeholder="&#128272; Contraseña"><br>
            
            <input id="boton" type="submit" name="btnInicio" value="Iniciar Sesión">	 
            <lbl id="lbl1"></lbl>   	
           </form>        
          </div>        
    </div>
       <div id="contenedor_volver">
          <a id="boton_volver" href="index.php">Volver</a>
       </div>
    
</body>
</html>