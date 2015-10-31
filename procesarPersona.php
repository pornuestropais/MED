<?php

require_once "ConexionDB.php";

$conexion->query( "
		INSERT INTO
			persona
		VALUES(
				IdPersona = '".$_POST['IdPersona']."',
				nombre = '".$_POST[ 'nombre' ]."',
				edad = '".$_POST[ 'edad' ]."',
				sexo = '".$_POST[ 'sexo' ]."',
				direccion = '".$_POST[ 'direccion' ]."',
				estado_civil = '".$_POST[ 'estado_civil' ]."',
				hijos = '".$_POST[ 'hijos' ]."')");

//Insertar medicamentos
#foreach ( $_POST[ 'medicamentos' ] as $trash => $medicamento ) {
#	$conexion->query( "INSERT INTO medicamentos_estacion1 VALUES( '".$id_estacion1."', '".$medicamento."' )" );
#}

header( 'Location: '. $direccion.'persona.php?id='.$_POST[ 'id' ] );
?>
