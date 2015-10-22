<?php

	require_once "ConexionDB.php";
	
	$id = $POST["id"];
	$peso = $POST["peso"];
	$talla = $POST["talla"];
	$imc = $POST["imc"];
	$circunferencia_branquial = $POST["circunferencia_branquial"];
	$circunferencia_abdominal = $POST["circunferencia_abdominal"];
	$circunferencia_cadera = $POST["circunferencia_cadera"];
	$pliege_tricipital = $POST["pliege_tricipital"];
	$pliege_branquial = $POST["pliege_branquial"];
	$pliege_cadera = $POST["pliege_cadera"];
	$pliege_muslo = $POST["pliege_muslo"];

	$conexion = conectar();

	$sql = "Update Nutricion set peso = $peso, talla = $talla, imc = $imc, circunferencia_branquial = $circunferencia_branquial, circunferencia_abdominal = $circunferencia_abdominal, circunferencia_cadera = $circunferencia_cadera, pliege_tricipital = $pliege_tricipital, pliege_branquial = $pliege_branquial, pliege_cadera = $pliege_cadera, pliege_muslo = $pliege_muslo where idNutricion = ".$id;

	if (mysqli_query($conexion, $sql)) {
		#redireccionar a la pagina
		header('Location: nutricion.html');
	}

?>