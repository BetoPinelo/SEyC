<?php 
require_once('conexion.php');

$sql='DELETE FROM personal WHERE id_personal=:id';
$consulta = $connection->prepare($sql);
$consulta->bindParam(':id',$_GET['user']);
$consulta->execute();

header('location:registrar_user.php');

?>