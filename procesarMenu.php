<?php

require_once "ConexionDB.php";

$id = $_POST["id"];
header( 'Location: '. $direccion.'menu.php?id='.$id );

?>