<?php
	
	require_once "ConexionDB.php";

	$id = $POST['id'];
	$nombre = $POST['nombre'];
	$edad = $POST['edad'];
	$sexo = $POST['sexo'];
	$direccion = $POST['direccion'];
	$estado_civil = $POST['estado_civil'];
	$hijos = $POST['hijos'];

	$conexion = conectar();

	$sql = "Insert into Persona values (".$id.",'".$nombre."',".$edad.",'".$sexo."','".$direccion."','".$estado_civil."',".$hijos.");";

	$sql .= "Insert into TerapiaFisica (idTerapiaFisica) values (".$id.");";

	$sql .= "Insert into Nutricion (idNutricion) values (".$id.");";

	$sql .= "Insert into Estomatologia (idEstomatologia) values (".$id.");";

	$sql .= "Insert into Medicina (id, estacion1_idestacion1, estacion2_idestacion2, estacion3_idestacion3, estacion4_idestacion4) values (".$id.",".$id.",".$id.",".$id.",".$id.");";

	$sql .= "Insert into Estacion1 (idEstacion1) values (".$id.");";

	$sql .= "Insert into Estacion2 (idEstacion2) values (".$id.");";

	$sql .= "Insert into Estacion3 (idEstacion3) values (".$id.");";

	$sql .= "Insert into Estacion4 (idEstacion4) values (".$id.")";

	if (mysqli_query($conexion, $sql)) {
		#redireccionar a la pagina
		header('Location: expediente.html');
	}

	$conexion->close();
?>