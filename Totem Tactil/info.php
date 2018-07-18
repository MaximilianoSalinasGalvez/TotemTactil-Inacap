<?php
    include("conexion.php");

 $adm ="SELECT * FROM administrativa";
 $resAdm = $conn->query($adm);
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Informacion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/inacap.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
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
							<li><a title="services" href="info.php">Informacion</a></li>
                           
							<li><a title="contact" href="contacto.php">Contacto</a></li>
							
						</ul>    
					</nav>
				</div>
			</div>
		</div>
	</div>

    <div class="cont_info">
       <div class="cont_info2">
        <h1 id="titulo_info"><strong>INFORMACIÓN ADMINISTRATIVA INACAP</strong></h1>
    
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Información</button>

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Información Administrativa</h4>
                </div>
                <div class="modal-body">
                      <div class="dropdown">
                        <button id="btn1" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">- Áreas Administrativas - 
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                           <li><a></a>
                            <table class="table">
                                <tr>
                                    <th>Nombre Área</th>
                                     <th>Encargado</th>
                                     <th>Fono</th>
                                     <th>Correo</th>
                                      <th>Horario</th>
                                </tr>
                                <?php
                                while ($proceso = $resAdm->fetch_array(MYSQLI_BOTH))
                                {
                                    echo '
                                        <tr>
                                                
                                                <td>'.$proceso['nombre'].'</td>
                                                <td>'.$proceso['encargado'].'</td>
                                                <td>'.$proceso['fono'].'</td>
                                                <td>'.$proceso['correo'].'</td>
                                                <td>'.$proceso['horario'].'</td>
                                        </tr>
                                    ';
                                    
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
<footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<ul class="social-networks">
						<li><a href="#"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
						<li><a href="login.php"><i class="icon-circled icon-bgdark icon-user icon-2x"></i></a></li>
					</ul>
					<p class="copyright">
						&copy; Totem Táctil.
						<div class="credits">
                            <div>Inacap 2018 &reg; Todos los derechos reservados</div>
							
						</div>
					</p>
				</div>
			</div>
        </div>
    </footer>
    <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>

</html>