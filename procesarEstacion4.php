<?php

	require_once "ConexionDB.php";
	
	$id = $_POST["id"];
	$evaluacion = utf8_encode( $_POST["evaluacion"] );

	$conexion->query( "
		UPDATE
			Estacion4
		SET
			evaluacion = '$evaluacion'
		WHERE
			idEstacion4 = '".$id."'
	" );
	

	header( 'Location: '. $direccion.'estacion4.php?id='.$id );

?>