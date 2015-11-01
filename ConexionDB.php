<?php

$servername = "localhost";
$username = "root";
$password = "";

$conexion = null;
$direccion = 'http://148.255.78.61:8000/MED/';

try{
	$conexion = new PDO( "mysql:host=$servername;dbname=mydb",$username,$password);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $conexion;
} catch(PDOException $exepcion) {
	die( 'No se puede acceder a la BD!' );
}

?> 