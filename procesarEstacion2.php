<?php

	require_once "ConexionDB.php";
	
	$id = $POST["id"];
	$TA = $POST["TA"];
	$FC = $POST["FC"];
	$FR = $POST["FR"];
	$Nutricion_idNutricion = $POST["Nutricion_idNutricion"];

	$conexion = conectar();

	$sql = "Update TerapiaFisica set TA = $TA, FC = $FC, FR = $FR, Nutricion_idNutricion = $id, pat_otros = $pat_otros, nop_cafe = $nop_cafe, nop_te = $nop_te, nop_drogas = $nop_drogas, nop_alcohol = $nop_alcohol, nop_otros = $nop_otros, medicamentos = $medicamentos where idEstacion2 = ".$id;

	if (mysqli_query($conexion, $sql)) {
		#redireccionar a la pagina
		header('Location: estacion2.html');
	}

?>