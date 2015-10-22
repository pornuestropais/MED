<?php

	require_once "ConexionDB.php";
	
	$id = $POST["id"];
	$glucometria = $POST["glucometria"];

	$conexion = conecglucometriar();

	$sql = "Update TerapiaFisica set glucometria = $glucometria where idEstacion3 = ".$id;

	if (mysqli_query($conexion, $sql)) {
		#redireccionar a la pagina
		header('Location: estacion3.html');
	}

?>