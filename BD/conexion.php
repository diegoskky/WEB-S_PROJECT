<?php
$usuario = "root";
$contrasena = "";
$nombre_bd = "pagina_maestros";

try {
	$bd = new PDO (
		'mysql:host=localhost;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena
	);
} catch (Exception $e) {
	echo "Problema con la conexión";
}

?>