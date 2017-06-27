<?PHP

$dsn 	= 'mysql:dbname=seyc;host=localhost';
$user 	= 'root';
$password = '';

try {
	$connection = new PDO (
		$dsn,
		$user,
		$password
	);
	//echo "conexion existosa";

} catch (Exception $e) {
	echo "Error " . $e->getMessage();
}

?>