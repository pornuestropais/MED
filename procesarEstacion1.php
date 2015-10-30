<?php

	require_once "ConexionDB.php";

	//Estacion 1
	$conexion->query( "
		UPDATE
			estacion1
		SET
			pat_dm = '".$_POST[ 'pat_dm' ]."',
			pat_hta = '".$_POST[ 'pat_hta' ]."',
			pat_alergias = '".$_POST[ 'pat_alergias' ]."',
			pat_cirugias = '".$_POST[ 'pat_cirugias' ]."',
			pat_otros = '".$_POST[ 'pat_otros' ]."',
			nop_cafe = '".$_POST[ 'nop_cafe' ]."',
			nop_te = '".$_POST[ 'nop_te' ]."',
			nop_drogas = '".$_POST[ 'nop_drogas' ]."',
			nop_alcohol = '".$_POST[ 'nop_alcohol' ]."',
			nop_otros = '".$_POST[ 'nop_otros' ]."',
			medicamentos = '".$_POST[ 'medicamentos' ]."'
		WHERE
			idEstacion1 = '".$_POST[ 'id' ]."'
	" );

	
	//Insertar medicamentos
	#foreach ( $_POST[ 'medicamentos' ] as $trash => $medicamento ) {
	#	$conexion->query( "INSERT INTO medicamentos_estacion1 VALUES( '".$id_estacion1."', '".$medicamento."' )" );
	#}

	header( 'Location: '. $direccion.'estacion1.php?id='.$_POST[ 'id' ] );

?>