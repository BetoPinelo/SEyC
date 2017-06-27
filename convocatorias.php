<?php
require_once('conexion.php');

//$sql='SELECT convocatoria.*, archivo.* FROM convocatoria INNER JOIN archivo WHERE convocatoria.id_archivo = archivo.id_archivo' ;
$sql='SELECT convocatoria.*, archivo.* FROM convocatoria INNER JOIN archivo';
$consulta = $connection->prepare($sql);
$consulta->execute();
$results = $consulta->fetchAll();

//var_dump($results);
//echo "<br>";
//$rs = $results[0];

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
		
		<br>
		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<tr class="success">
					<th>Actividad</th>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Motivo</th>
					<th>Lugar</th>
					<th>PDF</th>
				</tr>
				<?php
				foreach ($results as $rs) {
				?>
				<tr>
					<td> <?php echo $rs['actividad']; ?> </td>
					<td> <?php echo $rs['fecha']; ?> </td>
					<td> <?php echo $rs['hora']; ?> </td>
					<td> <?php echo $rs['motivo']; ?> </td>
					<td> <?php echo $rs['lugar']; ?> </td>
					<td> <a href="<?php echo $rs['ruta']; ?>" target="_blank">Enlace</a> </td>
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