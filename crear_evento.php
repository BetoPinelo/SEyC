<?php
session_start();
require_once('conexion.php');

if (isset($_SESSION['username'] )) {
	//header('location:index.php');		
}

if(isset($_POST['register'])){
	$sql='INSERT INTO convocatoria (actividad, fecha, hora, motivo, lugar) VALUES (:actividad,:fecha,:hora,:motivo,:lugar)';
	//$sql='INSERT INTO personal (nombres) VALUES (:username)';
	$consulta = $connection->prepare($sql);
	$consulta->bindParam(':actividad',$_POST['actividad']);
	$consulta->bindParam(':fecha',$_POST['fecha']);
	$consulta->bindParam(':hora',$_POST['hora']);
	$consulta->bindParam(':motivo',$_POST['motivo']);
	$consulta->bindParam(':lugar',$_POST['lugar']);
	$consulta->execute();
	$results = $consulta->fetchAll();
}

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
							<li><a href="admin.php">Regresar</a></li>
							<li class="active"><a href="cerrarsession.php">Cerrar Sessión</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		</header>

		<br>
		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<tr class="success">
					<th>Actividad</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Motivo</th>
					<th>Lugar</th>
				</tr>
			<form action="" class="" method="post">
				<tr>
					<td><input class="form-control" name="actividad" type="text"></td>
					<td><input class="form-control" name="fecha" type="date"></td>
					<td><input class="form-control" name="hora" type="time"></td>
					<td><input class="form-control" name="motivo" type="text"></td>
					<td><input class="form-control" name="lugar" type="text"></td>
					<td><button class="btn btn-primary" name="register" type="submit">Registrar</button></td>
				</tr>
			</form>
			</table>
		</div>	
	

	</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>