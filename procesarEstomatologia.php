<?php

require_once "ConexionDB.php";

//Estacion 1
$conexion->query( "
		UPDATE
			 estomatologia
		SET
			facilitador = '".$_POST[ 'facilitador' ]."',
			ayuna = '".$_POST[ 'ayuna' ]."',
			tratamiento_medico = '".$_POST[ 'tratamiento_medico' ]."',
			tratamiento_medico_descripcion = '".$_POST[ 'tratamiento_medico_descripcion' ]."',
			enfermedad = '".$_POST[ 'enfermedad' ]."',
			enfermedad_descripcion = '".$_POST[ 'enfermedad_descripcion' ]."',
			alergias = '".$_POST[ 'alergias' ]."',
			alergias_descripcion = '".$_POST[ 'alergias_descripcion' ]."',
			diiagnostico = '".$_POST[ 'diiagnostico' ]."',
			tratamiento = '".$_POST[ 'tratamiento' ]."',
			nombre_supervisor = '".$_POST[ 'nombre_supervisor' ]."'
		WHERE
			idEstomatologia = '".$_POST[ 'id' ]."'
	" );


//Insertar medicamentos
#foreach ( $_POST[ 'medicamentos' ] as $trash => $medicamento ) {
#	$conexion->query( "INSERT INTO medicamentos_estacion1 VALUES( '".$id_estacion1."', '".$medicamento."' )" );
#}

header( 'Location: '. $direccion.'estomatologia.php?id='.$_POST[ 'id' ] );

?>