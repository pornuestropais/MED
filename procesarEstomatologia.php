<?php

	require_once "ConexionDB.php";
	
	$id = $POST["id"];
	$fecha_consulta = $POST["fecha_consulta"];
	$facilitador = $POST["facilitador"];
	$ayuna = $POST["ayuna"];
	$tratamiento_medico = $POST["tratamiento_medico"];
	$tratamiento_medico_descipcion = $POST["tratamiento_medico_descipcion"];
	$enfermedad = $POST["enfermedad"];
	$enfermedad_descripcion = $POST["enfermedad_descripcion"];
	$alergias = $POST["alergias"];
	$alergias_descripcion = $POST["alergias_descripcion"];
	$diagnostico = $POST["diagnostico"];
	$tratamiento = $POST["tratamiento"];
	$nombre_supervisor = $POST["nombre_supervisor"];

	$conexion = conectar();

	$sql = "Update Estomatologia set fecha_consulta = $fecha_consulta, facilitador = $facilitador, ayuna = $ayuna, tratamiento_medico = $tratamiento_medico, tratamiento_medico_descipcion = $tratamiento_medico_descipcion, enfermedad = $enfermedad, enfermedad_descripcion = $enfermedad_descripcion, alergias = $alergias, alergias_descripcion = $alergias_descripcion, diagnostico = $diagnostico, tratamiento = $tratamiento, nombre_supervisor = $nombre_supervisor where idEstomatologia = ".$id;

	if (mysqli_query($conexion, $sql)) {
		#redireccionar a la pagina
		header('Location: estomatologia.html');
	}

?>