<?php
require_once('conexion.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>SEyC</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div class="container">
		<br>
		<header>
			<div class="container">
				<img src="img/cabecera.jpg" alt="" class="img-responsive img-rounded">
			</div>
			
			<nav class="navbar navbar-default navbar-static-top"  role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-seyc">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!--<a href="#" class="navbar-brand">SEyC</a>-->
					<!--Inicia Menu-->
					<div class="collapse navbar-collapse" id="navegacion-seyc">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">INICIO</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"> ZONAS <span class="caret"></span> </a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="zonas.php?zona=5">ZONA 05</a></li>
									<li><a href="zonas.php?zona=6">ZONA 06</a></li>
									<li><a href="zonas.php?zona=7">ZONA 07</a></li>
									<li><a href="zonas.php?zona=14">ZONA 14</a></li>
									<li><a href="zonas.php?zona=16">ZONA 16</a></li>
									<li><a href="zonas.php?zona=23">ZONA 23</a></li>
									<li><a href="zonas.php?zona=32">ZONA 32</a></li>
									<li><a href="zonas.php?zona=44">ZONA 44</a></li>
									<li><a href="zonas.php?zona=46">ZONA 46</a></li>
									<li><a href="zonas.php?zona=60">ZONA 60</a></li>
								</ul>
							</li>
							<li><a href="convocatorias.php">CONVOCATORIAS</a></li>
							<li><a href="contactanos.php">CONTACTANOS</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		</header>


		<div class="col-xs-12 col-sm-2"></div>
		<div class="col-xs-12 col-sm-6">
			<div class="container">
				<img src="img/user.jpg" class="img-responsive" alt="">
				<h4><b>Candelario Perez y Manrique</b></h4>
				<h5>Correo: cande_2_4@hotmail.com</h5>
				<h5>Telefono: 983 752 0099</h5>

				<br><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d997.6911041500211!2d-88.04803248735135!3d19.578394825804804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1497903881579" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4"></div>

		

	</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>