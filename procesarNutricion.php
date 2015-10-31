<?php

	require_once "ConexionDB.php";

$conexion->query( "
		UPDATE
			nutricion
		SET
			peso = '".$_POST[ 'peso' ]."',
			talla = '".$_POST[ 'talla' ]."',
			imc = '".$_POST[ 'imc' ]."',
			circunferencia_branquial = '".$_POST[ 'circunferencia_branquial' ]."',
			circunferencia_abdominal = '".$_POST[ 'circunferencia_abdominal' ]."',
			circunferencia_Cadera = '".$_POST[ 'circunferencia_Cadera' ]."',
			pliegue_tricipital = '".$_POST[ 'pliegue_tricipital' ]."',
			pliegue_branquial = '".$_POST[ 'pliegue_branquial' ]."',
			pliegue_cadera = '".$_POST[ 'pliegue_cadera' ]."',
			pliegue_muslo = '".$_POST[ 'pliegue_muslo' ]."'
		WHERE
			idNutricion = '".$_POST[ 'id' ]."'
	" );


//Insertar medicamentos
#foreach ( $_POST[ 'medicamentos' ] as $trash => $medicamento ) {
#	$conexion->query( "INSERT INTO medicamentos_estacion1 VALUES( '".$id_estacion1."', '".$medicamento."' )" );
#}

header( 'Location: '. $direccion.'nutricion.php?id='.$_POST[ 'id' ] );
?>