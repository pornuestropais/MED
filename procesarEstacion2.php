<?php

	require_once "ConexionDB.php";
	
	$id = $_POST[ "id" ];
	$TA = $_POST[ "TA" ];
	$FC = $_POST[ "FC" ];
	$FR = $_POST[ "FR" ];

	//Estacion 1
	$conexion->query( "
		UPDATE
			estacion2
		SET
			TA = '$TA',
			FC = '$FC',
			FR = '$FR'
		WHERE
			idEstacion2 = '".$id."'
	" );

		header( 'Location: '. $direccion.'estacion2.php?id='.$id );
?>