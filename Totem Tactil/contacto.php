<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Contacto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/inacap.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="css/estiloContacto.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="img/inacap.png">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
    <!-- navbar -->
    <div class="navbar-wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <!-- Responsive navbar -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </a>
                    <h1 class="brand"><a href="index.php"><img src="img/inacap.png" alt="" /></a></h1>
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
    <div class="cont_contacto">
         <section id="contact">
			<div class="section-content">
				<h1 class="section-header">¿Qué esperas? <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Contáctanos</span></h1>
				<h3>Si tienes dudas, consultas, reclamos ¡No olvides dejarla en un comentario!</h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form>
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Nombre</label>
					    	<input type="text" class="form-control" id="" placeholder=" Nombre">
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Correo</label>
					    	<input type="email" class="form-control" id="exampleInputEmail" placeholder="Correo de contacto">
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone">Celular</label>
					    	<input type="tel" class="form-control" id="telephone" placeholder="Número de celular">
			  			</div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="description"> Mensaje</label>
			  			 	<textarea  class="form-control" id="description" placeholder="Escriba aquí su mensaje"></textarea>
			  			</div>
			  			<div>

			  				<button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar Mensaje </button>
			  			</div>
			  			
					</div>
				</form>
			</div>
             </div>
		</section>
    </div>

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
		<!-- ./container -->
    </footer>
    <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>


</body>

</html>