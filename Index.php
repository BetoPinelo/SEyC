<?php
require_once('conexion.php');
session_start();

 if(isset($_POST['login'])){
 	if(empty($_POST['user']) || empty($_POST['pass'])){
 ?>
		<div class="alert alert-danger alert-dismissable">
 			<button type="button" class="close" data-dismiss="alert">&times;</button>
  			<strong>ERROR!</strong> El campo "Usuario" y/o el campo "Contraseña" estan vacios.
		</div>
 <?PHP
 	}else{
 		$sql='SELECT * FROM personal WHERE usuario = :username AND password = :pass';
 		$login = $connection->prepare($sql);
 		$login->bindParam(':username',$_POST['user']);
 		$login->bindParam(':pass',$_POST['pass']);
 		$login->execute();

 		if($login = $login->fetch(PDO::FETCH_ASSOC)){
 			$_SESSION['username'] = $_POST['user'];
 			$_SESSION['id'] = $login['id_personal'];

 			if ($login['puesto']=='admin') {
 				header("Location:registrar_user.php");
 				echo "admin";
 			} else {
 				echo "otro";
 				header("Location:admin.php");
 			}

 		}else{
?>
			<div class="alert alert-warning alert-dismissable">
 				<button type="button" class="close" data-dismiss="alert">&times;</button>
  				<strong>ERROR!</strong> El campo "Usuario" y/o el campo "Contraseña" son incorrectos.
			</div>
<?PHP
 		}
 	}	
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
		
	<section class="row">
		<article class="col-xs-12 col-sm-8 col-md-9">
			
			<div id="carousel-1" class="carousel slide" data-ride="carousel">
				<!--indicadores-->
				<ol class="carousel-indicators">
					<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-1" data-slide-to="1"></li>
					<li data-target="#carousel-1" data-slide-to="2"></li>
					<li data-target="#carousel-1" data-slide-to="3"></li>
				</ol>
				<!--contenedor de los slides-->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/inicio/c1.jpg" class="img-responsive" alt="">
					</div>
					<div class="item">
						<img src="img/inicio/c2.jpg" class="img-responsive" alt="">
					</div>
					<div class="item">
						<img src="img/inicio/c3.jpg" class="img-responsive" alt="">
					</div>
					<div class="item">
						<img src="img/inicio/c4.jpg" class="img-responsive" alt="">
					</div>
				</div>
			</div>

		</article>
		
		<aside class="col-xs-12 col-sm-4 col-md-3">
			<form action="" class="" method="post">
				<div class="form-group">
					<label for="user">Usuario: </label>
					<input class="form-control" name="user" id="user" type="text">
				
					<label for="contra">Contraseña: </label>
					<input class="form-control" name="pass" id="contra" type="password">
				</div>
				<button class="btn btn-primary" name="login" type="submit">Ingresar</button>
			</form>
		</aside>

	</section>

	</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>