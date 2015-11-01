<?php

$servername = "localhost";
$username = "ciscstic_med";
$password = "Cisc.2015";

$conexion = null;
$direccion = 'http://pornuestropais.org/MED/';

try{
	$conexion = new PDO( "mysql:host=$servername;dbname=ciscstic_med",$username,$password);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $conexion;
} catch(PDOException $exepcion) {
	die( 'No se puede acceder a la BD!' );
}

?> 