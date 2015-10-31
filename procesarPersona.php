<?php
/**
 * Created by PhpStorm.
 * User: jorda
 * Date: 10/31/2015
 * Time: 1:31 PM
 */
?>
<?php

require_once "ConexionDB.php";

//Estacion 1
$conexion->query( "
		UPDATE
			persona
		SET
			nombre = '".$_POST[ 'nombre' ]."',
			edad = '".$_POST[ 'edad' ]."',
			sexo = '".$_POST[ 'sexo' ]."',
			direccion = '".$_POST[ 'direccion' ]."',
			estado_civil = '".$_POST[ 'estado_civil' ]."',
			hijos = '".$_POST[ 'hijos' ]."'
		WHERE
			IdPersona = '".$_POST[ 'IdPersona' ]."'
	" );


//Insertar medicamentos
#foreach ( $_POST[ 'medicamentos' ] as $trash => $medicamento ) {
#	$conexion->query( "INSERT INTO medicamentos_estacion1 VALUES( '".$id_estacion1."', '".$medicamento."' )" );
#}

header( 'Location: '. $direccion.'persona.php?id='.$_POST[ 'id' ] );

?>
