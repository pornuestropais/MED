<?php
/**
 * Created by PhpStorm.
 * User: jrozon
 * Date: 10/31/2015
 * Time: 9:02 AM
 */
?>

<?php
require_once "ConexionDB.php";

$id = isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : 0;

$Peticion = $conexion->query( "SELECT * FROM persona WHERE IdPersona =  '".$id."'" );
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
         <form method="post" action="<?php echo $direccion; ?>procesarPersona.php" >
            <div class="form-group">
                  <label>ID Persona</label>
                  <input type="text" placeholder="Numeraci&oacute;n de la persona" class="form-control" name="IdPersona" required value="<?php echo ( isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : '' ); ?>" />
            </div>

            <div class="form-group">
               <label>Nombre</label>
               <input type="text" class="form-control" name="nombre" required value="<?php echo $Obtener[ 'nombre' ]; ?>" />
            </div>

            <div class="form-group">
               <label>Edad</label>
               <input type="text" class="form-control" name="edad" required value="<?php echo $Obtener[ 'edad' ]; ?>" />
            </div>

            <div class="form-group">
               <label>Sexo</label>
               <select name="sexo" class="form-control">
                  <?php
                  foreach( [ 'M', 'F' ] as $valor => $sexos ){
                     echo "<option value=\"$valor\" ".( ( $sexo == $valor ) ? 'selected' : '' ) .">$sexos</option>";
                  }
                  ?>
               </select>
            </div>

            <div class="form-group">
               <label>Direccion</label>
               <textarea required class="form-control" name="direccion"><?php echo $Obtener[ 'direccion' ]; ?></textarea>
            </div>

            <div class="form-group">
               <label>Estado Civil</label>
               <select name="estado_civil" class="form-control">
                  <?php
                  foreach( [ 'Casado(a)', 'Soltero(a)','Viudo(a)'] as $valor => $estado ){
                     echo "<option value=\"$valor\" ".( ( $estado_civil == $valor ) ? 'selected' : '' ) .">$estado</option>";
                  }
                  ?>
               </select>
            </div>

            <div class="form-group">
               <label>Cantidad de Hijos</label>
               <input required class="form-control" name="hijos"><?php echo $Obtener[ 'hijos' ]; ?>
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
