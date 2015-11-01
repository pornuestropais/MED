<?php
require_once "ConexionDB.php";

$id = isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : 0;

$Peticion = $conexion->query( "SELECT * FROM Nutricion WHERE idNutricion =  '".$id."'" );
$Obtener = $Peticion->Fetch( );

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>Misi&oacute;n PUCMM</title>

   <!-- Bootstrap -->
   <link href="css/bootstrap.min.css" rel="stylesheet">

   <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>
<body>
<div class="container" style="margin-top: 20px;">
   <div class="row">
      <div class="col-md-12">
         <form method="post" action="<?php echo $direccion; ?>procesarNutricion.php" >
            <div class="form-group">
               <label>ID Persona</label>
               <input type="text" readonly placeholder="Numeraci&oacute;n de la persona" class="form-control" name="id" required value="<?php echo ( isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : '' ); ?>" />
            </div>

            <div class="form-group">
               <label>Peso</label>
               <input type="number" class="form-control" name="peso" required value="<?php echo $Obtener[ 'peso' ]; ?>" />
            </div>

            <div class="form-group">
               <label>Talla</label>
               <input type="number" class="form-control" name="talla" required value="<?php echo $Obtener[ 'talla' ]; ?>" />
            </div>

            <div class="form-group">
               <label>IMC</label>
               <input required type="number" class="form-control" name="imc" value="<?php echo $Obtener[ 'imc' ]; ?>"/>
            </div>

            <div class="form-group">
               <label>Circunferencia Branquial</label>
               <input required type="number" class="form-control" name="circunferencia_branquial" value="<?php echo $Obtener[ 'circunferencia_branquial' ]; ?>"/>
            </div>

            <div class="form-group">
               <label>Circunferencia Abdominal</label>
               <input required type="number" class="form-control" name="circunferencia_abdominal" value="<?php echo $Obtener[ 'circunferencia_abdominal' ]; ?>" />
            </div>

            <div class="form-group">
               <label>Circunferencia Cadera</label>
               <input required type="number" class="form-control" name="circunferencia_Cadera" value="<?php echo $Obtener[ 'circunferencia_Cadera' ]; ?>">
            </div>

            <div class="form-group">
               <label>Pliegue Tricipital</label>
               <input required type="number" class="form-control" name="pliegue_tricipital" value="<?php echo $Obtener[ 'pliegue_tricipital' ]; ?>">
            </div>

            <div class="form-group">
               <label>Pliegue Branquial</label>
               <input required type="number" class="form-control" name="pliegue_branquial" value="<?php echo $Obtener[ 'pliegue_branquial' ]; ?>">
            </div>

            <div class="form-group">
               <label>Pliegue Cadera</label>
               <input required type="number" class="form-control" name="pliegue_cadera" value="<?php echo $Obtener[ 'pliegue_cadera' ]; ?>">
            </div>

            <div class="form-group">
               <label>Pliegue Muslo</label>
               <input required type="number" class="form-control" name="pliegue_muslo" value="<?php echo $Obtener[ 'pliegue_muslo' ]; ?>">
            </div>

            <div class="form-group">
               <button class="btn btn-primary" style="display: block; width: 100%;margin-bottom: 10px">Procesar</button>
            </div>
         </form>
      </div>
      <div class="form-group">
         <div class="col-xs-6 col-md-12">
            <a href="<?php echo $direccion;?>index.php">
               <button class="btn btn-danger" style="display: block; width: 100%;margin-bottom: 10px">Volver Atras</button>
            </a>
         </div>
      </div>
   </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>
