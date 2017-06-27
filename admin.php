<?php
session_start();
require_once('conexion.php');

if (isset($_SESSION['username'] )) {
	//header('location:index.php');		
}

$sql='SELECT * FROM convocatoria';
$consulta = $connection->prepare($sql);
$consulta->execute();
$results = $consulta->fetchAll();
//var_dump($results);

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
							<li class="active"><a href="crear_evento.php">Crear Evento Nuevo</a></li>
							<li><a href="cerrarsession.php">Cerrar Sessión</a></li>
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
				<?php
				foreach ($results as $rs) {
				?>
				<tr>
					<td> <?php echo $rs['actividad']; 	?> </td>
					<td> <?php echo $rs['fecha']; 	?> </td>
					<td> <?php echo $rs['hora']; 		?> </td>
					<td> <?php echo $rs['motivo']; 	?> </td>
					<td> <?php echo $rs['lugar']; 		?> </td>
					<td> <a href="eliminar-act.php?user=<?php echo $rs['id'];?>" role="button"> <span class="glyphicon glyphicon-remove"></span></a> </td>
				</tr>
				<?php
				}  
				?> 
			</table>
		</div>	
	

	</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>