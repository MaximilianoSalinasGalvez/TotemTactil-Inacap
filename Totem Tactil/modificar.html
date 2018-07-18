<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar</title>
    <link rel="shortcut icon" href="img/inacap.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/estiloModificar.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="body_modificar">
   <div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<h1 class="brand" ><a href="index.php"><img src="img/inacap.png" alt="" /></a></h1>
					
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
						
							<?php
    
                                session_start();
                               
                                if(isset($_SESSION['u_nombre']))
                                {
                                   
                                    echo "<h1 id='b1'>Administrador: ".$_SESSION['u_nombre']."</h1>";
                                    
                                    
                                    echo "<a title='team' id='cerrar_sesion' href='cerrar.php'>Cerrar Sesión<img id='logo' src='img/icons/personal.png' width='30px height='30px'/></a>";
                                    echo "";
                                    
                                }
                                else
                                {
                                    header("location: login.php");
                                }

                            ?>
						</ul>    
					</nav>
				</div>
			</div>
		</div>
	</div>
  <!--Agregar Imagenes-->
  <div id="cont_agregar">
          <h1>Agregar Imagen a la base de datos</h1>
          <br>
          <br>
          <div id="cont_form1">
              <form action="guardar.php" method="POST" enctype="multipart/form-data">
              <input type="text" name="nombre" placeholder="Nombre" value=""><br>
              <input type="file" name="Imagen"><br>
              <input type="submit" value="Agregar">
          </form>
          </div>
          
  </div>
   <!-- Modificar -->
   <div id="contenedor_imagenes">
        <center>
		<table>
			<thead>
				<tr>

					<th colspan="2">Operaciones</th>
				</tr>
				
			</thead>
			<tbody>
				<?php
					include("conexion.php");

					$query = "SELECT * FROM imagenes";
					$resultado = $conn->query($query);
					while ($row = $resultado->fetch_assoc())
					{
					?>

						<tr>
							<td><?php echo $row['nombre']; ?></td>
							<td><?php echo $row['descripcion']; ?></td>
							<td><img height="300px" width="300px" src="data:image/jpg;base64,
							<?php echo base64_encode($row['ruta']);?>"/></td>
							<td><a href="modificar2.php?id=<?php echo $row['id'] ?>" >Modificar</a></td>
							<td><a href="eliminar.php?id=<?php echo $row['id'] ?>">Eliminar</a></td>
						</tr>
				<?php
					}
					?>
			</tbody>
		</table>
	</center>
   </div>
  
    
</body>
</html>