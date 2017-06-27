<?php
session_start();
require_once('conexion.php');

if (isset($_SESSION['username'] )) {
	//header('location:index.php');		
}

$sql='SELECT personal.*, zona.numero FROM personal INNER JOIN zona WHERE personal.id_zona = zona.id_zona';
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
							<li><a href="crear_user.php">Crear Usuario Nuevo</a></li>
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
				<?php
				foreach ($results as $rs) {
				?>
				<tr>
					<td> <?php echo $rs['nombres']; 	?> </td>
					<td> <?php echo $rs['apellidos']; 	?> </td>
					<td> <?php echo $rs['email']; 		?> </td>
					<td> <?php echo $rs['telefono']; 	?> </td>
					<td> <?php echo $rs['puesto']; 		?> </td>
					<td> <?php echo $rs['usuario']; 	?> </td>
					<td> <?php echo $rs['password']; 	?> </td>
					<td> <?php echo $rs['numero']; 		?> </td>
					<td> <a href="eliminar.php?user=<?php echo $rs['id_personal'];?>" role="button"> <span class="glyphicon glyphicon-remove"></span></a> </td>
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