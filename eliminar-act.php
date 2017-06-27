<?php 
require_once('conexion.php');

$sql='DELETE FROM convocatoria WHERE id=:id';
$consulta = $connection->prepare($sql);
$consulta->bindParam(':id',$_GET['user']);
$consulta->execute();

header('location:admin.php');

?>