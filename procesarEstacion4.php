<?php

	require_once "ConexionDB.php";
	
	$id = $POST["id"];
	$evaluacion = $POST["evaluacion"];

	$conexion = conecevaluacionr();

	$sql = "Update TerapiaFisica set evaluacion = $evaluacion where idEstacion4 = ".$id;

	if (mysqli_query($conexion, $sql)) {
		#redireccionar a la pagina
		header('Location: estacion4.html');
	}

?>