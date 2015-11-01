<?php

$servername = "localhost";
$username = "root";
$password = "";

$conexion = null;
$direccion = 'http://pornuestropais.org/MED/';

try{
	$conexion = new PDO( "mysql:host=$servername;dbname=_MED",$username,$password);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $conexion;
} catch(PDOException $exepcion) {
	die( 'No se puede acceder a la BD!' );
}

?> 