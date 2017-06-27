<?php
session_start();
require_once('conexion.php');

if (isset($_SESSION['username'] )) {
	//header('location:index.php');		
}

if(isset($_POST['register'])){
	$sql='INSERT INTO personal (nombres, apellidos, email, telefono, puesto, usuario, password, id_zona) VALUES (:name,:lastname,:mail,:phone,:pues,:us,:pas,:id)';
	//$sql='INSERT INTO personal (nombres) VALUES (:username)';
	$consulta = $connection->prepare($sql);
	$consulta->bindParam(':name',$_POST['nombre']);
	$consulta->bindParam(':lastname',$_POST['apellidos']);
	$consulta->bindParam(':mail',$_POST['email']);
	$consulta->bindParam(':phone',$_POST['telefono']);
	$consulta->bindParam(':pues',$_POST['puesto']);
	$consulta->bindParam(':us',$_POST['user']);
	$consulta->bindParam(':pas',$_POST['pass']);
	$consulta->bindParam(':id',$_POST['zona']);
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
							<li><a href="registrar_user.php">Regresar</a></li>
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
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Email</th>
					<th>Telefono</th>
					<th>Puesto</th>
					<th>Usuario</th>
					<th>Password</th>
					<th>Zona</th>
				</tr>
			<form action="" class="" method="post">
				<tr>
					<td><input class="form-control" name="nombre" type="text"></td>
					<td><input class="form-control" name="apellidos" type="text"></td>
					<td><input class="form-control" name="email" type="text"></td>
					<td><input class="form-control" name="telefono" type="text"></td>
					<td><input class="form-control" name="puesto" type="text"></td>
					<td><input class="form-control" name="user" type="text"></td>
					<td><input class="form-control" name="pass" type="text"></td>
					<td><input class="form-control" name="zona" type="text"></td>
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