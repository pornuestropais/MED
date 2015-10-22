<?php

	require_once "ConexionDB.php";
	
	$id = $POST["id"];
	$pat_dm = $POST["pat_dm"];
	$pat_hta = $POST["pat_hta"];
	$pat_alergias = $POST["pat_alergias"];
	$pat_cirugias = $POST["pat_cirugias"];
	$pat_otros = $POST["pat_otros"];
	$nop_cafe = $POST["nop_cafe"];
	$nop_te = $POST["nop_te"];
	$nop_drogas = $POST["nop_drogas"];
	$nop_alcohol = $POST["nop_alcohol"];
	$nop_otros = $POST["nop_otros"];
	$medicamentos = $POST["medicamentos"];

	$conexion = conectar();

	$sql = "Update TerapiaFisica set pat_dm = $pat_dm, pat_hta = $pat_hta, pat_alergias = $pat_alergias, pat_cirugias = $pat_cirugias, pat_otros = $pat_otros, nop_cafe = $nop_cafe, nop_te = $nop_te, nop_drogas = $nop_drogas, nop_alcohol = $nop_alcohol, nop_otros = $nop_otros, medicamentos = $medicamentos where idEstacion1 = ".$id;

	if (mysqli_query($conexion, $sql)) {
		#redireccionar a la pagina
		header('Location: estacion1.html');
	}

?>