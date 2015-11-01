<?php

	require_once "ConexionDB.php";
	
	$id = $_POST["id"];
	$glucometria = $_POST["glucometria"];

	//Estacion 3
	$conexion->query( "
		UPDATE
			estacion3
		SET
			glucometria = '$glucometria'
		WHERE
			idEstacion3 = '".$_POST[ 'id' ]."'
	" );

	header( 'Location: '. $direccion.'estacion3.php?id='.$id );

?>