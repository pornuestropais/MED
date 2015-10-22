<?php

$servername = "localhost";
$username = "mision";
$password = "clavemisionpucmm";

function conectar() {
	try{
		$conexion = new PDO("mysql:host=$servername;dbName=misionPUCMM,$username,$password");
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conexion;
	} catch(PDOException $exepcion) {
    	return null;
    }
}

?> 