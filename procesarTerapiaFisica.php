<?php

	require_once "ConexionDB.php";
	
	$id = $POST["id"];
	$historia_medica = $POST["historia_medica"];
	$precauciones = $POST["precauciones"];
	$medicamentos = $POST["medicamentos"];
	$historia_diagnostico = $POST["historia_diagnostico"];
	$lugar_dolor = $POST["lugar_dolor"];
	$tipo_dolor = $POST["tipo_dolor"];
	$paralisis = $POST["paralisis"];
	$tipo_paralisis = $POST["tipo_paralisis"];
	$tono_muscular = $POST["tono_muscular"];
	$comentario_radiografico = $POST["comentario_radiografico"];
	$postura = $POST["postura"];
	$limitaciones_ADV = $POST["limitaciones_ADV"];
	$prueba_especial = $POST["prueba_especial"];
	$comentario = $POST["comentario"];
	$diagnostico_clinico = $POST["diagnostico_clinico"];

	$conexion = conectar();

	$sql = "Update TerapiaFisica set historia_medica = $historia_medica, precauciones = $precauciones, medicamentos = $medicamentos, historia_diagnostico = $historia_diagnostico, lugar_dolor = $lugar_dolor, tipo_dolor = $tipo_dolor, paralisis = $paralisis, tipo_paralisis = $tipo_paralisis, tono_muscular = $tono_muscular, comentario_radiografico = $comentario_radiografico, postura = $postura, limitaciones_ADV = $limitaciones_ADV, prueba_especial = $prueba_especial, comentario = $comentario, diagnostico_clinico = $diagnostico_clinico where idTerapiaFisica = ".$id;

	if (mysqli_query($conexion, $sql)) {
		#redireccionar a la pagina
		header('Location: terapiafisica.html');
	}

?>