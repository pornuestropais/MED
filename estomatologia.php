<?php
/**
 * Created by PhpStorm.
 * User: jrozon
 * Date: 10/31/2015
 * Time: 4:20 PM
 */
?>
<?php
require_once "ConexionDB.php";

$id = isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : 0;

$Peticion = $conexion->query( "SELECT * FROM estomatologia WHERE idEstomatologia =  '".$id."'" );
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
         <form method="post" action="<?php echo $direccion; ?>procesarEstomatologia.php" >
            <div class="form-group">
               <label>ID Persona</label>
               <input type="text" placeholder="Numeraci&oacute;n de la persona" class="form-control" name="IdPersona" required value="<?php echo ( isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : '' ); ?>" />
            </div>

            <div class="form-group">
               <label>Facilitador</label>
               <input type="text" class="form-control" name="facilitador" required value="<?php echo $Obtener[ 'facilitador' ]; ?>" />
            </div>

            <div class="form-group">
               <label>Ayuna</label>
               <select name="ayuna" class="form-control">
                  <?php
                  foreach( [ 'No', 'Si' ] as $valor => $nombre ){
                     echo "<option value=\"$valor\" ".( ( $ayuna == $valor ) ? 'selected' : '' ) .">$nombre</option>";
                  }
                  ?>
               </select>
            </div>

            <div class="form-group">
               <label>Tratamiento Medico</label>
               <select name="tratamiento_medico" class="form-control">
                  <?php
                  foreach( [ 'No', 'Si' ] as $valor => $nombre ){
                     echo "<option value=\"$valor\" ".( ( $tratamiento_medico == $valor ) ? 'selected' : '' ) .">$nombre</option>";
                  }
                  ?>
               </select>
            </div>

            <div class="form-group">
               <label>Tratamiento Medico Descripcion</label>
               <textarea required class="form-control" name="tratamiento_medico_descripcion"><?php echo $Obtener[ 'tratamiento_medico_descripcion' ]; ?></textarea>
            </div>

            <div class="form-group">
               <label>Enfermedad</label>
               <select name="enfermedad" class="form-control">
                  <?php
                  foreach( [ 'No', 'Si' ] as $valor => $nombre ){
                     echo "<option value=\"$valor\" ".( ( $enfermedad == $valor ) ? 'selected' : '' ) .">$nombre</option>";
                  }
                  ?>
               </select>
            </div>

            <div class="form-group">
               <label>Enfermedad Descripcion</label>
               <textarea required class="form-control" name="enfermedad_descripcion"><?php echo $Obtener[ 'enfermedad_descripcion' ]; ?></textarea>
            </div>

            <div class="form-group">
               <label>Alergias</label>
               <select name="alergias" class="form-control">
                  <?php
                  foreach( [ 'No', 'Si' ] as $valor => $nombre ){
                     echo "<option value=\"$valor\" ".( ( $alergias == $valor ) ? 'selected' : '' ) .">$nombre</option>";
                  }
                  ?>
               </select>
            </div>

            <div class="form-group">
               <label>Alergias Descripcion</label>
               <textarea required class="form-control" name="alergias_descripcion"><?php echo $Obtener[ 'alergias_descripcion' ]; ?></textarea>
            </div>
            <div class="form-group">
               <label>Diagnostico</label>
               <textarea required class="form-control" name="diiagnostico"><?php echo $Obtener[ 'diiagnostico' ]; ?></textarea>
            </div>

            <div class="form-group">
               <label>Tratamiento</label>
               <input type="text" class="form-control" name="tratamiento" required value="<?php echo $Obtener[ 'tratamiento' ]; ?>" />
            </div>

            <div class="form-group">
               <label>Nombre Supervisor</label>
               <input type="text" class="form-control" name="nombre_supervisor" required value="<?php echo $Obtener[ 'nombre_supervisor' ]; ?>" />
            </div>

            <div class="form-group">
               <button class="btn btn-primary">Procesar</button>
            </div>
         </form>
      </div>

   </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>
