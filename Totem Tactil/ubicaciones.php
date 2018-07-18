<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Ubicaciones</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/inacap.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="css/estiloInfoJefe.css"> 
     <link rel="stylesheet" href="css/estiloUbicaciones.css"> 
     <link rel="stylesheet" href="css/estiloInfo.css"> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
         <!-- navbar -->
    <div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<h1 class="brand" ><a href="index.php"><img src="img/inacap.png" alt="" /></a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a title="team" href="index.php">Inicio</a></li>			
						</ul>    
					</nav>
				</div>
			</div>
		</div>
	</div>
	 <!--Ubicaciones--> 
	 <div id="cont_ubicaciones">
         <div id="cont_ubicaciones2">
                <h1 id="titulo_info"><strong>Ubicaciones de la sede</strong></h1>
    
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">¡Busca la ubicación deseada!</button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Ubicaciones Recomendadas</h4>
                </div>
                <div class="modal-body">
                      <div class="dropdown">
                        <button id="btn1" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">- Ver ubicaciones - 
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                           <li><a></a>
                            <table class="table">
                                <tr>
                                    <th>Nombre</th>
                                     <th>Descripción</th>
                                     
                                </tr>
                                <?php
                                    include("conexion.php");
                                    $query = "SELECT * FROM imagenes WHERE id='2' ";
                                    $resultado = $conn->query($query);
                                    while ($row = $resultado->fetch_assoc())
                                    {
                                    ?>

                                        <tr>
                                            <td><?php echo $row['nombre']; ?></td>
                                            <td><?php echo $row['descripcion']; ?></td>
                                            <td><img height="300px" width="300px" src="data:image/jpg;base64,
                                            <?php echo base64_encode($row['ruta']);?>"/></td>

                                        </tr>
                                <?php
                                    }
                                    
                                    
                                
                                ?>
                            </table>
                           </li>
                           <li>
                               <table class="table">
                                <tr>
                                    <th>Nombre</th>
                                     <th>Descripción</th>
                                     
                                </tr>
                                <?php
                                    include("conexion.php");
                                    $query = "SELECT * FROM imagenes WHERE id='5' ";
                                    $resultado = $conn->query($query);
                                    while ($row = $resultado->fetch_assoc())
                                    {
                                    ?>

                                        <tr>
                                            <td><?php echo $row['nombre']; ?></td>
                                            <td><?php echo $row['descripcion']; ?></td>
                                            <td><img height="300px" width="300px" src="data:image/jpg;base64,
                                            <?php echo base64_encode($row['ruta']);?>"/></td>

                                        </tr>
                                <?php
                                    }
                                    
                                    
                                
                                ?>
                            </table>
                           </li>
                           <li>
                               <table class="table">
                                <tr>
                                    <th>Nombre</th>
                                     <th>Descripción</th>
                                     
                                </tr>
                                <?php
                                    include("conexion.php");
                                    $query = "SELECT * FROM imagenes WHERE id='9' ";
                                    $resultado = $conn->query($query);
                                    while ($row = $resultado->fetch_assoc())
                                    {
                                    ?>

                                        <tr>
                                            <td><?php echo $row['nombre']; ?></td>
                                            <td><?php echo $row['descripcion']; ?></td>
                                            <td><img height="300px" width="300px" src="data:image/jpg;base64,
                                            <?php echo base64_encode($row['ruta']);?>"/></td>

                                        </tr>
                                <?php
                                    }
                                    
                                    
                                
                                ?>
                            </table>
                           </li>
                           <li>
                               <table class="table">
                                <tr>
                                    <th>Nombre</th>
                                     <th>Descripción</th>
                                     
                                </tr>
                                <?php
                                    include("conexion.php");
                                    $query = "SELECT * FROM imagenes WHERE id='7' ";
                                    $resultado = $conn->query($query);
                                    while ($row = $resultado->fetch_assoc())
                                    {
                                    ?>

                                        <tr>
                                            <td><?php echo $row['nombre']; ?></td>
                                            <td><?php echo $row['descripcion']; ?></td>
                                            <td><img height="300px" width="300px" src="data:image/jpg;base64,
                                            <?php echo base64_encode($row['ruta']);?>"/></td>

                                        </tr>
                                <?php
                                    }
                                    
                                    
                                
                                ?>
                            </table>
                           </li>
                           <li>
                               <table class="table">
                                <tr>
                                    <th>Nombre</th>
                                     <th>Descripción</th>
                                     
                                </tr>
                                <?php
                                    include("conexion.php");
                                    $query = "SELECT * FROM imagenes WHERE id='8' ";
                                    $resultado = $conn->query($query);
                                    while ($row = $resultado->fetch_assoc())
                                    {
                                    ?>

                                        <tr>
                                            <td><?php echo $row['nombre']; ?></td>
                                            <td><?php echo $row['descripcion']; ?></td>
                                            <td><img height="300px" width="300px" src="data:image/jpg;base64,
                                            <?php echo base64_encode($row['ruta']);?>"/></td>

                                        </tr>
                                <?php
                                    }
                                    
                                    
                                
                                ?>
                            </table>
                           </li>
                        </ul>
                      </div>
                </div>
              </div>
            </div>
          </div>
			
         </div>
	 </div>
</body>
</html>