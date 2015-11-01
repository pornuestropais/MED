<?php

	require_once "ConexionDB.php";

$conexion->query( "
		UPDATE
			terapiafisica
		SET
			historia_medica = '".$_POST[ 'historia_medica' ]."',
			precauciones = '".$_POST[ 'precauciones' ]."',
			medicamento = '".$_POST[ 'medicamento' ]."',
			lugar_dolor = '".$_POST[ 'lugar_dolor' ]."',
			tipo_dolor = '".$_POST[ 'tipo_dolor' ]."',
			intensidad_dolor = '".$_POST[ 'intensidad_dolor' ]."',
			tipo_paralisis = '".$_POST[ 'tipo_paralisis' ]."',
			tono_muscular = '".$_POST[ 'tono_muscular' ]."',
			musculo = '".$_POST[ 'musculo' ]."',
			comentario_radiografico = '".$_POST[ 'comentario_radiografico' ]."',
			postura = '".$_POST[ 'postura' ]."',
			limitaciones_ADV = '".$_POST[ 'limitaciones_ADV' ]."',
			prueba_especial = '".$_POST[ 'prueba_especial' ]."',
			comentario = '".$_POST[ 'comentario' ]."',
			diagnostico_clinico = '".$_POST[ 'diagnostico_clinico' ]."'
		WHERE
			idTerapiaFisica = '".$_POST[ 'id' ]."'
	" );

	header( 'Location: '. $direccion.'terapiafisica.php?id='.$_POST[ 'id' ] );

?>