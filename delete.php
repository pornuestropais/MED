<?php
	
	require_once "ConexionDB.php";




		$conexion->query("DELETE  FROM persona");
		$conexion->query("DELETE  FROM terapiafisica");
		$conexion->query("DELETE  FROM nutricion");
		$conexion->query("DELETE  FROM estomatologia");
		$conexion->query("DELETE  FROM estacion1");
		$conexion->query("DELETE  FROM estacion2");
		$conexion->query("DELETE  FROM estacion3");
		$conexion->query("DELETE  FROM estacion4");



?>