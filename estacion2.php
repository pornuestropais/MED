<?php
require_once "ConexionDB.php";

$id = isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : 0;

$Peticion = $conexion->query( "SELECT TA,FC, FR FROM estacion2 WHERE idEstacion2 =  '".$id."'" );
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
          <form method="post" action="<?php echo $direccion; ?>procesarEstacion2.php" >
            
            <div class="form-group">
              <label>ID Persona</label>
              <input type="text" readonly placeholder="Numeraci&oacute;n de la persona" class="form-control" name="id" required value="<?php echo ( isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : '' ); ?>" />
            </div>

            <div class="form-group">
              <label>TA</label>
              <input placeholder="Digitar informaci&oacute;n" type="text" class="form-control" name="TA" required value="<?php echo $Obtener[ 'TA' ]; ?>"/>
            </div>

            <div class="form-group">
              <label>FC</label>
              <input placeholder="Digitar informaci&oacute;n" type="text" class="form-control" name="FC" required value="<?php echo $Obtener[ 'FC' ]; ?>"/>
            </div>

            <div class="form-group">
              <label>FR</label>
              <input placeholder="Digitar informaci&oacute;n" type="text" class="form-control" name="FR" required value="<?php echo $Obtener[ 'FR' ]; ?>"/>
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script type="text/javascript">
      $('select').select2();
    </script>
  </body>
</html>