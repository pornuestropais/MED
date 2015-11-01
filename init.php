<?php
	
	require_once $direccion."/ConexionDB.php";
	$id = 1;
	for($id = 1;$id<=1000;$id++) {

		$conexion->query("INSERT INTO persona (idPersona) VALUES (" . $id . ");");
		$conexion->query("INSERT INTO terapiafisica (idTerapiaFisica) VALUES (" . $id . ");");
		$conexion->query("INSERT INTO nutricion (idNutricion) VALUES (" . $id . ");");
		$conexion->query("INSERT INTO estomatologia (idEstomatologia) VALUES (" . $id . ");");
		$conexion->query("INSERT INTO estacion1 (idEstacion1) VALUES (" . $id . ");");
		$conexion->query("INSERT INTO estacion2 (idEstacion2) VALUES (" . $id . ");");
		$conexion->query("INSERT INTO estacion3 (idEstacion3) VALUES (" . $id . ");");
		$conexion->query("INSERT INTO estacion4 (idEstacion4) VALUES (" . $id . ")");
	}


?>